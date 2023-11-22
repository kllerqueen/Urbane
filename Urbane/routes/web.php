<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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
});

Route::get('/home', function () {
    return view('pages.home',[
        "user" => null
    ]);
});


// sementara ges ga ngerti soalnya bkin make localstorage
Route::get('/home/{user:id}', function (User $user) {
    return view('pages.home',[
        "user" => $user
    ]);
});

Route::post('/login-user', [UserController::class, 'login']);

Route::post('/register-user', [UserController::class, 'register']);