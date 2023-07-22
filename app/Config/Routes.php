<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//HOME

$routes->get('/', 'User::index', ['as' => 'user-index']);
$routes->get('/beranda', 'Home::index', ['as' => 'home-beranda']);
$routes->get('/perlombaan', 'Home::perlombaan', ['as' => 'home-perlombaan']);
$routes->get('/tentang-kami', 'Home::tentang_kami', ['as' => 'home-tentang-kami']);
$routes->get('/faq', 'Home::faq', ['as' => 'home-faq']);
$routes->get('/kontak-kami', 'Home::kontak_kami', ['as' => 'home-kontak-kami']);
$routes->get('/informasi-dosen', 'Home::informasi_dosen', ['as' => 'home-informasi-dosen']);
$routes->get('/validasi-lomba', 'Home::validasi_lomba', ['as' => 'home-validasi-lomba']);

$routes->post('/tmp-upload', 'File::upload', ['as' => 'tmp-upload']);
$routes->delete('/tmp-delete', 'File::delete', ['as' => 'tmp-delete']);


$routes->group('mahasiswa', static function ($routes) {
    $routes->group('rekognisi', static function ($routes) {
        $routes->get('', 'Mahasiswa\Rekognisi::index', ['as' => 'mahasiswa-rekognisi-index']);
        $routes->post('', 'Mahasiswa\Rekognisi::store', ['as' => 'mahasiswa-rekognisi-store']);
        $routes->post('anggota', 'Mahasiswa\Rekognisi::storeAnggota', ['as' => 'mahasiswa-rekognisi-store-anggota']);
        $routes->get('list', 'Mahasiswa\Rekognisi::list', ['as' => 'mahasiswa-rekognisi-list']);
        $routes->delete('delete/(:num)', 'Mahasiswa\rekognisi::delete/$1', ['as' => 'mahasiswa-rekognisi-delete']);
    });
    $routes->group('pendataan-lomba', static function ($routes) {
        $routes->get('', 'Mahasiswa\PendataanLomba::index', ['as' => 'mahasiswa-pendataan-lomba-index']);
        $routes->post('', 'Mahasiswa\PendataanLomba::store', ['as' => 'mahasiswa-pendataan-lomba-store']);
        $routes->get('list', 'Mahasiswa\PendataanLomba::list', ['as' => 'mahasiswa-pendataan-lomba-list']);
        $routes->delete('delete/(:num)', 'Mahasiswa\PendataanLomba::delete/$1', ['as' => 'mahasiswa-pendataan-lomba-delete']);
        $routes->post('anggota', 'Mahasiswa\PendataanLomba::storeAnggota', ['as' => 'mahasiswa-pendataan-lomba-store-anggota']);
        $routes->post('update-status', 'Mahasiswa\PendataanLomba::updateStatus', ['as' => 'mahasiswa-pendataan-lomba-update-status']);
    });
});


//AUTH
// $routes->get('/login', 'Auth::login');
// $routes->get('/admin/login', 'Auth::login_admin');

$routes->get('/perlombaan/(:any)', 'Home::detail_perlombaan/$1', ['as' => 'detail-home-perlombaan']);

//AUTH
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('', 'User::admin', ['as' => 'admin']);
    $routes->get('index', 'User::admin', ['as' => 'admin-index']);

    $routes->group('dosen', static function ($routes) {
        $routes->get('', 'Admin\Dosen::index', ['as' => 'admin-dosen']);
        $routes->get('create', 'Admin\Dosen::create', ['as' => 'create-dosen']);
        $routes->get('edit/(:any)', 'Admin\Dosen::edit/$1', ['as' => 'edit-dosen']);
        $routes->get('(:any)', 'Admin\Dosen::show/$1', ['as' => 'show-dosen']);
        $routes->put('(:num)', 'Admin\Dosen::update/$1', ['as' => 'update-dosen']);
        $routes->post('', 'Admin\Dosen::store', ['as' => 'store-dosen']);
        $routes->delete('delete/(:num)', 'Admin\Dosen::delete/$1', ['as' => 'delete-dosen']);
    });
    $routes->group('mahasiswa', static function ($routes) {
        $routes->get('', 'Admin\Mahasiswa::index', ['as' => 'admin-mahasiswa']);
        $routes->get('create', 'Admin\Mahasiswa::create', ['as' => 'create-mahasiswa']);
        $routes->get('edit/(:any)', 'Admin\Mahasiswa::edit/$1', ['as' => 'edit-mahasiswa']);
        $routes->get('(:any)', 'Admin\Mahasiswa::show/$1', ['as' => 'show-mahasiswa']);
        $routes->post('', 'Admin\Mahasiswa::store', ['as' => 'store-mahasiswa']);
        $routes->put('(:num)', 'Admin\Mahasiswa::update/$1', ['as' => 'update-mahasiswa']);
        $routes->delete('delete/(:num)', 'Admin\Mahasiswa::delete/$1', ['as' => 'delete-mahasiswa']);
    });
    $routes->group('prodi', static function ($routes) {
        $routes->get('', 'Admin\Prodi::index', ['as' => 'admin-prodi']);
        $routes->get('create', 'Admin\Prodi::create', ['as' => 'create-prodi']);
        $routes->get('edit/(:any)', 'Admin\Prodi::edit/$1', ['as' => 'edit-prodi']);
        $routes->get('(:any)', 'Admin\Prodi::show/$1', ['as' => 'show-prodi']);
        $routes->post('', 'Admin\Prodi::store', ['as' => 'store-prodi']);
        $routes->put('(:num)', 'Admin\Prodi::update/$1', ['as' => 'update-prodi']);
        $routes->delete('delete/(:num)', 'Admin\Prodi::delete/$1', ['as' => 'delete-prodi']);
    });
    $routes->group('lomba', static function ($routes) {
        $routes->get('', 'Admin\Lomba::index', ['as' => 'admin-lomba']);
        $routes->get('create', 'Admin\Lomba::create', ['as' => 'create-lomba']);
        $routes->get('edit/(:any)', 'Admin\Lomba::edit/$1', ['as' => 'edit-lomba']);
        $routes->get('(:any)', 'Admin\Lomba::show/$1', ['as' => 'show-lomba']);
        $routes->post('', 'Admin\Lomba::store', ['as' => 'store-lomba']);
        $routes->put('(:num)', 'Admin\Lomba::update/$1', ['as' => 'update-lomba']);
        $routes->delete('delete/(:num)', 'Admin\Lomba::delete/$1', ['as' => 'delete-lomba']);
        $routes->post('nonaktifkan/(:num)', 'Admin\Lomba::nonaktifkan/$1', ['as' => 'nonaktifkan-lomba']);
    });
    $routes->group('rekognisi', static function ($routes) {
        $routes->get('', 'Admin\Rekognisi::index', ['as' => 'admin-rekognisi']);
        $routes->get('print', 'Admin\Rekognisi::print', ['as' => 'print-rekognisi']);
        $routes->get('create', 'Admin\Rekognisi::create', ['as' => 'create-rekognisi']);
        $routes->get('edit/(:any)', 'Admin\Rekognisi::edit/$1', ['as' => 'edit-rekognisi']);
        $routes->get('(:any)', 'Admin\Rekognisi::show/$1', ['as' => 'show-rekognisi']);
        $routes->post('', 'Admin\Rekognisi::store', ['as' => 'store-rekognisi']);
        $routes->put('(:num)', 'Admin\Rekognisi::update/$1', ['as' => 'update-rekognisi']);
        $routes->delete('delete/(:num)', 'Admin\Rekognisi::delete/$1', ['as' => 'delete-rekognisi']);
        $routes->post('update-status', 'Admin\Rekognisi::updateStatus', ['as' => 'update-status-rekognisi']);
    });
    $routes->group('pendataan-lomba', static function ($routes) {
        $routes->get('', 'Admin\PendataanLomba::index', ['as' => 'admin-pendataan-lomba']);
        $routes->get('print', 'Admin\PendataanLomba::print', ['as' => 'print-pendataan-lomba']);
        $routes->get('create', 'Admin\PendataanLomba::create', ['as' => 'create-pendataan-lomba']);
        $routes->get('edit/(:any)', 'Admin\PendataanLomba::edit/$1', ['as' => 'edit-pendataan-lomba']);
        $routes->get('(:any)', 'Admin\PendataanLomba::show/$1', ['as' => 'show-pendataan-lomba']);
        $routes->post('', 'Admin\PendataanLomba::store', ['as' => 'store-pendataan-lomba']);
        $routes->put('(:num)', 'Admin\PendataanLomba::update/$1', ['as' => 'update-pendataan-lomba']);
        $routes->delete('delete/(:num)', 'Admin\PendataanLomba::delete/$1', ['as' => 'delete-pendataan-lomba']);
    });
});




// $routes->get('/percobaan/(:any)', 'Home::index/$1'); // apapun
// $routes->get('/percobaan/(:any)', 'Home::index/$1'); // apapun kecuali slash
// $routes->get('/percobaan/(:num)', 'Home::index/$1'); // hanya angka
// $routes->get('/percobaan/(:alpha)', 'Home::index/$1'); // hanya alphabet
// $routes->get('/percobaan/(:alphanum)', 'Home::index/$1'); // hanya angka & alphabet

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
