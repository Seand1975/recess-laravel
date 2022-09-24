<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/search', 'App\Http\Controllers\HomeController@index')->name('search');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dash')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	Route::get('products/{participant}/{item}', ['as' => 'product', 'uses' => 'App\Http\Controllers\PageController@prod']);
	Route::get('bookings/{uname}', ['as' => 'orders', 'uses' => 'App\Http\Controllers\PageController@order']);
});
Route::group(['middleware' => 'isAdmin'], function () {
	//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('/dashboard', 'App\Http\Controllers\HomeController@dash')->name('dashboard');
});

Route::post('ordering','App\Http\Controllers\ProductBookingController@book')->name('ordering');
Route::get('/allproducts', [PageController::class, 'productsPage'])->name('allproducts');
Route::get('points/{name}/{points}','App\Http\Controllers\ParticipantPointController@addPoint')->name('points');
Route::get('/hello', function(){
  return "hey";
});


