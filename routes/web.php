<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/empresas', function () {
    return view('empresas');
});
Route::get('/hogares', function () {
    return view('hogares');
});
Route::get('/saga', function () {
    return view('saga');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/enviado', function () {
    return view('enviado');
});

Route::post('/enviado', 'MailController@sendmail');

// Servicios Empresas
Route::get('/servicios/empresas/desratizacion', function () {
    return view('servicios.desratizacion-empresas');
});
Route::get('/servicios/empresas/sanitizacion', function () {
    return view('servicios.sanitizacion-empresas');
});
Route::get('/servicios/empresas/desinsectacion', function () {
    return view('servicios.desinsectacion-empresas');
});
Route::get('/servicios/empresas/otras-plagas', function () {
    return view('servicios.otras-plagas-empresas');
});
Route::get('/servicios/empresas/ornamentacion', function () {
    return view('servicios.ornamentacion-empresas');
});

//Servicios Hogares
Route::get('/servicios/hogares/desratizacion', function () {
    return view('servicios.desratizacion-hogares');
});
Route::get('/servicios/hogares/sanitizacion', function () {
    return view('servicios.sanitizacion-hogares');
});
Route::get('/servicios/hogares/desinsectacion', function () {
    return view('servicios.desinsectacion-hogares');
});
Route::get('/servicios/hogares/otras-plagas', function () {
    return view('servicios.otras-plagas-hogares');
});
Route::get('/servicios/hogares/ornamentacion', function () {
    return view('servicios.ornamentacion-hogares');
});
