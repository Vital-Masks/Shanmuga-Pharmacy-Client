<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBrandController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminMedicineController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrescriptionOrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
})->middleware("guest");

Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
})->middleware("guest");

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'showProduct'])->name('show-product');
Route::get('/medicine/{id}', [MedicineController::class, 'showMedicine'])->name('show-medicine');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/medicine', [MedicineController::class, 'index'])->name('medicines');
Route::get('/search',  [ProductController::class, 'search'])->name('search'); 


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/customer-register', [AuthController::class, 'customerRegister'])->name('customer-register');
Route::post('login-custom', [AuthController::class, 'customLogin'])->name('login-custom');
Route::get('log-out', [AuthController::class, 'signOut'])->name('log-out');

Route::get('/contact', [HomeController::class, 'showContact'])->name('contactView');
Route::get('/terms-and-condition', [HomeController::class, 'terms'])->name('terms');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/medicine/1', function () {
    return view('medicine/singleMedicineView');
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


Route::resource('admin-products', AdminProductController::class);
Route::resource('medicines', AdminMedicineController::class);
Route::resource('categories', AdminCategoryController::class);
Route::resource('brands', AdminBrandController::class);



// Auth

Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
Route::get('show-prescription/{id}', [AdminAuthController::class, 'showPrescription'])->name('showprescription');
Route::get('show-order/{id}', [AdminAuthController::class, 'showOrder'])->name('show-order');
Route::post('delete-prescription/{id}', [AdminAuthController::class, 'deletePrescription'])->name('delete-prescription');
Route::get('admin-login', [AdminAuthController::class, 'index'])->name('admin-login');
Route::post('custom-login', [AdminAuthController::class, 'customLogin'])->name('login.custom');
Route::get('admin-registration', [AdminAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AdminAuthController::class, 'store'])->name('register.custom');
Route::get('signout', [AdminAuthController::class, 'signOut'])->name('signout');
