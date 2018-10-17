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
Route::get('/servicios/desratizacion', function () {
    return view('servicios.desratizacion');
});
Route::get('/servicios/sanitizacion', function () {
    return view('servicios.sanitizacion');
});
Route::get('/servicios/desinsectacion', function () {
    return view('servicios.desinsectacion');
});
Route::get('/servicios/otras-plagas', function () {
    return view('servicios.otras-plagas');
});
Route::get('/servicios/ornamentacion', function () {
    return view('servicios.ornamentacion');
});
