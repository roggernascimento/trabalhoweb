<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PrateleiraLivro
 * 
 * @property int $id_livros
 * @property int $id_prateleira
 * 
 * @property \App\Models\Livro $livro
 * @property \App\Models\Prateleira $prateleira
 *
 * @package App\Models
 */
class PrateleiraLivro extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_livros' => 'int',
		'id_prateleira' => 'int'
	];

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}

	public function prateleira()
	{
		return $this->belongsTo(\App\Models\Prateleira::class, 'id_prateleira');
	}
}
