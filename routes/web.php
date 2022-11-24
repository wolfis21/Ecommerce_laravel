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

/* seeccion de shop */

Route::get('/', function () {
    return view('shop/home');
});

Route::get('/single-product', function () {
    return view('shop/single-product');
});
Route::get('/contact', function () {
    return view('shop/contact');
});
Route::get('/category', function () {
    return view('shop/category');
});

/* fin de shop */

Route::get('/login', function () {
    return view('/dashboard/login');
});

/* seccion de dashboard */
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('users-profile', function () {
     return view('dashboard/users-profile');
});

/* fin de dashboard */