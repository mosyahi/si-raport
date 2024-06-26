<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\LoginController::index');

//AUTH
$routes->get('login', 'Auth\LoginController::index');
$routes->post('login', 'Auth\LoginController::login');
$routes->get('logout', 'Auth\LoginController::logout');

// ADMIN AKSES
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index');
    $routes->post('search', 'Admin\DashboardController::search');

    //data pengguna (UDAH JADI)
    $routes->get('data-pengguna', 'Admin\UserController::index');
    $routes->get('data-pengguna/new', 'Admin\UserController::new');
    $routes->post('data-pengguna/add', 'Admin\UserController::add');
    $routes->get('data-pengguna/edit/(:num)', 'Admin\UserController::edit/$1');
    $routes->post('data-pengguna/update/(:num)', 'Admin\UserController::update/$1');
    $routes->get('data-pengguna/delete/(:num)', 'Admin\UserController::delete/$1');

    //kelola siswa
    $routes->get('kelola_siswa', 'Admin\KelSiswaController::index');
    $routes->get('kelola_siswa/new', 'Admin\KelSiswaController::new');
    $routes->post('kelola_siswa/add', 'Admin\KelSiswaController::add');
    $routes->get('kelola_siswa/edit/(:num)', 'Admin\KelSiswaController::edit/$1');
    $routes->post('kelola_siswa/update/(:num)', 'Admin\KelSiswaController::update/$1');
    $routes->get('kelola_siswa/delete/(:num)', 'Admin\KelSiswaController::delete/$1');

    //kelola guru
    $routes->get('kelola_guru', 'Admin\KelGuruController::index');
    $routes->get('kelola_guru/new', 'Admin\KelGuruController::new');
    $routes->post('kelola_guru/add', 'Admin\KelGuruController::add');
    $routes->get('kelola_guru/edit/(:num)', 'Admin\KelGuruController::edit/$1');
    $routes->post('kelola_guru/update/(:num)', 'Admin\KelGuruController::update/$1');
    $routes->get('kelola_guru/delete/(:num)', 'Admin\KelGuruController::delete/$1');

    //kelola walikelas
    $routes->get('kelola_walikelas', 'Admin\KelWalikelasController::index');
    $routes->get('kelola_walikelas/new', 'Admin\KelWalikelasController::new');
    $routes->post('kelola_walikelas/add', 'Admin\KelWalikelasController::add');
    $routes->get('kelola_walikelas/edit/(:num)', 'Admin\KelWalikelasController::edit/$1');
    $routes->post('kelola_walikelas/update/(:num)', 'Admin\KelWalikelasController::update/$1');
    $routes->get('kelola_walikelas/delete/(:num)', 'Admin\KelWalikelasController::delete/$1');

    //kelola kelas (UDAH JADI)
    $routes->get('kelola_kelas', 'Admin\KelKelasController::index');
    $routes->post('kelola_kelas/add', 'Admin\KelKelasController::add');
    $routes->post('kelola_kelas/update/(:num)', 'Admin\KelKelasController::update/$1');
    $routes->get('kelola_kelas/delete/(:num)', 'Admin\KelKelasController::delete/$1');

    //kelola semester (UDAH JADI)
    $routes->get('kelola_semester', 'Admin\KelSemesterController::index');
    $routes->post('kelola_semester/add', 'Admin\KelSemesterController::add');
    $routes->post('kelola_semester/update/(:num)', 'Admin\KelSemesterController::update/$1');
    $routes->get('kelola_semester/delete/(:num)', 'Admin\KelSemesterController::delete/$1');

    //kelola tahun ajar (UDAH JADI)
    $routes->get('kelola_tahun_ajar', 'Admin\KelSetTahunController::index');
    $routes->post('kelola_tahun_ajar/add', 'Admin\KelSetTahunController::add');
    $routes->post('kelola_tahun_ajar/update/(:num)', 'Admin\KelSetTahunController::update/$1');
    $routes->get('kelola_tahun_ajar/delete/(:num)', 'Admin\KelSetTahunController::delete/$1');

    //kelola mapel
    $routes->get('kelola_mapel', 'Admin\KelMapelController::index');
    $routes->post('kelola_mapel/add', 'Admin\KelMapelController::add');
    $routes->get('kelola_mapel/edit/(:num)', 'Admin\KelMapelController::edit/$1');
    $routes->post('kelola_mapel/update/(:num)', 'Admin\KelMapelController::update/$1');
    $routes->get('kelola_mapel/delete/(:num)', 'Admin\KelMapelController::delete/$1');

    //Kelola Kompotensi Dasar (KD)
    $routes->get('kelola_kd', 'Admin\SetKdController::index');
    $routes->get('kelola_kd/new', 'Admin\SetKdController::new');
    $routes->post('kelola_kd/add', 'Admin\SetKdController::add');
    $routes->get('kelola_kd/edit/(:num)', 'Admin\SetKdController::edit/$1');
    $routes->post('kelola_kd/update/(:num)', 'Admin\SetKdController::update/$1');
    $routes->get('kelola_kd/delete/(:num)', 'Admin\SetKdController::delete/$1');

    //kelola raport
    $routes->get('kelola_raport', 'Admin\KelRaportController::index');
    $routes->get('kelola_raport/new', 'Admin\KelRaportController::new');
    $routes->post('kelola_raport/add', 'Admin\KelRaportController::add');
    $routes->get('kelola_raport/view/(:num)', 'Admin\KelRaportController::view/$1');
    $routes->post('kelola_raport/update/(:num)', 'Admin\KelRaportController::update/$1');
    $routes->get('kelola_raport/delete/(:num)', 'Admin\KelRaportController::delete/$1');
    $routes->get('kelola_raport/cetak_raport/(:num)', 'Admin\KelRaportController::pdf/$1');

    //kelola set kelas
    $routes->get('kelola_set_kelas', 'Admin\KelSetKelasController::index');

    //kelola set mapel
    $routes->get('kelola_set_mapel', 'Admin\KelSetMapelController::index');
});

// GURU AKSES
$routes->group('guru', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Guru\DashboardController::index');

    //kelas (UDAH JADI)
    $routes->get('kelas', 'Guru\KelasController::index');
    $routes->post('kelas/add', 'Guru\KelasController::add');
    $routes->post('kelas/update/(:num)', 'Guru\KelasController::update/$1');
    $routes->get('kelas/delete/(:num)', 'Guru\KelasController::delete/$1');

    //nilai
    $routes->get('nilai', 'Guru\NilaiController::index');
    $routes->get('test', 'Guru\NilaiController::test');
    $routes->get('nilai/new', 'Guru\NilaiController::new');
    $routes->get('search', 'Guru\NilaiController::index');
    $routes->post('search', 'Guru\NilaiController::search');
    $routes->post('pagination', 'Guru\NilaiController::index');
    $routes->post('nilai/add', 'Guru\NilaiController::add');
    $routes->post('nilai/update/(:num)', 'Guru\NilaiController::update/$1');
    $routes->post('nilai/delete/(:num)', 'Guru\NilaiController::delete/$1');

});

// SISWA AKSES
$routes->group('siswa', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Siswa\DashboardController::index');
});

// WALI KELAS AKSES
$routes->group('wakel', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Wakel\DashboardController::index');

    //input-nilai
    $routes->get('nilai', 'Wakel\InputNilaiController::index');
    $routes->get('search', 'Wakel\InputNilaiController::index');
    $routes->post('search', 'Wakel\InputNilaiController::search');
    $routes->post('nilai/add', 'Wakel\InputNilaiController::add');
    $routes->post('nilai/update/(:num)', 'Wakel\InputNilaiController::update/$1');
    $routes->post('nilai/delete/(:num)', 'Wakel\InputNilaiController::delete/$1');
    
    //Raport
    $routes->get('raport', 'Wakel\RaportController::index');
    $routes->post('raport/update/(:num)', 'Wakel\RaportController::update/$1');
    $routes->post('raport/delete/(:num)', 'Wakel\RaportController::delete/$1');
});

// KEPALA SEKOLAH AKSES
$routes->group('kepsek', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Kepsek\DashboardController::index');

    // RAPORT
    $routes->get('kelola_raport', 'Kepsek\RaportController::index');
    $routes->get('kelola_raport/view/(:num)', 'Kepsek\RaportController::view/$1');
    $routes->get('kelola_raport/cetak_raport/(:num)', 'Kepsek\RaportController::cetak/$1');
});