<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KdModel;
use App\Models\MapelModel;

class SetKdController extends BaseController
{
    public function index()
    {
        $kd = new KdModel();
        $dataKd = $kd->findAll();

        $mapel = new MapelModel();
        $dataMapel = $mapel->findAll();

        foreach ($dataKd as &$item) {
            $mapelRelasi = $mapel->find($item['id_mapel']);
            if ($mapelRelasi) {
                $item['mata_pelajaran'] = $mapelRelasi['mata_pelajaran'];
                $item['id_kelas'] = $mapelRelasi['id_kelas'];
            } else {
                $item['mata_pelajaran'] = 'Tidak Diketahui';
                $item['id_kelas'] = 'Tidak Diketahui';
            }
        }

        $data = [
            'active' => 'kd',
            'title' => 'Kelola KD',
            'dataKd' => $dataKd,
            'dataMapel' => $dataMapel,
        ];
        return view('pages/admin/kelola_kd/index', $data);
    }

    public function new()
    {
        $mapel = new MapelModel();
        $dataMapel = $mapel->findAll();

        $data = [
            'active' => 'kd',
            'title' => 'Tambah KD',
            'dataMapel' => $dataMapel,
        ];

        return view('pages/admin/kelola_kd/new', $data);
    }

    public function add()
    {
        $mapelModel = new MapelModel();
        $model = new KdModel();

        $validationRules = [
            'id_mapel.*' => 'required',
            'indikator_kd.*' => 'required',
            'deskripsi_kd.*' => 'required',
            'materi_pembelajaran.*' => 'required',
            'penilaian.*' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            $errorMessages = implode('<br>', $this->validator->getErrors());
            return redirect()->back()->withInput()->with('error', $errorMessages);
        }

        $formData = $this->request->getPost();

        // Melintasi data formulir dan menyimpan setiap set data secara terpisah.
        foreach ($formData['id_mapel'] as $formCount => $id_mapel) {
            $data = [
                'id_mapel' => $id_mapel,
                'indikator_kd' => $formData['indikator_kd'][$formCount],
                'deskripsi_kd' => $formData['deskripsi_kd'][$formCount],
                'materi_pembelajaran' => $formData['materi_pembelajaran'][$formCount],
                'penilaian' => $formData['penilaian'][$formCount],
            ];

            $cekKesamaan = $model->where('id_mapel', $data['id_mapel'])
            ->where('indikator_kd', $data['indikator_kd'])
            ->countAllResults();

            if ($cekKesamaan > 0) {
                return redirect()->to('admin/kelola_kd/new')->withInput()->with('error', 'Data tersebut sudah ada dan tidak boleh sama.');
            }

            $model->insert($data);
        }

        return redirect()->to('admin/kelola_kd')->with('success', 'Data kompetensi dasar berhasil ditambahkan.');
    }

    public function delete($id)
    {
        $kdModel = new KdModel();
        $kd = $kdModel->find($id);

        if ($kd) {
            $kdModel->delete($id);

            session()->setFlashdata('success', 'Data KD berhasil dihapus.');
        }
        return redirect()->back();
    }
}