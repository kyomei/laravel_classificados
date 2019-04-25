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
Route::get('/anuncio/{id}', 'AnuncioController@mostra')->where('id', '[0-9]+');
Route::get('/anuncios/adicionar', 'AnuncioController@adicionar');
Route::post('/anuncios/adiciona', 'AnuncioController@adiciona');
Route::get('/anuncios/editar/{id}', 'AnuncioController@editar')->where('id', '[0-9]+');
Route::match(array('GET', 'POST'),'/anuncios/edita/{id}', 'AnuncioController@edita')->where('id', '[0-9]+');
Route::get('/anuncios/excluir/{id}', 'AnuncioController@excluir')->where('id', '[0-9]+');
Route::get('/anuncios/json', 'AnuncioController@listaJson');
Route::get('/anuncios/lista2', 'AnuncioController@lista2');