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
/*Front pages*/
Route::get('front', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('service', 'PagesController@service');
Route::get('blog', 'PagesController@blog');
Route::get('contact', 'PagesController@contact');
Route::get('userhome', 'PagesController@userhome');
Route::post('bookfirst', 'PagesController@bookfirst')->name('bookfirst');
Route::get('booksecond', 'PagesController@booksecond')->name('booksecond');
Route::get('bookthird', 'PagesController@bookthird')->name('bookthird');
Route::post('passenger', 'BookingController@passenger')->name('passenger.passenger');
Route::get('passengers', 'PassengerController@showpassenger')->name('passengers.index');
Route::post('/logoutuser', 'PassengerController@logout')->name('logoutuser.logout');
/*Front Pages*/
Route::get('registeruser', 'PassengerController@showreagister')->name('register');
Route::post('registeruser{passenger}', 'PassengerController@register')->name('registeruser.register');
Route::get('loginuser', 'PassengerController@showlogin');
Route::post('loginuser', 'PassengerController@login')->name('loginuser.login');

/*End Passenger 
 /*Backend Work*/
Route::group(['middleware' => 'auth',], function () {
    Route::get('bookings', 'bookingController@index')->name('bookings.index');
    Route::get('bookings/create/{schedule?}', 'BookingController@create')->name('bookings.create');
    Route::post('/bookings/{schedule?}', 'BookingController@store')->name('bookings.store');
    Route::get('booking/{booking}/show/{schedule?}', 'BookingController@show')->name('bookings.show');
    Route::get('bookings/{booking}/edit/{schedule?}', 'BookingController@edit')->name('bookings.edit');
    Route::put('bookings/{booking}/{schedule?}', 'BookingController@update')->name('bookings.update');
    Route::delete('/bookings{booking}/{schedule?}', 'BookingController@destroy')->name('bookings.destroy');
    Route::resource('buses', 'BusController');
    Route::get('/schedules', 'ScheduleController@index')->name('schedules.index');
    Route::get('schedules/create/{bus?}', 'ScheduleController@create')->name('schedules.create');
    Route::post('/schedules/{bus?}', 'ScheduleController@store')->name('schedules.store');
    Route::get('schedules/{schedule}/show/{bus?}', 'ScheduleController@show')->name('schedules.show');
    Route::get('schedules/{schedule}/edit/{bus?}', 'ScheduleController@edit')->name('schedules.edit');
    Route::put('schedules/{schedule}/{bus?}', 'ScheduleController@update')->name('schedules.update');
    Route::delete('/schedules/{schedule}/{bus?}', 'ScheduleController@destroy')->name('schedules.destroy');

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
});
Auth::routes();
