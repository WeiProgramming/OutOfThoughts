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

Route::resource('home','HomeController');

Route::get("/","MainController@getIndex")->name('welcome');

Route::get("/about","MainController@getAbout")->name('about');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/landingtwo', ['uses'=>'MainController@getLanding','as' => 'landingtwo']);

Route::get('/landingthree',['uses'=>'MainController@getLandingThree','as'=>'landingthree']);

Auth::routes();

