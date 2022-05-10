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
    $restaurants = Restaurant::get();
    // dd($restaurants);
    return view('welcome', compact('restaurants'));
});

Route::get('/about','Frontend\PageController@about')->name('about');
//User Auth
Auth::routes();

Route::middleware('auth')->namespace('Frontend')->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    user booking and registration
    Route::get('/booking','PageController@booking')->name('booking');
    Route::get('/order','PageController@order')->name('order');

    Route::get('menu/{restaurant_id}', 'PageController@menu')->name('menu');
});
