<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin', 'admin::index');
$routes->get('/kamera/tambah_kamera', 'Kamera::tambah_kamera');
$routes->get('/kamera/edit/(:segment)', 'Kamera::edit/$1');
$routes->get('/alternative/compare/(:segment)', 'Alternative::compare/$1');
$routes->delete('/users/(:num)', 'Users::delete/$1');
$routes->delete('/kamera/(:num)', 'Kamera::delete/$1');
$routes->get('/kamera/(:any)', 'Kamera::detail/$1');
$routes->get('/katalog','Home::catalog');
$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
