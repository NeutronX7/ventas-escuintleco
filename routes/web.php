<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*Route::get('/login', function () {
    return view('login');
});*/

Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
