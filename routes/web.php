<?php

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
