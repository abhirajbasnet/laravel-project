<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware('IPCheck');

Route::get('/about', function() {
    return view ('about');
})->middleware('IPCheck');;

Route::get('/news', function () {
    return view('news');
})->middleware('IPCheck');;

Route::get('/contact', function () {
    return view('contact');
})->middleware('IPCheck');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
