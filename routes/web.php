<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrescriptionOrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/customer-register', [AuthController::class, 'customerRegister'])->name('customer-register');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');

Route::get('/product/1', function () {
    return view('singleProductView');
});

Route::get('/cart', function () {
    return view('cartView');
});

Route::get('/account', function () {
    return view('myAccountView');
});

Route::get("/cart", [CartController::class, 'index'])->name('cart');
Route::post("/cart", [CartController::class, 'store'])->name('cart.store');
Route::post("/cart", [CartController::class, 'addToCart'])->name('addToCart');
// Route::post("/cart", [CartController::class, 'remove'])->name('remove-cart');
Route::get("/cart/{id}", [CartController::class, 'remove'])->name('remove-cart');
Route::post("/checkout", [CheckoutController::class, 'order'])->name('make-order');
Route::get("/profile", [ProfileController::class, 'index'])->name('profile');
Route::post("/update-user", [ProfileController::class, 'update'])->name('update-user');
Route::post("/create-prescription", [PrescriptionOrdersController::class, 'store'])->name('create-prescription');
