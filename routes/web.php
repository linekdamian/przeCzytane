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
    return view('home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*
 * Routing USER -------------------------
 */
Route::get('/users', 'User\ProfileController@index')->name('users');
/*
 * user profile actions
 */
Route::get('/user/{id}/about', 'User\ProfileController@about')->name('about');
Route::get('/user/{id}/activity', 'User\ProfileController@activity')->name('activity');
Route::get('/user/{id}/ratings', 'User\ProfileController@ratings')->name('ratings');
Route::get('/user/{id}/toRead', 'User\ProfileController@toRead')->name('to-read');
Route::get('/user/{id}/friends', 'User\ProfileController@friends')->name('friends');
Route::post('/user', 'User\ProfileController@store')->name('add-friend');
/*
 * Routing ADMIN -------------------------
 * Section Users
 */
Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/admin/user', 'Admin\UsersController@index')->name('admin-user');
Route::get('/admin/user/edit', 'Admin\UsersController@editUser')->name('admin-user-edit');
Route::post('/admin/user/delete', 'Admin\UsersController@delete')->name('admin-user-delete');
Route::post('/admin/user/update-roles', 'Admin\UsersController@updateRoles')->name('admin-user-update-roles');
Route::patch('/admin/user/update', 'Admin\UsersController@updateUser')->name('admin-user-update');
Route::get('/admin/user/list-of-users', 'Admin\UsersController@listOfUsers')->name('admin-list-users');
Route::get('/admin/user/list-of-admins', 'Admin\UsersController@listOfAdmins')->name('admin-list-admins');
/*
 * Section Books
 */
Route::get('/admin/books', 'Admin\BooksController@index')->name('books');
/*
 * Routing BOOK -------------------------
 */
Route::get('/book', 'Book\BookController@index')->name('books');
Route::get('/book/{id}', 'Book\BookController@book')->name('book');
Route::post('/search', 'Book\SearchController@search')->name('search');