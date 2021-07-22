<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['as' => 'api.', 'namespace' => 'Api'], function () {
    Route::get('/urls', 'UrlController@urls')->name('urls');
    Route::post('/login', 'UserController@login')->name('login');
    Route::post('/url-store', 'UrlController@store')->name('storeUrl');
});
