<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vcne_trabajadores extends Model
{
    protected $table = 'vcne_trabajadores';
    
    protected $fillable = [
        'cedula',
        'nombre',
        'estado',
        'municipio',
        'circuito',
        'parroquia',
        'gabinete',
        'ente',
        'nombre_dependencia',
        'telefono',
        'voto',
        'observaciones',
        'hora_voto'
    ];
}
