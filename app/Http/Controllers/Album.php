<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Album extends Controller
    
{
    
    public function listar(){
            
    $usuario = [
        'nome' => 'Biblioteca',
        'sobrenome' => 'RJL'
    ];
    
    $usuarios = [
        ['nome' => 'Lucas'],
        ['nome' => 'Roger'],
        ['nome' => 'Jarom']     
    ];
    
    return view('welcome', ['usuario' => $usuario, 'lista_usuarios' => $usuarios]);
    }
    
}
    
