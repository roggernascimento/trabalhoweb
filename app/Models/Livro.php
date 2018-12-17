<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Livro
 * 
 * @property int $id
 * @property string $titulo
 * @property int $id_autores
 * @property \Carbon\Carbon $datapub
 * @property string $resumo
 * @property int $id_genero
 * @property int $id_editora
 * @property bool $destaque
 * 
 * @property \App\Models\Autore $autore
 * @property \App\Models\Editora $editora
 * @property \App\Models\Genero $genero
 * @property \Illuminate\Database\Eloquent\Collection $inventarios
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 *
 * @package App\Models
 */
class Livro extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_autores' => 'int',
		'id_genero' => 'int',
		'id_editora' => 'int',
		'destaque' => 'bool'
	];

	protected $dates = [
		'datapub'
	];

	protected $fillable = [
		'titulo',
		'id_autores',
		'datapub',
		'resumo',
		'id_genero',
		'id_editora',
		'destaque'
	];

	public function autore()
	{
		return $this->belongsTo(\App\Models\Autore::class, 'id_autores');
	}

	public function editora()
	{
		return $this->belongsTo(\App\Models\Editora::class, 'id_editora');
	}

	public function genero()
	{
		return $this->belongsTo(\App\Models\Genero::class, 'id_genero');
	}

	public function inventarios()
	{
		return $this->hasMany(\App\Models\Inventario::class, 'id_livros');
	}

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'id_livro');
	}
}
