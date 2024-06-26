<?= $this->extend('layouts/dashboard/main'); ?>
<?= $this->section('content'); ?>


<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Dashboard /</span> Kelola Guru
        </h4>

        <!-- Basic Bootstrap Table -->
        <?= $this->include('components/alerts'); ?>
        <div class="card">
            <div class="card-header">
                <div class="add-button-container">
                    <h5>Data Guru</h5>
                    <a href="<?= base_url('admin/kelola_guru/new'); ?>" class="btn btn-primary add-button">
                        <span class="tf-icons bx bx-plus-circle"></span>&nbsp;Tambah Guru
                    </a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($dataGuru as $item) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td>
                                    <img src="<?= base_url('uploads/guru/' . $item['foto']) ?>" alt="<?= $item['nama_guru'] ?>" style="width: 50px; height: 50px;">
                                </td>
                                <td><?= $item['nama_guru'] ?></td>
                                <td><?= $item['nip'] ?></td>
                                <td><?= date('d/m/Y', strtotime($item['tgl_lahir'])) ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url('admin/kelola_guru/edit/' . $item['id_guru']) ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#confirmation-modal-<?= $item['id_guru'] ?>">
                                                <i class="bx bx-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="demo-inline-spacing">
                <nav class="d-flex justify-content-between align-items-center" aria-label="Page navigation">
                    <ul class="pagination">
                        <!-- JS -->
                    </ul>
                    <select class="form-select" id="items-per-page" style="width: 73px;">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                </nav>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <?php foreach ($dataGuru as $key => $item) : ?>
        <div class="modal fade" id="confirmation-modal-<?= $item['id_guru'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="mb-20">Apakah Anda yakin ingin menghapus data guru ini?</h4>
                        <i class="bx bx-trash"></i>
                        <p class="mb-30" style="color: red;">Data guru yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="<?= base_url('admin/kelola_guru/delete/' . $item['id_guru']) ?>" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= $this->endSection(); ?>