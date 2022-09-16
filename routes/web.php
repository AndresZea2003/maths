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

Route::view('/home', 'home')->name('home');
Route::view('/levels', 'levels')->name('levels');

Route::view('/normal/level-1', 'levels.normal.level1.home')->name('normal.level-1.home');
Route::view('/normal/level-1/a', 'levels.normal.level1.a')->name('normal.level-1.a');
