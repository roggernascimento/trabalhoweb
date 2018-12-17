<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Exemplar
 * 
 * @property int $id
 * @property int $id_livros
 * @property string $exemplar
 * 
 * @property \App\Models\Livro $livro
 * @property \Illuminate\Database\Eloquent\Collection $reservas
 *
 * @package App\Models
 */
class Exemplar extends Eloquent
{
	protected $table = 'exemplar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_livros' => 'int'
	];

	protected $fillable = [
		'id_livros',
		'exemplar'
	];

	public function livro()
	{
		return $this->belongsTo(\App\Models\Livro::class, 'id_livros');
	}

	public function reservas()
	{
		return $this->hasMany(\App\Models\Reserva::class, 'id_exempar');
	}
}
