<?php

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
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

//Admin User Auth
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');






Route::get('/', function () {
    $restaurants = Restaurant::paginate(6);
    // dd($restaurants);
    return view('welcome', compact('restaurants'));
});

Route::get('/about','Frontend\PageController@about')->name('about');
Route::get('/policy','Frontend\PageController@policy')->name('policy');
Route::get('/tc','Frontend\PageController@tc')->name('tc');
//User Auth
Auth::routes();

Route::middleware('auth')->namespace('Frontend')->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/order','PageController@order')->name('order');
    Route::get('/restaurant','PageController@restaurant')->name('restaurant');
    Route::get('menu/{restaurant_id}', 'PageController@menu')->name('menu');
    Route::get('menus', 'PageController@menus')->name('menus');


    // cart
    Route::get('cart','PageController@cart')->name('cart.list');
    Route::POST('add-to-cart','PageController@addToCart')->name('add.to.cart');

    
    
    // Pick Up 
    Route::GET('pickup', 'PageController@pickup')->name('pickup');
    Route::POST('pick-up-confirm','PageController@pickUpConfirm')->name('pickupconfirm');
    Route::GET('pick-up-detail','PageController@pickUpDetail')->name('pickupdetail');

    
    // delivery 
    Route::GET('delivery', 'PageController@delivery')->name('delivery');
    Route::POST('delivery-confirm','PageController@deliveryConfirm')->name('deliveryconfirm');
    Route::GET('delivery-detail','PageController@deliveryDetail')->name('deliverydetail');

    // Booking
    Route::get('/booking','PageController@booking')->name('booking');
    Route::get('booking/{restaurant_id}', 'PageController@bookingMenu')->name('booking.menu');
    // Booking Cart
    Route::POST('booking-add-to-cart','PageController@bookingAddToCart')->name('booking.add.to.cart');
    Route::GET('booking-confirm','PageController@bookingConfirm')->name('booking.confirm');
    Route::POST('booking-confirm','PageController@bookingStore')->name('booking.store');
    Route::GET('booking-detail','PageController@bookingDetail')->name('bookingdetail');



});
