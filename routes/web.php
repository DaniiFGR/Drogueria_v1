<?php

use Illuminate\Support\Facades\Route;

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
//=======================================================Invitado
Route::get('/', function () {
    return view('invitado.home');
});

Route::get('/productos', function () {
    return view('invitado.productos');
});
//=======================================================admin
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/admin/productos', function () {
    return view('admin.productos');
});
Route::get('/admin/categorias', function () {
    return view('admin.categorias');
});
Route::get('/admin/marcas', function () {
    return view('admin.marcas');
});
Route::get('/admin/proveedores', function () {
    return view('admin.proveedores');
});
Route::get('/admin/compras', function () {
    return view('admin.compras');
});
Route::get('/admin/ventas', function () {
    return view('admin.ventas');
});
//=====================================================Cliente
Route::get('/cliente/home', function () {
    return view('invitado.home');
});

Route::get('/cliente/productos', function () {
    return view('invitado.productos');
});
Route::get('/cliente/compras', function () {
    return view('cliente.compras');
});