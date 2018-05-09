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
//    return view('welcome');
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routing USER -------------------------

Route::get('/user', 'User\ProfileController@index');

Route::get('/user/{id}/about', 'User\ProfileController@about')->name('about');
Route::get('/user/{id}/activity', 'User\ProfileController@activity')->name('activity');
Route::get('/user/{id}/ratings', 'User\ProfileController@ratings')->name('ratings');
Route::get('/user/{id}/toRead', 'User\ProfileController@toRead')->name('toRead');
Route::get('/user/{id}/friends', 'User\ProfileController@friends')->name('friends');

Route::post('user/', 'User\ProfileController@store')->name('addFriend');

//Routing ADMIN -------------------------

Route::get('/admin', 'Admin\AdminController@index')->name('admin');