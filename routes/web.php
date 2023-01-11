<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Controller@home')->name('home');

//Operadoras
Route::get('/operadoras','OperadoraController@operadoras')->name('operadoras');

Route::get('/criar-operadoras','OperadoraController@create')->name('operadora.create');

Route::post('/store-operadoras','OperadoraController@store')->name('operadora.store');

Route::get('/editar-operadoras/{id}','OperadoraController@edit')->name('operadora.edit');

Route::post('/update-operadoras/{id}','OperadoraController@update')->name('operadora.update');

Route::delete('/delete-operadoras/{id}',  'OperadoraController@delete')->name('operadora.delete');

//Cartões
Route::get('/criar-cartoes/{id}','CartaoController@create')->name('cartoes.create');

Route::post('/store-cartoes','CartaoController@store')->name('cartoes.store');

Route::get('/editar-cartoes/{id}','CartaoController@edit')->name('cartoes.edit');

Route::post('/update-cartoes/{id}','CartaoController@update')->name('cartoes.update');

Route::delete('/delete-cartoes/{id}',  'CartaoController@delete')->name('cartoes.delete');

//Funcionários
Route::get('/funcionarios','FuncionarioController@funcionarios')->name('funcionarios');

Route::get('/criar-funcionarios','FuncionarioController@create')->name('funcionarios.create');

Route::post('/store-funcionarios','FuncionarioController@store')->name('funcionarios.store');

Route::get('/ficha-funcionarios/{id}','FuncionarioController@edit')->name('funcionarios.ficha');

Route::post('/update-funcionarios/{id}','FuncionarioController@update')->name('funcionarios.update');

Route::delete('/delete-funcionarios/{id}',  'FuncionarioController@delete')->name('funcionarios.delete');