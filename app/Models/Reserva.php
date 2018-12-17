<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Reserva
 * 
 * @property int $id
 * @property int $id_aluno
 * @property int $id_livros
 * @property int $id_exempar
 * @property int $id_professor
 * @property \Carbon\Carbon $data_reserva
 * @property \Carbon\Carbon $data_entrega
 * @property \Carbon\Carbon $data
 * 
 * @property \App\Models\Aluno $aluno
 * @property \App\Models\Exemplar $exemplar
 * @property \App\Models\Livro $livro
 * @property \App\Models\Professor $professor
 *
 * @package App\Models
 */
class Reserva extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_aluno' => 'int',
		'id_livros' => 'int',
		'id_exempar' => 'int',
		'id_professor' => 'int'
	];

	protected $dates = [
		'data_reserva',
		'data_entrega',
		'data'
	];

	protected $fillable = [
		'id_professor',
		'data_reserva',
		'data_entrega',
		'data'
	];

	public function aluno()
	{
		return $this->belongsTo(\App\Models\Aluno::class, 'id_aluno');
	}

	public function exemplar()
	{
		return $this->belongsTo(\App\Models\Exemplar::class, 'id_exempar');
	}

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}

	public function professor()
	{
		return $this->belongsTo(\App\Models\Professor::class, 'id_professor');
	}
}
