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
    return view('welcome');
});

Route::get('/vehicle', 'VehicleController@index');
Route::get('/vehicle/create', 'VehicleController@create');
Route::post('/vehicle', 'VehicleController@store');
Route::get('/vehicle/{id}', 'VehicleController@show');
Route::get('/vehicle/{id}/edit', 'VehicleController@edit');
Route::put('/vehicle/{id}', 'VehicleController@update');
Route::delete('/vehicle/{id}', 'VehicleController@destroy');

Route::get('/calendar', 'CalendarController@index');
Route::get('/calendar/create', 'CalendarController@create');
Route::post('/calendar', 'CalendarController@store');
Route::get('/calendar/{id}', 'CalendarController@show');
Route::get('/calendar/{id}/edit', 'CalendarController@edit');
Route::put('/calendar/{id}', 'CalendarController@update');
Route::delete('/calendar/{id}', 'CalendarController@destroy');

Route::resource('post', 'PostController');
Route::resource('newcalendar', 'NewcalendarController');

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get("/teacher" , function (){
	    return view("teacher/index");
    });
});

Route::get("/student" , function (){
	return view("student/index");
})->middleware('auth','role:admin');

Route::get('/table', function () {
    return view('table');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test-storage', function(){
    return view('test-storage');
});

Route::get('/example/create', 'ExampleController@create');
Route::post('/example', 'ExampleController@store');

Route::get('/example/pdf', 'ExampleController@pdf_index');

Route::resource('book', 'BookController');