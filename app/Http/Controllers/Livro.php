<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Livro extends Controller
{
    public function listar(){
            
    $livro = [
        'nome' => 'Assim falou Zaratustra'
    ];
    
    $lista_livros = [
        ['nome' => 'Assim falou Zaratustra'],
        ['nome' => 'A gaia ciência'],
        ['nome' => 'Humano, demasiado humano']     
    ];
    
    return view('livro', ['livro' => $livro, 'lista_livros' => $lista_livros]);
    }
}
