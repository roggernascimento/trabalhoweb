<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GeneroLivro
 * 
 * @property int $id_livros
 * @property int $id_generos
 * 
 * @property \App\Models\Genero $genero
 * @property \App\Models\Livro $livro
 *
 * @package App\Models
 */
class GeneroLivro extends Eloquent
{
	protected $table = 'genero_livro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_livros' => 'int',
		'id_generos' => 'int'
	];

	public function genero()
	{
		return $this->belongsTo(\App\Models\Genero::class, 'id_generos');
	}

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}
}
