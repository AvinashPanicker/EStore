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
Route::get('/contact','App\Http\Controllers\StoreController@contact');
Route::get('/elements','App\Http\Controllers\StoreController@elements');
Route::get('/checkout','App\Http\Controllers\StoreController@checkout');
Route::get('/single-blog','App\Http\Controllers\StoreController@single_blog');
Route::get('/confirmation','App\Http\Controllers\StoreController@confirmation');
Route::get('/product_detail','App\Http\Controllers\StoreController@product_detail');

Route::get('/cart','App\Http\Controllers\StoreController@cart')->middleware('user');
Route::delete('/cart/{id}/delete','App\Http\Controllers\StoreController@destroy');
Route::get('/login','App\Http\Controllers\StoreController@login');
Route::post('/login','App\Http\Controllers\StoreController@login_user');
Route::get('/register','App\Http\Controllers\StoreController@register');
Route::post('/register','App\Http\Controllers\StoreController@register_user');
Route::get('/logout','App\Http\Controllers\StoreController@logout');

Route::get('/category','App\Http\Controllers\CategoryController@index');
Route::get('/category/new','App\Http\Controllers\CategoryController@new');
Route::get('/category/{category}','App\Http\Controllers\CategoryController@show');

Route::get('/product_list','App\Http\Controllers\ProductController@index');
Route::get('/single-product/{product}','App\Http\Controllers\ProductController@show');
Route::post('/single-product/{product}','App\Http\Controllers\ProductController@store')->middleware('user');

Route::post('/single-product/{product}/newComment','App\Http\Controllers\CommentController@store')->middleware('user');

