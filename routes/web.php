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

Auth::routes();

Route::get('/home', 'GameController@gameSelection')->name('home');

Route::get('/startGame/{id}', 'GameController@startGame')->name('startGame');

Route::get('/gameSelection', 'GameController@gameSelection')->name('gameSelection');

Auth::routes();
