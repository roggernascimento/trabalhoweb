<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro as LivroModel;

class Livro extends Controller
{
    public function listar(){
            
    $lista_livros =
        LivroModel::orderBy('titulo', 'edição')->paginate(10);
    
    return view('livro_listar', [
        'lista_livros' => $lista_livros
        ]);
    }
       
    public function adicionar(){
    
        return view('livro_adicionar');
  }
}



