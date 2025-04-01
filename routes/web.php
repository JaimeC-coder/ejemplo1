<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {

    return view('welcome');
});


Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index1');
//  Route::resource('users', UserController::class);
 Route::resource('products', ProductController::class);
 Route::resource('categories', CategoryController::class);

/**
 * get
 * post
 * put
 * delete
 */
