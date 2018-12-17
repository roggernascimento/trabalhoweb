<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Autore
 * 
 * @property int $id
 * @property string $nome
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

	protected $fillable = [
		'nome'
	];

	public function livros()
	{
		return $this->belongsToMany(\App\Models\Livro::class, 'livros_autores', 'id_autores', 'id_livros');
	}
}
