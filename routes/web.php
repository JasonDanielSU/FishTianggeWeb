<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('/home', 'HomeController@index');
// Route::resource('stores','StoreController');
// Route::get('stores/ + store_id','StoreController@edit');
Route::resource('mobileusers','MobileuserController');
Route::get('mobileusers/ + mobileuser_id','MobileuserController@edit');
Route::resource('mobilesellers','MobilesellerController');
Route::get('mobilesellers/ + mobilseller_id','MobilesellerController@edit');
Route::resource('mobilecouriers','MobilecourierController');
Route::get('mobilecouriers/ + mobilecourier_id','MobilecourierController@edit');
Route::resource('applicationsellers','ApplicationsellerController');
Route::get('applicationsellers/ + applicationseller_id','ApplicationsellerController@edit');
Route::resource('applicationcouriers','ApplicationcourierController');
Route::get('applicationcouriers/ + applicationcourier_id','ApplicationcourierController@edit');
// Route::resource('couriers','CourierController');
// Route::get('couriers/ + courier_id','CourierController@edit');
// Route::resource('courierapplications','CourierApplicationController');
// Route::get('courierapplications/ + courierapplications_id','CourierApplicationController@edit');

