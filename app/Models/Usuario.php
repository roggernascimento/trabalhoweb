<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nome
 * @property string $email
 * 
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	protected $table = 'usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nome',
		'email'
	];

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'id_aluno');
	}
}
