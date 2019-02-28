<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
Route::group(['middleware' => 'jwt.auth'], function ($router) {
    Route::resource('posts', 'PostController');
    Route::resource('countries', 'Parameters\CountryController');
    Route::resoruce('clients', 'ClientController');
});