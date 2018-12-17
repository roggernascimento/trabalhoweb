<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Genero
 * 
 * @property int $id
 * @property string $genero
 * 
 * @property \Illuminate\Database\Eloquent\Collection $livros
 *
 * @package App\Models
 */
class Genero extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'genero'
	];

	public function livros()
	{
		return $this->belongsToMany(\App\Models\Livro::class, 'genero_livro', 'id_generos', 'id_livros');
	}
}
