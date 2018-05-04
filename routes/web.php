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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routing USER -------------------------

Route::get('/user', 'User\ProfileController@index');

Route::get('/user/{id}', 'User\ProfileController@show');
Route::get('/user/{id}/about', 'User\ProfileController@about')->name('about');
//Route::get('/about', function (){
//    $users = DB::table('users')->get();
//
////    return $users;
//    return view('user.user', compact('users'));
//});

//Route::get('/about/{user}', function ($id){
//    $users = DB::table('users')->where('name', $id)->first();
//
//    if($users == null){
//        return('error that page doesnt exist');
//    }
//    else{
//        //    return $users;
//        return view('user.user')->with(compact('users'));
//    }
//
//});
