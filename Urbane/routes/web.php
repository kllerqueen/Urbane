<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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
})->name('loginPage')->middleware('guest');

Route::get('/register', function () {
    return view('pages.register');
})->name('registerPage')->middleware('guest');


Route::get('/home', [HomeController::class, 'showHome'])->name('homePage')->middleware('customer');

Route::post('/login-user', [UserController::class, 'login'])->name('login');

Route::post('/register-user', [UserController::class, 'register'])->name('register');

Route::get('/logout-user', [UserController::class, 'logout'])->name('logoutPage');

Route::get('/item/detail/{id}', [DetailController::class, 'itemDetail'])->name('detailPage');

// Sementara buat forgot password page

Route::get('/register-security-form', function(){
    return view('pages.forgetPassword.registerSecurityQuestion');
});

Route::get('/fill-security-form', function(){
    return view('pages.forgetPassword.FillSecurityQuestion');
});

Route::get('/forget-password-form', function(){
    return view('pages.forgetPassword.forgetPasswordForm');
});

Route::get('/register-security-success',function(){
    return view('pages.forgetPassword.registerSecurityQuestionNotification');
});

Route::get('/change-password-success',function(){
    return view('pages.forgetPassword.changePasswordNotification');
});

Route::get('/change-password-form',function(){
    return view('pages.forgetPassword.changePasswordForm');
});

//user sementara
Route::get('/discover',function(){
    return view('pages.user.discover');
})->name('discover');
Route::get('/discover/all-items',function(){
    return view('pages.user.discoverMore');
})->name('all-items');
Route::get('/discover/new-arrival',function(){
    return view('pages.user.newArrival');
})->name('new-arrival');
Route::get('/profile',function(){
    return view('pages.profile.userProfile');
});
Route::get('/cart',function(){
    return view('pages.user.cart');
});

Route::get('/favourite',function(){
    return view('pages.user.favourite');
});

//admin

Route::prefix('/admin')->middleware('admin')->group(function(){

    Route::get('/dashboard/{category_name}', [AdminController::class, 'index'])->name('adminPage');

    Route::get('/add-item', function() {
        return view('pages.admin.adminAddProduct');
    })->name('addProductPage');

    Route::post('/add-item', [AdminController::class, 'addItem'])->name('addItem');

    Route::delete('/delete-item/{item:id}', [AdminController::class, 'deleteItem'])->name('deleteItem');

    Route::get('/admin-logout', [UserController::class, 'logout'])->name('logoutAdminPage');

    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profilePage');

    Route::get('/editproduct/{id}', [AdminController::class, 'updatePage'])->name('editProductPage');

    Route::put('/edit-item', [AdminController::class, 'editItem'])->name('editItem');

    // Sementara

    Route::get('/help', function() {
        return view('pages.admin.adminHelp');
    })->name('helpPage');

    Route::get('/info', function() {
        return view('pages.admin.adminInfo');
    })->name('infoPage');
});

