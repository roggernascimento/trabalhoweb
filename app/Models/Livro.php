<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Livro
 * 
 * @property int $id
 * @property string $titulo
 * @property string $ediçao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $exemplars
 * @property \Illuminate\Database\Eloquent\Collection $generos
 * @property \Illuminate\Database\Eloquent\Collection $autores
 * @property \Illuminate\Database\Eloquent\Collection $prateleiras
 * @property \Illuminate\Database\Eloquent\Collection $reservas
 *
 * @package App\Models
 */
class Livro extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'titulo',
		'ediçao'
	];

	public function exemplars()
	{
		return $this->hasMany(\App\Models\Exemplar::class, 'id_livros');
	}

	public function generos()
	{
		return $this->belongsToMany(\App\Models\Genero::class, 'genero_livro', 'id_livros', 'id_generos');
	}

	public function autores()
	{
		return $this->belongsToMany(\App\Models\Autore::class, 'livros_autores', 'id_livros', 'id_autores');
	}

	public function prateleiras()
	{
		return $this->belongsToMany(\App\Models\Prateleira::class, 'prateleira_livros', 'id_livros', 'id_prateleira');
	}

	public function reservas()
	{
		return $this->hasMany(\App\Models\Reserva::class, 'id_livros');
	}
}
