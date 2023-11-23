<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('pages.login');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('loginPage');

Route::get('/register', function () {
    return view('pages.register');
})->name('registerPage');

Route::get('/forget-password', function(){
    return view('pages.forget');
})->name('forgetPassword');

Route::get('/home', [UserController::class, 'index'])->name('homePage');



Route::post('/login-user', [UserController::class, 'login']);

Route::post('/register-user', [UserController::class, 'register']);

Route::get('/logout-user', [UserController::class, 'logout'])->name('logoutPage');
