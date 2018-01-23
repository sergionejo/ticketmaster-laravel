<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');

Route::auth();

Route::get('/profile', 'UserController@getProfile');

Route::get('/home', 'HomeController@index');

Route::get('/user/update', 'UserController@getUpdateForm');

Route::group(['prefix' => 'event'], function() {
	Route::any('/', 'EventController@getEvents');
	Route::get('{id}', 'EventController@getEvent');
    Route::post('create/new', 'EventController@createEvent');
    Route::get('create/new', 'EventController@createEventView');
    Route::get('delete/{id}', 'EventController@deleteEvent');
    Route::post('edit/{id}', 'EventController@editEvent');
    Route::get('edit/{id}', 'EventController@editEventView');
});

Route::group(['prefix' => 'category'], function() {
    Route::post('create', 'CategoryController@createCategory');
    Route::get('create', 'CategoryController@createCategoryView');
    Route::get('delete/{id}', 'CategoryController@deleteCategory');
    Route::post('edit/{id}', 'CategoryController@editCategory');
    Route::get('edit/{id}', 'CategoryController@editCategoryView');
});

Route::group(['prefix' => 'genre'], function() {
    Route::post('create', 'GenreController@createGenre');
    Route::get('create', 'GenreController@createGenreView');
    Route::get('delete/{id}', 'GenreController@deleteGenre');
    Route::post('edit/{id}', 'GenreController@editGenre');
    Route::get('edit/{id}', 'GenreController@editGenreView');
});

Route::group(['prefix' => 'ubication'], function() {
    Route::post('create', 'UbicationController@createUbication');
    Route::get('create', 'UbicationController@createUbicationView');
    Route::get('delete/{id}', 'UbicationController@deleteUbication');
    Route::post('edit/{id}', 'UbicationController@editUbication');
    Route::get('edit/{id}', 'UbicationController@editUbicationView');
});

Route::group(['prefix' => 'show'], function() {
    Route::post('create', 'ShowController@createShow');
    Route::get('create', 'ShowController@createShowView');
    Route::get('delete/{id}', 'ShowController@deleteShow');
    Route::post('edit/{id}', 'ShowController@editShow');
    Route::get('edit/{id}', 'ShowController@editShowView');
});

Route::get('/admin', 'HomeController@adminZone');

