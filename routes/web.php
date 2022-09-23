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
|*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/search', 'App\Http\Controllers\HomeController@index')->name('search');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dash')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	Route::get('products/{participant}/{item}', ['as' => 'product', 'uses' => 'App\Http\Controllers\PageController@prod']);
	Route::get('booking', ['as' => 'orders', 'uses' => 'App\Http\Controllers\PageController@order']);
});
Route::group(['middleware' => 'isAdmin'], function () {
	//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('/dashboard', 'App\Http\Controllers\HomeController@dash')->name('dashboard');
});



