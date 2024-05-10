<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VtotalMovilizacionHora;
use App\Models\VnucleosMovilizacionHora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class MovilizacionController extends Controller
{
    public function index() {
        return view ('movilizacion.movilizacion');
    }
    public function movilizacion_hora(Request $request)
    {
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
    public function movilizacion_nucleo(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $user = Auth::user();
        $query = VnucleosMovilizacionHora::query();
        if (!$user->hasRole('Admin')) {
            $nucleos = DB::table('users_nucleos')
            ->select('nucleo_id')
            ->where('user_id','=',$user->id)
            ->get();
            $anid = [];
            foreach ($nucleos as $key => $value) {
                array_push($anid, $value->nucleo_id);
            }
            $query->whereIn('nucleo_id',$anid);
        }
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($user,$search) {
                $query->orWhere('nucleo', 'Ilike', '%' . $search . '%')
                ;
            });
        }
        $total = $query->count();
        if ($request->has('limit')) {
            $nucleo_hora = $query->skip($offset)->take($limit)->get();
        } else {
            $nucleo_hora = $query->get();
        }
        return response()->json([
            'total' => $total,
            'rows' => $nucleo_hora
        ]);
    }    
}
