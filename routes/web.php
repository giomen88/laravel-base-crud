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
Route::resource('comics', 'ComicController');

Route::get('comics', 'ComicController@index')->name('comics.index');

Route::get('comics.show', 'ComicController@show')->name('comics.show');

Route::get('comics.edit', 'ComicController@edit')->name('comics.edit');
