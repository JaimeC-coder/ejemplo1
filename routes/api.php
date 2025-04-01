<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


 Route::get('/users', 'App\Http\Controllers\UserController@index');
 Route::post('/users', 'App\Http\Controllers\UserController@store');
 Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');
 Route::put('/users/{id}', 'App\Http\Controllers\UserController@update');
 Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy');



Route::group(['prefix' => 'v1'], function () {
     Route::apiResource('users', UserController::class);
    // Route::apiResource('products', ProductController::class);
    // Route::apiResource('categories', CategoryController::class);

    Route::prefix('products')->group(function () {
        Route::get('', [ProductController::class, 'index']);
        Route::post('', 'App\Http\Controllers\ProductController@store');
        Route::patch('/{id}', 'App\Http\Controllers\ProductController@subtractPrice');
        Route::delete('/{id}', 'App\Http\Controllers\UserController@destroy');
    });
    Route::prefix('categories')->group(function () {
        Route::get('', [CategoryController::class, 'index']);
        Route::post('', 'App\Http\Controllers\ProductController@store');
        Route::patch('/{id}', 'App\Http\Controllers\ProductController@subtractPrice');
        Route::delete('/{id}', 'App\Http\Controllers\UserController@destroy');
    });

});
Route::group(['prefix' => 'v2'], function () {
    // Route::apiResource('users', UserController::class);
    // Route::apiResource('products', ProductController::class);
    // Route::apiResource('categories', CategoryController::class);

    Route::prefix('products')->group(function () {
        Route::get('', [ProductController::class, 'index']);
        Route::post('', 'App\Http\Controllers\ProductController@store');
        Route::patch('/{id}', 'App\Http\Controllers\ProductController@subtractPrice');
        Route::delete('/{id}', 'App\Http\Controllers\UserController@destroy');
    });
    Route::prefix('categories')->group(function () {
        Route::get('', [CategoryController::class, 'index']);
        Route::post('', 'App\Http\Controllers\ProductController@store');
        Route::patch('/{id}', 'App\Http\Controllers\ProductController@subtractPrice');
        Route::delete('/{id}', 'App\Http\Controllers\UserController@destroy');
    });

});



// Route::resource('users', UserController::class);
//  Route::resource('products', ProductController::class);
//  Route::resource('categories', CategoryController::class);

