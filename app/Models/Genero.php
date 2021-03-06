<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 18:34:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Genero
 * 
 * @property int $id
 * @property string $descricao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $livros
 *
 * @package App\Models
 */
class Genero extends Eloquent
{
	protected $table = 'genero';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];

	public function livros()
	{
		return $this->hasMany(\App\Models\Livro::class, 'id_genero');
	}
}
