<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LivrosAutore
 * 
 * @property int $id_livros
 * @property int $id_autores
 * 
 * @property \App\Models\Autore $autore
 * @property \App\Models\Livro $livro
 *
 * @package App\Models
 */
class LivrosAutore extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_livros' => 'int',
		'id_autores' => 'int'
	];

	public function autore()
	{
		return $this->belongsTo(\App\Models\Autore::class, 'id_autores');
	}

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}
}
