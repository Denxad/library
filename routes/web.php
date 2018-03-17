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

//Login Controller
Route::get('/', 'Auth\LoginController@index');
Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

//Home Controller
Route::get('/home', 'HomeController@index');

//Members Controller
Route::get('/members', 'MembersController@index');
Route::get('/member/add', 'MembersController@add');
Route::post('/member/create', 'MembersController@create');
Route::get('/member/{id}', 'MembersController@view');
Route::get('/member/edit/{id}', 'MembersController@edit');
Route::post('/member/update/{id}', 'MembersController@update');
Route::get('/member/delete/{id}', 'MembersController@delete');
Route::post('/member/add/book', 'MembersController@addBook');
Route::post('/member/add/payment', 'MembersController@addPayment');

//Books Controller
Route::get('/books', 'BooksController@index');
Route::get('/book/add', 'BooksController@add');
Route::post('/book/create', 'BooksController@create');
Route::get('/book/{id}', 'BooksController@view');
Route::get('/book/edit/{id}', 'BooksController@edit');
Route::post('/book/update/{id}', 'BooksController@update');
Route::get('/book/delete/{id}', 'BooksController@delete');