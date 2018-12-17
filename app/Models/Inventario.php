<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Inventario
 * 
 * @property int $id
 * @property int $id_livros
 * @property \Carbon\Carbon $ultima_altualizacao
 * 
 * @property \App\Models\Livro $livro
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 *
 * @package App\Models
 */
class Inventario extends Eloquent
{
	protected $table = 'inventario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_livros' => 'int'
	];

	protected $dates = [
		'ultima_altualizacao'
	];

	protected $fillable = [
		'ultima_altualizacao'
	];

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'id_inventario');
	}
}
