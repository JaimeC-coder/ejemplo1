<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {

    return view('welcome');
});

// Route::get('/users', 'App\Http\Controllers\UserController@index');
// Route::get('/users/create', 'App\Http\Controllers\UserController@create');
// Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');
// Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit');
// Route::post('/users', 'App\Http\Controllers\UserController@store');
// Route::put('/users/{id}', 'App\Http\Controllers\UserController@update');
// Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy');



 Route::resource('users', UserController::class);
 Route::resource('products', ProductController::class);
 Route::resource('categories', CategoryController::class);

/**
 * get
 * post
 * put
 * delete
 */
