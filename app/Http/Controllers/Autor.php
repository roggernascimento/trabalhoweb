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
    
<<<<<<< HEAD
        return view('autor_adicionar');
  }
=======
       
    public function adicionar(){
>>>>>>> 4e95d8d920ee90c23ae948ad9e765df61fe647ef
    
        return view('autor_adicionar');
  }
}

