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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','HomeController@redirect');

Auth::routes();

Route::get('/home/{vue_capture?}', 'HomeController@index')->name('home')->where('vue_capture', '^(?!storage|login|register).*$');
Route::post('/add-category','CategoryController@store');
Route::get('/getMyCat','CategoryController@index');
Route::get('/delete-CatById/{id}','CategoryController@destroy');
Route::get('/cat-edit/{id}','CategoryController@edit');
Route::post('/update/{id}','CategoryController@update');

//Author
Route::post('/add-author','AuthorController@store');
Route::get('/getMyAuthor','AuthorController@index');
Route::get('/author-delete/{id}','AuthorController@destroy');
Route::get('/author-edit/{id}','AuthorController@edit');
Route::post('/author-update/{id}','AuthorController@update');

//user
Route::post('/create-user','UserController@create');
Route::get('/getMyUser','UserController@index');
Route::get('/delete/{id}','UserController@destroy');
Route::get('/user-edit/{id}','UserController@edit');
Route::post('/update/{id}','UserController@update');

//Books
Route::get('/getMyBook','BookController@index');
Route::post('/store','BookController@store');
Route::get('/book-edit/{id}','BookController@edit');
Route::post('/update/{id}','BookController@update');
Route::get('/delete/{id}','BookController@destroy');

//borrrow
Route::get('/getMyborrow','BorrowController@index');
Route::post('/create','BorrowController@store');
Route::get('/getborrowInfo/{id}','BorrowController@edit');
Route::post('/update/{id}','BorrowController@update');
Route::post('/delete/{id}','BorrowController@destroy');




