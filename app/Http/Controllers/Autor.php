<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autor extends Controller
{
    public function listar(){
            $autor = [
        'nome' => 'Stephen king'
    ];
    
    $lista_autores = [
        ['nome' => 'Clarice Lispector'],
        ['nome' => 'Patativa do Assaré'],
        ['nome' => 'Friedrich Nietzsche'],
        ['nome' => ' Jean-Paul Sartre']
    ];
    
    return view('autor', ['autor' => $autor, 'lista_autores' => $lista_autores]);
    }
    
    
}
