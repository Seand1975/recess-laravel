<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerPointController;
use App\Http\Controllers\PerfomanceUpdateRequestController;
use App\Http\Controllers\ProductBookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

/*
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/item', function () {
    return view('item');
})->name('item');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
*/


// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
// 	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
// 	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
// });

// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/', [PageController::class, 'about']);

//customer points endpoint
Route::get('/customerpoint', [PostsController::class, 'index']);

//PerfomanceUpdateRequest endpoint
Route::get('/perfomanceUpdateRequest', [PostsController::class, 'index']);

//Productbooking endpoint
Route::get('/productbooking', [PostsController::class, 'index']);

//Products endpoint
Route::get('/product', [PostsController::class, 'index']);

//users endpoint
Route::get('/index', [UserController::class, 'index']);
