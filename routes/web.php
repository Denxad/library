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

//Clients Controller
Route::get('/clients', 'ClientsController@index');
Route::get('/client/create', 'ClientsController@create');
Route::post('/client/create', 'ClientsController@create');
Route::get('/client/{id}', 'ClientsController@view');
Route::get('/client/update/{id}', 'ClientsController@update');
Route::post('/client/update/{id}', 'ClientsController@update');
Route::get('/client/delete/{id}', 'ClientsController@delete');

//Books Controller
Route::get('/books', 'BooksController@index');
Route::get('/book/create', 'BooksController@create');
Route::post('/book/create', 'BooksController@create');
Route::get('/book/{id}', 'BooksController@view');
Route::get('/book/update/{id}', 'BooksController@update');
Route::post('/book/update/{id}', 'BooksController@update');
Route::get('/book/delete/{id}', 'BooksController@delete');