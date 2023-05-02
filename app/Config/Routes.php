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
    $routes->get('', 'User::admin', ['as' => 'admin-index']);
    $routes->get('dosen', 'Admin\Dosen::index', ['as' => 'admin-dosen']);
    $routes->get('mahasiswa', 'Admin\Mahasiswa::index', ['as' => 'admin-mahasiswa']);
    $routes->get('prodi', 'Admin\Prodi::index', ['as' => 'admin-prodi']);
    $routes->get('lomba', 'Admin\Lomba::index', ['as' => 'admin-lomba']);
    $routes->get('rekognisi', 'Admin\Rekognisi::index', ['as' => 'admin-rekognisi']);
});




// $routes->get('/percobaan/(:any)', 'Home::index/$1'); // apapun
// $routes->get('/percobaan/(:segment)', 'Home::index/$1'); // apapun kecuali slash
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
