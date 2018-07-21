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

/*
 * REBUILDING STARTED ##################################################################################################
 *
 *
 */

/*
 * Routing BOOK -------------------------
 */
//Route::get('/books', 'Book\BookController@index')->name('books');
//Route::get('/books/{book}', 'Book\BookController@book')->name('book');

/*
 * Routing Author ******************************************************************************************************
 */

Route::get('/authors', 'Author\AuthorController@index')->name('authors');
Route::get('/authors/{author}', 'Author\AuthorController@show')->name('author');

/*
 * Routing Category ****************************************************************************************************
 */

Route::get('/categories', 'Category\CategoryController@index')->name('categories');
Route::get('/categories/{category}', 'Category\CategoryController@show')->name('category');

/*
 * Routing User ********************************************************************************************************
 */

Route::post('/user/{id}/upload', 'User\UploadPhotoController@store')->name('user.upload.photo');
Route::get('/user/{id}/settings', 'User\EditProfileController@index')->name('user.profile.settings');


/*
 * REBUILDING STOPED ###################################################################################################
 *
 *
 */


Route::get('/', 'HomeController@index');
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
Route::post('/user', 'User\AddFriendController@addFriend')->name('add-friend');
//Route::get('/user/{id}/edit', 'User\EditProfileController@index')->name('index-edit-profile');
Route::patch('/user/{id}/edit', 'User\EditProfileController@edit')->name('update-edit-profile');
Route::delete('/user/{id}', 'User\EditProfileController@delete')->name('delete-profile');
/*
 * Routing ADMIN -------------------------
 * Section Users
 */
//Route::get('/admin', 'Admin\AdminController@index')->name('admin');
//Route::get('/admin/user', 'Admin\UserController@index')->name('admin-user');
//Route::get('/admin/user/edit', 'Admin\UserController@editUser')->name('admin-user-edit');
//Route::post('/admin/user/delete', 'Admin\UserController@delete')->name('admin-user-delete');
//Route::post('/admin/user/update-roles', 'Admin\UserController@updateRoles')->name('admin-user-update-roles');
//Route::patch('/admin/user/update', 'Admin\UserController@updateUser')->name('admin-user-update');
//Route::get('/admin/user/list-of-users', 'Admin\UserController@listOfUsers')->name('admin-list-users');
//Route::get('/admin/user/list-of-admins', 'Admin\UserController@listOfAdmins')->name('admin-list-admins');
/*
 * Section Books
 */
//Route::get('/admin/book', 'Admin\BookController@index')->name('admin-book');
//Route::get('/admin/book/add', 'Admin\Book\AddBookController@index')->name('admin-book-add');
//Route::post('/admin/book/add', 'Admin\Book\AddBookController@store')->name('admin-book-store');
//Route::get('/admin/book/edit', 'Admin\Book\AddBookController@edit')->name('admin-book-edit');
//Route::put('/admin/book/update', 'Admin\Book\AddBookController@update')->name('admin-book-update');
//Route::get('/admin/book/category/add', 'Admin\Book\CategoryController@index')->name('admin-category');
//Route::post('/admin/book/category/add', 'Admin\Book\CategoryController@add')->name('admin-category-add');
//Route::get('/admin/book/category/edit', 'Admin\Book\CategoryController@edit')->name('admin-category-edit');
//Route::patch('/admin/book/category/edit', 'Admin\Book\CategoryController@update')->name('admin-category-update');
//Route::get('/admin/book/author/add', 'Admin\Book\AuthorController@index')->name('admin-author');
//Route::post('/admin/book/author/add', 'Admin\Book\AuthorController@add')->name('admin-author-add');
//Route::get('/admin/book/author/edit', 'Admin\Book\AuthorController@edit')->name('admin-author-edit');
//Route::put('/admin/book/author/edit', 'Admin\Book\AuthorController@update')->name('admin-author-update');
/*
 * Routing BOOK -------------------------
 */
Route::get('/books', 'Book\BookController@index')->name('books');
Route::get('/books/{id}', 'Book\BookController@book')->name('book');
Route::post('/search', 'Book\SearchController@search')->name('search');
Route::post('/addFav', 'Book\BookController@changeFavorite')->name('addBookToFavorite');
Route::post('/setRating', 'Book\BookController@setRating')->name('setBookRating');
Route::post('/setReview', 'Book\BookController@setReview')->name('setBookReview');
/*
 * Routing author
 */
//Route::get('/author', 'Author\AuthorController@index')->name('author');
//Route::get('/author/{id}', 'Author\AuthorController@author')->name('author-id');
/*
 * Routing Category
 */
//Route::get('/category', 'Category\CategoryController@index')->name('category');
//Route::get('/category/{id}', 'Category\CategoryController@category')->name('category-id');