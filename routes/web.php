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
use App\Posts;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'PagesController@getIndex');
Route::get('about-us', 'PagesController@getAbout');
Route::get('category', 'PagesController@getCategory');
Route::get('ceramictiles', 'PagesController@getCeramic');