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

Route::view('/', 'welcome')->name('welcome');

Route::view('/home', 'home')->name('home');
Route::view('/levels', 'levels')->name('levels');
Route::view('/select-activity', 'select-activity')->name('select-activity');

Route::view('/normal/level-1/test1', 'levels.normal.level1.test')->name('normal.test1');

Route::view('/normal/level-1', 'levels.normal.level1.home')->name('normal.level-1.home');
Route::view('/normal/level-1/tutorial', 'levels.normal.level1.tutorial')->name('normal.level-1.tutorial');
Route::view('/normal/level-1/a', 'levels.normal.level1.a')->name('normal.level-1.a');
Route::view('/normal/level-1/b', 'levels.normal.level1.b')->name('normal.level-1.b');
Route::view('/normal/level-1/c', 'levels.normal.level1.c')->name('normal.level-1.c');
Route::view('/normal/level-1/d', 'levels.normal.level1.d')->name('normal.level-1.d');
Route::view('/normal/level-1/e', 'levels.normal.level1.e')->name('normal.level-1.e');
Route::view('/normal/level-1/f', 'levels.normal.level1.f')->name('normal.level-1.f');
Route::view('/normal/level-1/g', 'levels.normal.level1.g')->name('normal.level-1.g');

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

Route::view('/normal/level-6', 'levels.normal.level6.home')->name('normal.level-6.home');
Route::view('/normal/level-6/a', 'levels.normal.level6.a')->name('normal.level-6.a');
Route::view('/normal/level-6/b', 'levels.normal.level6.b')->name('normal.level-6.b');
Route::view('/normal/level-6/c', 'levels.normal.level6.c')->name('normal.level-6.c');

Route::view('/normal/level-7', 'levels.normal.level7.home')->name('normal.level-7.home');
Route::view('/normal/level-7/a', 'levels.normal.level7.a')->name('normal.level-7.a');
Route::view('/normal/level-7/b', 'levels.normal.level7.b')->name('normal.level-7.b');
Route::view('/normal/level-7/c', 'levels.normal.level7.c')->name('normal.level-7.c');
Route::view('/normal/level-7/d', 'levels.normal.level7.d')->name('normal.level-7.d');
Route::view('/normal/level-7/e', 'levels.normal.level7.e')->name('normal.level-7.e');
Route::view('/normal/level-7/f', 'levels.normal.level7.f')->name('normal.level-7.f');

Route::view('/normal/level-8', 'levels.normal.level8.home')->name('normal.level-8.home');
Route::view('/normal/level-8/a', 'levels.normal.level8.a')->name('normal.level-8.a');
Route::view('/normal/level-8/b', 'levels.normal.level8.b')->name('normal.level-8.b');
Route::view('/normal/level-8/c', 'levels.normal.level8.c')->name('normal.level-8.c');
Route::view('/normal/level-8/d', 'levels.normal.level8.d')->name('normal.level-8.d');
Route::view('/normal/level-8/e', 'levels.normal.level8.e')->name('normal.level-8.e');
Route::view('/normal/level-8/f', 'levels.normal.level8.f')->name('normal.level-8.f');

Route::view('/normal/level-9', 'levels.normal.level9.home')->name('normal.level-9.home');
Route::view('/normal/level-9/a', 'levels.normal.level9.a')->name('normal.level-9.a');
Route::view('/normal/level-9/b', 'levels.normal.level9.b')->name('normal.level-9.b');
Route::view('/normal/level-9/c', 'levels.normal.level9.c')->name('normal.level-9.c');
Route::view('/normal/level-9/d', 'levels.normal.level9.d')->name('normal.level-9.d');
Route::view('/normal/level-9/e', 'levels.normal.level9.e')->name('normal.level-9.e');
Route::view('/normal/level-9/f', 'levels.normal.level9.f')->name('normal.level-9.f');
Route::view('/normal/level-9/g', 'levels.normal.level9.g')->name('normal.level-9.g');

Route::view('/normal/level-10', 'levels.normal.level10.home')->name('normal.level-10.home');
Route::view('/normal/level-10/a', 'levels.normal.level10.a')->name('normal.level-10.a');
Route::view('/normal/level-10/b', 'levels.normal.level10.b')->name('normal.level-10.b');
Route::view('/normal/level-10/c', 'levels.normal.level10.c')->name('normal.level-10.c');
Route::view('/normal/level-10/d', 'levels.normal.level10.d')->name('normal.level-10.d');
Route::view('/normal/level-10/e', 'levels.normal.level10.e')->name('normal.level-10.e');

Route::view('/normal/level-11', 'levels.normal.level11.home')->name('normal.level-11.home');
Route::view('/normal/level-11/a', 'levels.normal.level11.a')->name('normal.level-11.a');
Route::view('/normal/level-11/b', 'levels.normal.level11.b')->name('normal.level-11.b');
Route::view('/normal/level-11/c', 'levels.normal.level11.c')->name('normal.level-11.c');
Route::view('/normal/level-11/d', 'levels.normal.level11.d')->name('normal.level-11.d');
Route::view('/normal/level-11/e', 'levels.normal.level11.e')->name('normal.level-11.e');
Route::view('/normal/level-11/f', 'levels.normal.level11.f')->name('normal.level-11.f');
Route::view('/normal/level-11/g', 'levels.normal.level11.g')->name('normal.level-11.g');

Route::view('/normal/level-12', 'levels.normal.level12.home')->name('normal.level-12.home');
Route::view('/normal/level-12/a', 'levels.normal.level12.a')->name('normal.level-12.a');
Route::view('/normal/level-12/b', 'levels.normal.level12.b')->name('normal.level-12.b');
Route::view('/normal/level-12/c', 'levels.normal.level12.c')->name('normal.level-12.c');
Route::view('/normal/level-12/d', 'levels.normal.level12.d')->name('normal.level-12.d');
Route::view('/normal/level-12/e', 'levels.normal.level12.e')->name('normal.level-12.e');

Route::view('/normal/level-13', 'levels.normal.level13.home')->name('normal.level-13.home');
Route::view('/normal/level-13/a', 'levels.normal.level13.a')->name('normal.level-13.a');
Route::view('/normal/level-13/b', 'levels.normal.level13.b')->name('normal.level-13.b');
Route::view('/normal/level-13/c', 'levels.normal.level13.c')->name('normal.level-13.c');

Route::view('/normal/level-14', 'levels.normal.level14.home')->name('normal.level-14.home');
Route::view('/normal/level-14/a', 'levels.normal.level14.a')->name('normal.level-14.a');
Route::view('/normal/level-14/b', 'levels.normal.level14.b')->name('normal.level-14.b');

Route::view('/normal/level-14', 'levels.normal.level14.home')->name('normal.level-14.home');
Route::view('/normal/level-14/a', 'levels.normal.level14.a')->name('normal.level-14.a');
Route::view('/normal/level-14/b', 'levels.normal.level14.b')->name('normal.level-14.b');
Route::view('/normal/level-14/c', 'levels.normal.level14.c')->name('normal.level-14.c');

Route::view('/normal/level-15', 'levels.normal.level15.home')->name('normal.level-15.home');
Route::view('/normal/level-15/a', 'levels.normal.level15.a')->name('normal.level-15.a');
Route::view('/normal/level-15/b', 'levels.normal.level15.b')->name('normal.level-15.b');
Route::view('/normal/level-15/c', 'levels.normal.level15.c')->name('normal.level-15.c');
Route::view('/normal/level-15/d', 'levels.normal.level15.d')->name('normal.level-15.d');
Route::view('/normal/level-15/e', 'levels.normal.level15.e')->name('normal.level-15.e');
Route::view('/normal/level-15/f', 'levels.normal.level15.f')->name('normal.level-15.f');

Route::view('/normal/level-16', 'levels.normal.level16.home')->name('normal.level-16.home');
Route::view('/normal/level-16/a', 'levels.normal.level16.a')->name('normal.level-16.a');
Route::view('/normal/level-16/b', 'levels.normal.level16.b')->name('normal.level-16.b');
Route::view('/normal/level-16/c', 'levels.normal.level16.c')->name('normal.level-16.c');
Route::view('/normal/level-16/d', 'levels.normal.level16.d')->name('normal.level-16.d');
Route::view('/normal/level-16/e', 'levels.normal.level16.e')->name('normal.level-16.e');
Route::view('/normal/level-16/f', 'levels.normal.level16.f')->name('normal.level-16.f');

Route::view('/normal/level-17', 'levels.normal.level17.home')->name('normal.level-17.home');
Route::view('/normal/level-17/a', 'levels.normal.level17.a')->name('normal.level-17.a');
Route::view('/normal/level-17/b', 'levels.normal.level17.b')->name('normal.level-17.b');
Route::view('/normal/level-17/c', 'levels.normal.level17.c')->name('normal.level-17.c');
Route::view('/normal/level-17/d', 'levels.normal.level17.d')->name('normal.level-17.d');
Route::view('/normal/level-17/e', 'levels.normal.level17.e')->name('normal.level-17.e');
Route::view('/normal/level-17/f', 'levels.normal.level17.f')->name('normal.level-17.f');

Route::view('/normal/level-18', 'levels.normal.level18.home')->name('normal.level-18.home');
Route::view('/normal/level-18/a', 'levels.normal.level18.a')->name('normal.level-18.a');
Route::view('/normal/level-18/b', 'levels.normal.level18.b')->name('normal.level-18.b');
Route::view('/normal/level-18/c', 'levels.normal.level18.c')->name('normal.level-18.c');
Route::view('/normal/level-18/d', 'levels.normal.level18.d')->name('normal.level-18.d');
Route::view('/normal/level-18/e', 'levels.normal.level18.e')->name('normal.level-18.e');
Route::view('/normal/level-18/f', 'levels.normal.level18.f')->name('normal.level-18.f');
Route::view('/normal/level-18/g', 'levels.normal.level18.g')->name('normal.level-18.g');
Route::view('/normal/level-18/h', 'levels.normal.level18.h')->name('normal.level-18.h');
Route::view('/normal/level-18/i', 'levels.normal.level18.i')->name('normal.level-18.i');
Route::view('/normal/level-18/j', 'levels.normal.level18.j')->name('normal.level-18.j');
