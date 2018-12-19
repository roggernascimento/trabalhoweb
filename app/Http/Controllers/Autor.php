<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autore as autores;

class Autor extends Controller
{
    public function listar(){
         $lista_autores =
        autores::orderBy('nome')->paginate(10);
    
    return view('autor_listar', [
        'lista_autores' => $lista_autores
        ]);
    }
    
       
    public function adicionar(){
    
        return view('autor_adicionar');
  }
}


