<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cne_parroquia extends Model
{
    use SoftDeletes;
	protected $table = 'cne_parroquias';
	protected $primaryKey = 'id';

	protected $casts = [
		'estado_id' => 'int',
		'municipio_id' => 'int',
		'parroquia_id' => 'int'
	];

	protected $fillable = [
		'estado_id',
		'municipio_id',
		'parroquia_id',
		'parroquia'
	];
	public function municipio()
	{
		return $this->belongsTo(Cne_municipio::class, 'estado_id', 'estado_id')
					->where('municipios.estado_id', '=', 'parroquias.estado_id')
					->where('municipios.municipio_id', '=', 'parroquias.estado_id')
					->where('municipios.estado_id', '=', 'parroquias.municipio_id')
					->where('municipios.municipio_id', '=', 'parroquias.municipio_id');
	}    
}
