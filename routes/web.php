<?php

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
    return view('Home');})->name("Home");

Auth::routes();
Route::get('logout', array(
	'as' => 'logout',
	'uses' => '\App\Http\Controllers\Auth\LoginController@logout'
));
Route::get('/booking', function () {
    return view('Booking.booking-form');})->name("Booking");

Route::post("/booked",'BookingController@booked');
Route::post('/findBus', [
	'as' => 'FindBus',
	'uses' => 'BookingController@show'
]);
