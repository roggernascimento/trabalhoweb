<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Autore
 * 
 * @property int $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $nacionalidade
 * @property \Carbon\Carbon $data_nasc
 * 
 * @property \Illuminate\Database\Eloquent\Collection $livros
 *
 * @package App\Models
 */
class Autore extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'data_nasc'
	];

	protected $fillable = [
		'nome',
		'sobrenome',
		'nacionalidade',
		'data_nasc'
	];

	public function livros()
	{
		return $this->hasMany(\App\Models\Livro::class, 'id_autores');
	}
}
