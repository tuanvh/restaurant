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
    return view('master');
});

Route::get('/admin', function() {
	return view('backend.pages.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@getContact');
Route::post('/contact', 'HomeController@postContact')->name('contact');