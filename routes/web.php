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

Route::get('/register', function () {
	return view('register');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/anuncios', 'AnuncioController@lista');
Route::get('/anuncios/editar/{id}', 'AnuncioController@editar')->where('id', '[0-9]+');
Route::get('/anuncios/excluir{id}', 'AnuncioController@excluir');