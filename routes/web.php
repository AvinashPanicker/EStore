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

Route::get('/','App\Http\Controllers\StoreController@index');
Route::get('/blog','App\Http\Controllers\StoreController@blog');
Route::get('/about','App\Http\Controllers\StoreController@about');
Route::get('/cart','App\Http\Controllers\StoreController@cart')->middleware('user');
Route::get('/Catagori','App\Http\Controllers\StoreController@Catagori');
Route::get('/checkout','App\Http\Controllers\StoreController@checkout');
Route::get('/contact','App\Http\Controllers\StoreController@contact');
Route::get('/elements','App\Http\Controllers\StoreController@elements');
Route::get('/login','App\Http\Controllers\StoreController@login');
Route::post('/login','App\Http\Controllers\StoreController@checklog');
Route::get('/product_list','App\Http\Controllers\ProductController@index');
Route::get('/single-blog','App\Http\Controllers\StoreController@single_blog');
Route::get('/single-product','App\Http\Controllers\StoreController@single_product');
Route::get('/register','App\Http\Controllers\StoreController@reg');
Route::post('/register','App\Http\Controllers\StoreController@checkreg');
Route::get('/logout','App\Http\Controllers\StoreController@logout');