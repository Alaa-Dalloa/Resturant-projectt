<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', 'PagesController@about');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/meals/create', 'MealsController@create')->name('meals.create');

Route::get('/meals', 'MealsController@index')->name('meals.index');

Route::get('/meals/{id}', 'MealsController@destroy')->name('meals.destroy');

Route::get('/meals/{id}/edit', 'MealsController@edit')->name('meals.edit');

Route::post('/meals/{id}/update', 'MealsController@update')->name('meals.update');

Route::post('/meals/store', 'MealsController@store')->name('meals.store');



Route::get('/images/create', 'ImagesController@create')->name('images.create');

Route::get('/images', 'ImagesController@index')->name('images.index');

Route::get('/images/{id}', 'ImagesController@destroy')->name('images.destroy');

Route::get('/images/{id}/edit', 'ImagesController@edit')->name('images.edit');

Route::post('/images/{id}/update', 'ImagesController@update')->name('images.update');

Route::post('/images/store', 'ImagesController@store')->name('images.store');


Route::get('/', 'ViewController@index');