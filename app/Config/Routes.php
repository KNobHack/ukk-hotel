<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$the_routes = function () use ($routes) {
    // Tamu Routes Start
    $routes->get('/', 'Home::index');
    // Tamu Routes End

    // Admin Routes Start
    $routes->get('petugas', 'Auth::petugas');
    $routes->post('petugas', 'Auth::petugasSubmit');

    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth:Administrator']);

    $routes->presenter('kamar', [
        'only' => ['index', 'create', 'update', 'delete'],
        'placeholder' => '(:num)',
        'filter' => 'auth:Administrator',
    ]);

    $routes->presenter('tipe-kamar', [
        'only'        => ['index', 'show', 'create', 'update', 'delete'],
        'placeholder' => '(:num)',
        'controller'  => 'TipeKamar',
        'filter'      => 'auth:Administrator'
    ]);
    $routes->post('tipe-kamar/update/foto/(:num)', 'TipeKamar::updateFoto/$1', ['filter' => 'auth:Administrator']);
    $routes->post('tipe-kamar/add/fasilitas/(:num)', 'TipeKamar::fasilitasAdd/$1', ['filter' => 'auth:Administrator']);

    $routes->presenter('fasilitas-hotel', [
        'only'        => ['index', 'create', 'update', 'delete'],
        'placeholder' => '(:num)',
        'controller'  => 'FasilitasHotel',
        'filter'      => 'auth:Administrator'
    ]);
    $routes->post('fasilitas-hotel/update/foto/(:num)', 'FasilitasHotel::updateFoto/$1', ['filter' => 'auth:Administrator']);

    $routes->post('fasilitas-kamar/delete/(:num)', 'FasilitasKamar::delete/$1', ['filter' => 'auth:Administrator']);
    // Admin Routes End

    $routes->get('logout', 'Auth::logout');

    $routes->get('/health', function () {
        $response = \Config\Services::response();
        return $response->setJSON(['status' => 'healty']);
    });
};

// run the normal routes
$the_routes();

// run routes with localization
$routes->group('{locale}', function () use ($the_routes) {
    $locale = Services::request()->getUri()->getSegment(1);
    $suportedLoceles = (new App)->supportedLocales;

    // Mencegah locale random masuk ke url
    if (in_array($locale, $suportedLoceles)) {
        $the_routes();
    }
});



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
