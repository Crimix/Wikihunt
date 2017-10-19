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
})->name('welcome');

Route::get('/howtoplay', function () {
    return view('howtoplay');
})->name('howtoplay');

Route::get('/gameSelection' function () {
    return view('gameSelection');
})->name('gameSelection');

Route::get('/startGame' function () {
    return view('startGame');
})->name('startGame');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
