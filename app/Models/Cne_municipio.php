<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cne_municipio extends Model
{
    use SoftDeletes;
	protected $table = 'cne_municipios';
	protected $primaryKey = 'id';
	protected $casts = [
		'estado_id' => 'int',
		'municipio_id' => 'int'
	];

	protected $fillable = [
		'estado_id',
		'municipio_id',
		'municipio'
	];
	public function estado()
	{
		return $this->belongsTo(Cne_estado::class, 'id', 'estado_id');
	}

	public function parroquias()
	{
		return $this->hasMany(Cne_parroquia::class, 'estado_id', 'estado_id');
	}
}
