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
Route::view('/normal/level-1/b', 'levels.normal.level1.b')->name('normal.level-1.b');
Route::view('/normal/level-1/c', 'levels.normal.level1.c')->name('normal.level-1.c');
Route::view('/normal/level-1/d', 'levels.normal.level1.d')->name('normal.level-1.d');

Route::view('/normal/level-2', 'levels.normal.level2.home')->name('normal.level-2.home');
Route::view('/normal/level-2/a', 'levels.normal.level2.a')->name('normal.level-2.a');
Route::view('/normal/level-2/b', 'levels.normal.level2.b')->name('normal.level-2.b');
Route::view('/normal/level-2/c', 'levels.normal.level2.c')->name('normal.level-2.c');
Route::view('/normal/level-2/d', 'levels.normal.level2.d')->name('normal.level-2.d');
Route::view('/normal/level-2/e', 'levels.normal.level2.e')->name('normal.level-2.e');
Route::view('/normal/level-2/f', 'levels.normal.level2.f')->name('normal.level-2.f');
Route::view('/normal/level-2/g', 'levels.normal.level2.g')->name('normal.level-2.g');
Route::view('/normal/level-2/h', 'levels.normal.level2.h')->name('normal.level-2.h');
Route::view('/normal/level-2/i', 'levels.normal.level2.i')->name('normal.level-2.i');
Route::view('/normal/level-2/j', 'levels.normal.level2.j')->name('normal.level-2.j');
Route::view('/normal/level-2/k', 'levels.normal.level2.k')->name('normal.level-2.k');
Route::view('/normal/level-2/l', 'levels.normal.level2.l')->name('normal.level-2.l');

Route::view('/normal/level-3', 'levels.normal.level3.home')->name('normal.level-3.home');
Route::view('/normal/level-3/a', 'levels.normal.level3.a')->name('normal.level-3.a');
Route::view('/normal/level-3/b', 'levels.normal.level3.b')->name('normal.level-3.b');
Route::view('/normal/level-3/c', 'levels.normal.level3.c')->name('normal.level-3.c');
Route::view('/normal/level-3/d', 'levels.normal.level3.d')->name('normal.level-3.d');
Route::view('/normal/level-3/e', 'levels.normal.level3.e')->name('normal.level-3.e');
Route::view('/normal/level-3/f', 'levels.normal.level3.f')->name('normal.level-3.f');
Route::view('/normal/level-3/g', 'levels.normal.level3.g')->name('normal.level-3.g');

Route::view('/normal/level-4', 'levels.normal.level4.home')->name('normal.level-4.home');
Route::view('/normal/level-4/a', 'levels.normal.level4.a')->name('normal.level-4.a');
Route::view('/normal/level-4/b', 'levels.normal.level4.b')->name('normal.level-4.b');
Route::view('/normal/level-4/c', 'levels.normal.level4.c')->name('normal.level-4.c');
Route::view('/normal/level-4/d', 'levels.normal.level4.d')->name('normal.level-4.d');
Route::view('/normal/level-4/e', 'levels.normal.level4.e')->name('normal.level-4.e');
Route::view('/normal/level-4/f', 'levels.normal.level4.f')->name('normal.level-4.f');
Route::view('/normal/level-4/g', 'levels.normal.level4.g')->name('normal.level-4.g');
Route::view('/normal/level-4/h', 'levels.normal.level4.h')->name('normal.level-4.h');
Route::view('/normal/level-4/i', 'levels.normal.level4.i')->name('normal.level-4.i');
Route::view('/normal/level-4/j', 'levels.normal.level4.j')->name('normal.level-4.j');


Route::view('/normal/level-5', 'levels.normal.level5.home')->name('normal.level-5.home');
Route::view('/normal/level-5/a', 'levels.normal.level5.a')->name('normal.level-5.a');
Route::view('/normal/level-5/b', 'levels.normal.level5.b')->name('normal.level-5.b');
Route::view('/normal/level-5/c', 'levels.normal.level5.c')->name('normal.level-5.c');
Route::view('/normal/level-5/d', 'levels.normal.level5.d')->name('normal.level-5.d');
Route::view('/normal/level-5/e', 'levels.normal.level5.e')->name('normal.level-5.e');
Route::view('/normal/level-5/f', 'levels.normal.level5.f')->name('normal.level-5.f');
