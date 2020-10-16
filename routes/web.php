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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'App\Http\Controllers\CategoryController@index');
        Route::post('/store', 'App\Http\Controllers\CategoryController@store');
        Route::put('/update', 'App\Http\Controllers\CategoryController@update');
        Route::delete('/delete', 'App\Http\Controllers\CategoryController@destroy');
    });
    Route::group(['prefix' => 'variation'], function () {
        Route::get('/', 'App\Http\Controllers\VariationController@index');
        Route::post('/store', 'App\Http\Controllers\VariationController@store');
        Route::get('/create', 'App\Http\Controllers\VariationController@create');
        Route::delete('/delete', 'App\Http\Controllers\VariationController@destroy');
    });
    Route::group(['prefix' => 'stock'], function () {
        Route::get('/create', 'App\Http\Controllers\StockController@create');
        Route::post('/store', 'App\Http\Controllers\StockController@store');
        Route::get('/', 'App\Http\Controllers\StockController@index');
        Route::get('/{stock_id}/edit', 'App\Http\Controllers\StockController@edit');
        Route::put('/{update_id}/update', 'App\Http\Controllers\StockController@update');
        Route::DELETE('/delete', 'App\Http\Controllers\StockController@destroy');
    });
});
