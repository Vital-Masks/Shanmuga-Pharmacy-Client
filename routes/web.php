<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MedicineController;     
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'showProduct'])->name('show-product');
Route::get('/medicine/{id}', [MedicineController::class, 'showMedicine'])->name('show-medicine');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/medicine', [MedicineController::class, 'index'])->name('medicines');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/customer-register', [AuthController::class, 'customerRegister'])->name('customer-register');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 

Route::get('/product/1', function () {
    return view('singleProductView');
});

Route::get('/medicine/1', function () {
    return view('medicine/singleMedicineView');
});

Route::get('/cart', function () {
    return view('cartView');
});

Route::get('/account', function () {
    return view('myAccountView');
});