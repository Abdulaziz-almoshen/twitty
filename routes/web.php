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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware' => ['auth']], function () {
    Route::get('/tweets', 'TweetController@index')->name('home')->middleware('auth');
    Route::post('/tweets', 'TweetController@store');
    Route::get('/profile/{user}' , 'ProfileController@show')->name('profile');
    Route::get('/profile/{user}/edit' , 'ProfileController@edit')
        ->name('edit-profile')->middleware('can:edit,user');

    Route::post('/profile/{user:name}/update' , 'ProfileController@update')->name('update-profile');
    Route::post('/profile/follow/{user:name}' , 'ProfileController@store')->name('follow');
});
