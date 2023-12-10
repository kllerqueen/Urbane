<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CourierMiddleware;
use App\Http\Controllers\OrderController;
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

//login-register
Route::get('/', function () {
    return view('pages.login');
})->middleware('guest');;

Route::get('/login', function () {
    return view('pages.login');
})->name('loginPage')->middleware('guest');

Route::get('/register', function () {
    return view('pages.register');
})->name('registerPage')->middleware('guest');

Route::get('/home', [HomeController::class, 'showHome'])->name('homePage');

Route::post('/login-user', [UserController::class, 'login'])->name('login');

Route::post('/register-user', [UserController::class, 'register'])->name('register');

Route::get('/logout-user', [UserController::class, 'logout'])->name('logoutPage');

//show item
Route::get('/item/detail/{id}', [DetailController::class, 'itemDetail'])->name('detailPage');

Route::get('/product-detail/{id}',[DetailController::class, 'itemDetail'])->name('detailPage');

Route::get('/discover/{category_name}', [DiscoverController::class, 'discoverPage'])->name('discover');

//static-footer
Route::get('/faq',function(){
    return view('pages.other.faq');
});

Route::get('/our_partners',function(){
    return view('pages.other.ourPartners');
});
Route::get('/returns', function(){
    return view('pages.other.returns');
});

Route::get('/delivery', function(){
    return view('pages.other.delivery');
});

Route::get('/privacy_and_policy', function(){
    return view('pages.other.policy');
});

Route::get('/terms_and_conditions', function(){
    return view('pages.other.terms');
});

Route::get('/media', function(){
    return view('pages.other.media');
});

Route::get('/location', function(){
    return view('pages.other.location');
});

Route::get('/about_us', function(){
    return view('pages.other.about');
});

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

//customer
Route::middleware('customer')->group(function(){

    //cart
    Route::get('/cart', [CartController::class, 'cartItem'])->name('cart');

    Route::patch('/update-cart-qty/{item_id}/{color}/{size}', [CartController::class, 'updateQty'])->name('update.cart.qty');

    Route::post('/addTo-cart/{itemId}', [CartController::class, 'addToCart'])->name('cart.addToCart');

    Route::post('/addTo-cart2/{itemId}', [CartController::class, 'addToCart2'])->name('cart.addToCart2');

    Route::post('/cart-delete/{item_id}/{color}/{size}', [CartController::class, 'RemoveCart'])->name('cart.delete');

    //wishlist
    Route::get('/wishlist', [FavoriteController::class, 'wishlist'])->name('wishlist');

    Route::post('/add-wishlist/{id}', [FavoriteController::class, 'addToWishlist'])->name('addFav');

    Route::post('/toggle-wishlist/{id}', [FavoriteController::class, 'toggleWishlist'])->name('toggleFav');


    //order
    Route::get('/checkout', [CartController::class, 'CheckOutForm'])->name('checkout.form');

    Route::post('/add-order', [OrderController::class, 'addNewOrder'])->name('add.order');

    Route::post('/add-buynow-order/{id}/{size}/{color}', [OrderController::class, 'addNewBuyNowOrder'])->name('add.buynow.order');

    Route::post('/buynow/{id}', [CartController::class, 'CheckOutBuyNow'])->name('checkout.buynow.form');

    //profile
    Route::get('/profile', [UserController::class, 'ViewAllTransaction'])->name('user.profile');

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

    Route::get('/help', function() {
        return view('pages.admin.adminHelp');
    })->name('helpPage');

    Route::get('/info', function() {
        return view('pages.admin.adminInfo');
    })->name('infoPage');
    
});

//courier
Route::prefix('/courier')->middleware(CourierMiddleware::class)->group(function(){

    Route::get('/dashboard-courier', [CourierController::class, 'getAllOrder'])->name('courierPage');

    Route::post('/update-order/{order_id}', [CourierController::class, 'updateStatusOrder'])->name('update.status.order');

    Route::get('/courier-logout', [UserController::class, 'logout'])->name('logoutCourierPage');

});

