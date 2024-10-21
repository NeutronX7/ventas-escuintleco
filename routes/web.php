<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*Route::get('/login', function () {
    return view('login');
});*/

Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.register');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/confirm', [CartController::class, 'confirm'])->name('cart.confirm');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/purchase/confirmation', [CartController::class, 'showConfirmation'])->name('purchase.confirmation');
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/puntos-de-venta', [LocationController::class, 'index'])->name('locations');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::resource('clients', ClientController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('products', ProductController::class);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});
