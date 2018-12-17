<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Professor
 * 
 * @property int $id
 * @property string $nome
 * @property string $telefone/celular
 * @property string $email
 * @property string $senha
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reservas
 *
 * @package App\Models
 */
class Professor extends Eloquent
{
	protected $table = 'professor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nome',
		'telefone/celular',
		'email',
		'senha'
	];

	public function reservas()
	{
		return $this->hasMany(\App\Models\Reserva::class, 'id_professor');
	}
}
