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

Route::get('/', function () {
    return view('landingView');
});

Route::get('/products', function () {
    return view('productsView');
});

Route::get('/product/1', function () {
    return view('singleProductView');
});

Route::get('/cart', function () {
    return view('cartView');
});

Route::get('/account', function () {
    return view('myAccountView');
});