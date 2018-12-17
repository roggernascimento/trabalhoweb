<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Movimentacao
 * 
 * @property int $id
 * @property int $id_livro
 * @property int $id_aluno
 * @property int $id_inventario
 * @property int $id_funcionario
 * @property \Carbon\Carbon $datareserva
 * @property \Carbon\Carbon $dataentrega
 * @property float $multa
 * 
 * @property \App\Models\Funcionario $funcionario
 * @property \App\Models\Inventario $inventario
 * @property \App\Models\Livro $livro
 * @property \App\Models\Usuario $usuario
 *
 * @package App\Models
 */
class Movimentacao extends Eloquent
{
	protected $table = 'movimentacao';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_livro' => 'int',
		'id_aluno' => 'int',
		'id_inventario' => 'int',
		'id_funcionario' => 'int',
		'multa' => 'float'
	];

	protected $dates = [
		'datareserva',
		'dataentrega'
	];

	protected $fillable = [
		'id_funcionario',
		'datareserva',
		'dataentrega',
		'multa'
	];

	public function funcionario()
	{
		return $this->belongsTo(\App\Models\Funcionario::class, 'id_funcionario');
	}

	public function inventario()
	{
		return $this->belongsTo(\App\Models\Inventario::class, 'id_inventario');
	}

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livro');
	}

	public function usuario()
	{
		return $this->belongsTo(\App\Models\Usuario::class, 'id_aluno');
	}
}
