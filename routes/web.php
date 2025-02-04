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

Route::get('/', 'PagesController@getHome');
Route::get('/products', 'PagesController@getProducts');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('contact/submit', 'MessagesController@submit');
Route::post('/messages', 'MessagesController@getMessages');