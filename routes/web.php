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

erro 500
Não existe o arquivo .env na pasta do projeto.
Logo, precisa mudar o nome do arquivo .env.example para .env

E então rodar os dois comandos abaixo

php artisan key:generate
php artisan config:cache

Fonte que ajudou a solucionar o problema
https://stackoverflow.com/questions/51806828/laravel-500-error-no-logs
https://stackoverflow.com/questions/44839648/no-application-encryption-key-has-been-specified


*/



Route::get('/livro/listar', 'Livro@listar');
Route::get('/livro/adicionar', 'Livro@adicionar');

Route::get('/autores/listar', 'Autor@listar');
Route::get('/autores/adicionar', 'Autor@adicionar');


Route::get('/', function () {
    return view('paginaprincipal');
});

Route::get('/home', 'Album@listar');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});
