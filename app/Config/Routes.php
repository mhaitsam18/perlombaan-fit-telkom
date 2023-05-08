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

//AUTH
// $routes->get('/login', 'Auth::login');
// $routes->get('/admin/login', 'Auth::login_admin');

//AUTH
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('', 'User::admin', ['as' => 'admin']);
    $routes->get('index', 'User::admin', ['as' => 'admin-index']);

    $routes->group('dosen', static function ($routes) {
        $routes->get('', 'Admin\Dosen::index', ['as' => 'admin-dosen']);
        $routes->get('(:any)', 'Admin\Dosen::show/$1', ['as' => 'show-dosen']);
        $routes->get('create', 'Admin\Dosen::create', ['as' => 'create-dosen']);
        $routes->post('store', 'Admin\Dosen::store', ['as' => 'store-dosen']);
        $routes->get('edit/(:any)', 'Admin\Dosen::edit/$1', ['as' => 'edit-dosen']);
        $routes->put('update/(:num)', 'Admin\Dosen::update/$i', ['as' => 'update-dosen']);
        $routes->delete('delete/(:num)', 'Admin\Dosen::delete/$1', ['as' => 'delete-dosen']);
    });
    $routes->group('mahasiswa', static function ($routes) {
        $routes->get('', 'Admin\Mahasiswa::index', ['as' => 'admin-mahasiswa']);
        $routes->get('(:any)', 'Admin\Mahasiswa::show/$1', ['as' => 'show-mahasiswa']);
        $routes->get('create', 'Admin\Mahasiswa::create', ['as' => 'create-mahasiswa']);
        $routes->post('store', 'Admin\Mahasiswa::store', ['as' => 'store-mahasiswa']);
        $routes->get('edit/(:any)', 'Admin\Mahasiswa::edit/$1', ['as' => 'edit-mahasiswa']);
        $routes->put('update/(:num)', 'Admin\Mahasiswa::update/$i', ['as' => 'update-mahasiswa']);
        $routes->delete('delete/(:num)', 'Admin\Mahasiswa::delete/$1', ['as' => 'delete-mahasiswa']);
    });
    $routes->group('prodi', static function ($routes) {
        $routes->get('', 'Admin\Prodi::index', ['as' => 'admin-prodi']);
        $routes->get('(:any)', 'Admin\Prodi::show/$1', ['as' => 'show-prodi']);
        $routes->get('create', 'Admin\Prodi::create', ['as' => 'create-prodi']);
        $routes->post('store', 'Admin\Prodi::store', ['as' => 'store-prodi']);
        $routes->get('edit/(:any)', 'Admin\Prodi::edit/$1', ['as' => 'edit-prodi']);
        $routes->put('update/(:num)', 'Admin\Prodi::update/$i', ['as' => 'update-prodi']);
        $routes->delete('delete/(:num)', 'Admin\Prodi::delete/$1', ['as' => 'delete-prodi']);
    });
    $routes->group('lomba', static function ($routes) {
        $routes->get('', 'Admin\Lomba::index', ['as' => 'admin-lomba']);
        $routes->get('(:any)', 'Admin\Lomba::show/$1', ['as' => 'show-lomba']);
        $routes->get('create', 'Admin\Lomba::create', ['as' => 'create-lomba']);
        $routes->post('store', 'Admin\Lomba::store', ['as' => 'store-lomba']);
        $routes->get('edit/(:any)', 'Admin\Lomba::edit/$1', ['as' => 'edit-lomba']);
        $routes->put('update/(:num)', 'Admin\Lomba::update/$i', ['as' => 'update-lomba']);
        $routes->delete('delete/(:num)', 'Admin\Lomba::delete/$1', ['as' => 'delete-lomba']);
    });
    $routes->group('rekognisi', static function ($routes) {
        $routes->get('', 'Admin\Rekognisi::index', ['as' => 'admin-rekognisi']);
        $routes->get('(:any)', 'Admin\Rekognisi::show/$1', ['as' => 'show-rekognisi']);
        $routes->get('create', 'Admin\Rekognisi::create', ['as' => 'create-rekognisi']);
        $routes->post('store', 'Admin\Rekognisi::store', ['as' => 'store-rekognisi']);
        $routes->get('edit/(:any)', 'Admin\Rekognisi::edit/$1', ['as' => 'edit-rekognisi']);
        $routes->put('update/(:num)', 'Admin\Rekognisi::update/$i', ['as' => 'update-rekognisi']);
        $routes->delete('delete/(:num)', 'Admin\Rekognisi::delete/$1', ['as' => 'delete-rekognisi']);
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
