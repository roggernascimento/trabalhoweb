<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 17:23:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Prateleira
 * 
 * @property int $id
 * @property string $prateleira
 * 
 * @property \Illuminate\Database\Eloquent\Collection $livros
 *
 * @package App\Models
 */
class Prateleira extends Eloquent
{
	protected $table = 'prateleira';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'prateleira'
	];

	public function livros()
	{
		return $this->belongsToMany(\App\Models\Livro::class, 'prateleira_livros', 'id_prateleira', 'id_livros');
	}
}
