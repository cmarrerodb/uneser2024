<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cne_estado;
use App\Models\Cne_municipio;
use App\Models\Cne_parroquia;
use App\Models\Gabinete;
use App\Models\Ente;
use App\Models\Dependencia;


class AuxiliarController extends Controller
{
    public function estados_entes() {
        $estados = Cne_estado::select('id', 'estado')->get();
        $gabinetes = Gabinete::select('id_gabinete', 'gabinete')->get();
        return json_encode([$estados,$gabinetes]);
    }    
    public function estado_municipios(Request $request) {
        $id = $request->id;
        $municipios = Cne_Municipio::select('municipio_id', 'estado_id','municipio')->where('estado_id','=',$id)->get();
        return json_encode($municipios);
    }    
    public function municipio_parroquias(Request $request) {
        $id_estado = $request->id_estado;
        $id_municipio = $request->id_municipio;
        $parroquias = Cne_parroquia::select('parroquia_id','estado_id','municipio_id','parroquia')
        ->where('estado_id','=',$id_estado)
        ->where('municipio_id','=',$id_municipio)
        ->get();
        return json_encode($parroquias);
    }    
    public function gabinete_entes(Request $request) {
        $id = $request->id;
        $ente = Ente::select('id_ente', 'id_gabinete','ente')->where('id_gabinete','=',$id)->get();
        return json_encode($ente);
    }

    public function ente_dependencias(Request $request) {
        $id_gabinete = $request->id_gabinete;
        $id_ente = $request->id_ente;
        $dependencias = Dependencia::select('id_dependencia','id_ente','id_dependencia','nombre_dependencia')
        ->where('id_gabinete','=',$id_gabinete)
        ->where('id_ente','=',$id_ente)
        ->get();
        return json_encode($dependencias);
    }      
    public function estados() {
        $estado = Cne_estado::select('estado')->get();
        return json_encode($estado);

    }
}