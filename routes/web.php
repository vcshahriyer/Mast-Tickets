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

Route::get('/booking/{date}/{cid}/{bid}', [
    'as' => 'booking',
    'uses' => 'BookingController@view_seats'
]);

Route::post("/booked",'BookingController@store');

Route::post('/findBus', [
	'as' => 'FindBus',
	'uses' => 'BookingController@search'
]);
Route::get('/mytickets', [
	'as' => 'my-tickets',
	'uses' => 'BookingController@myTickets'
]);
Route::post('/FindMyTickets', [
	'as' => 'Find-tickets',
	'uses' => 'BookingController@findTickets'
]);
Route::group(array('prefix' => 'admin','middleware' =>'auth'), function () {
    Route::get("/dashboard",'DashboardController@home')->name('dashboard');
    Route::get('/insertbus','DashboardController@busInsertForm')->name("Insert-bus");
    Route::post('/insertbus','DashboardController@busInsert')->name("register-bus");
    Route::get('/updatebus/{BusID}','DashboardController@UpdateBusForm')->name("UpdateBus");
    Route::post('/updatebus/{BusID}','DashboardController@UpdateBus');
    Route::get('/deletebus/{BusID}','DashboardController@DeleteBus')->name("DeleteBus");
    Route::get('/viewBus','BusController@index')->name("view-bus");
//	Route::get('users', 'UsersController@index')->name("users");
});
