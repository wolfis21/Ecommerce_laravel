<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\zonaController;
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

/* seeccion de shop ------------------------------------------------*/

Route::get('/', function () {
    return view('shop/home');
});

/* Route::get('/single-product', function () {
    return view('shop/single-product');
}); */
Route::get('/contact', function () {
    return view('shop/contact');
});
/* Route::get('/category', function () {
    return view('shop/category');
}); */

/* Route::resource('category', ShopController::class); */
Route::resource('shop', ShopController::class);

/* fin de shop */

/* seccion de dashboard */
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

/* fin de dashboard ------------------------------------------------*/

 /* productos gestion */
Route::resource('product', ProductController::class);
//Auth::routes();

Auth::routes();

/* Route::resource('register', RegisterController::class); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* gestion de empresa */
Route::resource('empresa', EmpresaController::class);

/* gestion de zona */
Route::resource('zona', ZonaController::class);

/* gestion de empleado */
Route::resource('empleado', EmpleadoController::class);

/* gestion de venta */
Route::resource('venta', VentaController::class);
