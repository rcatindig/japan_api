<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'UserController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('cities', 'CitiesController');
    Route::resource('tourist_spots', 'TouristSpotController');
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');