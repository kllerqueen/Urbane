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

Route::get('/forget-password', function(){
    return view('pages.forget');
})->name('forgetPassword');

Route::get('/home', [HomeController::class, 'showHome'])->name('homePage')->middleware('customer');

Route::post('/login-user', [UserController::class, 'login']);

Route::post('/register-user', [UserController::class, 'register']);

Route::get('/logout-user', [UserController::class, 'logout'])->name('logoutPage');

Route::get('/item/detail/{id}', [DetailController::class, 'itemDetail'])->name('detailPage');

Route::get('/discover',function(){
    return view('pages.discover');
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

    Route::get('/editproduct', function () {
        return view('pages.admin.adminEditProduct');
    });

    Route::get('/help', function() {
        return view('pages.admin.adminHelp');
    })->name('helpPage');
});

// Route::get('dashboard/{category_name}', [AdminController::class, 'index'])->name('adminPage');
// Route::get('/addproduct', function () {
//     return view('pages.admin.adminAddProduct');
// });
// Route::get('/info', function () {
//     return view('pages.admin.adminInfo');
// });
// Route::get('/help', function () {
//     return view('pages.admin.adminHelp');
// });
// Route::get('/adminprofile', function () {
//     return view('pages.admin.adminProfile');
// });
// Route::get('/notification', function () {
//     return view('pages.admin.notificationAdmin');
// });
// Route::get('/editproduct', function () {
//     return view('pages.admin.adminEditProduct');
// });
// Route::get('admin-logout', [UserController::class, 'logout'])->name('logoutAdminPage');
