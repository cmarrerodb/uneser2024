<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VtotalMovilizacionHora;

class MovilizacionController extends Controller
{
    public function index() {
        return view ('movilizacion.movilizacion');
    }
    public function movilizacion_hora(Request $request)
    {
        info($request);
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $query = VtotalMovilizacionHora::query();
        $query->select('hora','cant','acumulado');
        $total = $query->count();
        if ($request->has('limit')) {
            $total_hora = $query->skip($offset)->take($limit)->get();
        } else {
            $total_hora = $query->get();
        }
        return response()->json([
            'total' => $total,
            'rows' => $total_hora
        ]);
    }    
}
