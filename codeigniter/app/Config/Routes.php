<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
/*
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/login/register', 'Login::register');
$routes->get('personen/ced_edit', 'Personen::ced_edit');
$routes->get('login/logout', 'Login::logout');
$routes->get('personen', 'Personen::index');
$routes->get('personen/index', 'Personen::index');*/

$routes->get('/', 'Login::index');
$routes->get('Login', 'Login::index');
$routes->get('Aufgaben', 'Aufgaben::index');
$routes->get('Todo', 'Todo::index');
$routes->get('Projekte', 'Projekte::index');
$routes->get('Personen', 'Personen::index');
$routes->get('Reiter', 'Reiter::index');
$routes->get('Register', 'Login::register');
$routes->get('Logout', 'Login::logout');

/*
$routes->add('personen', 'Personen::index');
$routes->add('login','Login::index');
$routes->add('projekte', 'Projekte::index');
$routes->add('todo','Todo::index');
$routes->add('reiter','Reiter::index');
$routes->add('aufgaben','Aufgaben::index');
$routes->add('personen','Personen::index');
$routes->add('personen/ced_edit/(:num)', 'Personen::ced_edit/$2');
$routes->add('personen/ced_edit/(:num)/(:num)', 'Personen::ced_edit/$1/$2');
$routes->add('personen', 'Personen::getIndex');*/

$routes->post('Personen', 'Personen::index');
$routes->post('Login','Login::index');

$routes->post('personen/loeschen','Personen::loeschen');
$routes->post('personen/submit_edit','Personen::submit_edit');
$routes->post('personen/edit', 'Personen::edit');
$routes->post('/login/index', 'Login::index');
$routes->post('login/register', 'Login::register');
//$routes->post('/personen/index', 'Personen::index');
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
