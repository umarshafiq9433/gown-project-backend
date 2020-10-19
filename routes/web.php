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
Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('/login/check', 'App\Http\Controllers\AuthController@check');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout','App\Http\Controllers\AuthController@logout');
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
        Route::group(['prefix' => 'consultant'], function () {
            Route::get('/', 'App\Http\Controllers\ConsultantController@index');
            Route::get('/create', 'App\Http\Controllers\ConsultantController@create');
            Route::post('/store', 'App\Http\Controllers\ConsultantController@store');
            Route::get('/{status_id}/status', 'App\Http\Controllers\ConsultantController@changeStatus');
            Route::get('/{status_id}/edit', 'App\Http\Controllers\ConsultantController@edit');
            Route::put('/{status_id}/update', 'App\Http\Controllers\ConsultantController@update');
            Route::delete('/delete', 'App\Http\Controllers\ConsultantController@destroy');
        });
        Route::group(['prefix'=>'setting'],function (){
           Route::get('/','App\Http\Controllers\SettingController@create');
           Route::put('/update','App\Http\Controllers\SettingController@update');
        });
    });
});
