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
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::index');
$routes->get('/perlombaan', 'Home::perlombaan');
$routes->get('/tentang-kami', 'Home::tentang_kami');
$routes->get('/faq', 'Home::faq');
$routes->get('/kontak-kami', 'Home::kontak_kami');
$routes->get('/informasi-dosen', 'Home::informasi_dosen');
$routes->get('/validasi-lomba', 'Home::validasi_lomba');

//AUTH
// $routes->get('/login', 'Auth::login');
// $routes->get('/admin/login', 'Auth::login_admin');






$routes->get('/admin/dosen', 'Admin\Dosen::index');
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
