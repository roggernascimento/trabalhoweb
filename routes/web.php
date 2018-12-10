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

Route::get('/livro/listar', 'Livro@listar');
Route::get('/livro/adicionar', 'Livro@adicionar');

Route::get('/autor/listar', 'Autor@listar');
Route::get('/autor/adicionar', 'Autor@adicionar');





Route::get('/home', 'Album@listar');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});
