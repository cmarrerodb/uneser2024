<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Cne_estado;
use App\Models\Cne_municipio;
use App\Models\Cne_parroquia;
use App\Models\Gabinete;
use App\Models\Ente;
use App\Models\Dependencia;
use App\Models\Trabajadores;
use App\Models\Vcne_trabajadores;


class TrabajadorController extends Controller
{
    public function __construct() {
        $this->middleware('can:admin.workers.index')->only('index');
        $this->middleware('can:admin.workers.edit')->only('edit');
        $this->middleware('can:admin.workers.create')->only('create');
        $this->middleware('can:admin.workers.show')->only('show');
        $this->middleware('can:admin.workers.destroy')->only('destroy');
    }

    public function index()
    {
        return view('trabajadores');
    }
    public function trab_tabla(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $query = Vcne_trabajadores::query();
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($search) {
                $query->where('nombre', 'Ilike', '%' . $search . '%')
                    ->orWhere('cedula', 'Ilike', '%' . $search . '%')
                    ->orWhere('estado', 'Ilike', '%' . $search . '%')
                    ->orWhere('municipio', 'Ilike', '%' . $search . '%')
                    ->orWhere('parroquia', 'Ilike', '%' . $search . '%')
                    ->orWhere('gabinete', 'Ilike', '%' . $search . '%')
                    ->orWhere('ente', 'Ilike', '%' . $search . '%')
                    ->orWhere('nombre_dependencia', 'Ilike', '%' . $search . '%')
                    ->orWhere('telefono', 'Ilike', '%' . $search . '%')
                    ->orWhere('voto', 'Ilike', '%' . $search . '%')
                    ->orWhere('observaciones', 'Ilike', '%' . $search . '%')
                    ->orWhere('hora_voto', 'Ilike', '%' . $search . '%')
                ;
            });            
        } else {
            if ($request->has('filter')) {
                $filters = json_decode($request->filter, true);
                foreach ($filters as $column => $value) {
                    $query->where($column, 'like', '%' . $value . '%');
                }
            }
        }
        $total = $query->count();
        if ($request->has('limit')) {
            $trabajadores = $query->skip($offset)->take($limit)->get();
        } else {
            $trabajadores = $query->get();
        }
        return response()->json([
            'total' => $total,
            'rows' => $trabajadores
        ]);
    }
        
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cedula' => 'required|numeric',
            'nombre' => 'required',
            'id_estado' => 'required',
            'id_municipio' => 'required',
            'id_parroquia' => 'required',
            'id_gabinete' => 'required',
            'id_ente' => 'required',
            'id_dependencia' => 'required',
            'telefono' => 'required|numeric',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'numeric' => 'El campo :attribute debe ser numérico.',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['message' => 'Error en la validación', 'errors' => $validator->errors()], 200);
        }
    
        // Continuar con el resto del código si la validación es exitosa
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function actualizar_trabajador(Request $request) {
        $voto = $request->voto = 'SI' ? true: false;
        $datos = [
            'voto' => $voto,
            'hora_voto' => $request->hora_voto,
            'id_estado' => $request->id_estado,
            'id_municipio' => $request->id_municipio,
            'id_parroquia' => $request->id_parroquia,
            'id_gabinete' => $request->id_gabinete,
            'id_ente' => $request->id_ente,
            'id_dependencia' => $request->id_dependencia,
            'telfono' => $request->telefono,
        ];
        if ($request->has('observaciones')) {
            $datos['observaciones'] = $request->observaciones;
        }
        if ($request->has('hora_voto')) {
            $datos['hora_voto'] = $request->hora_voto;
        }
        try {
            Trabajadores::where('cedula', $request->cedula)->update($datos);
            return response()->json(['message' => 'Trabajador actualizado exitosamente','status' =>200], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error en la actualización del trabajador','status'=>500], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trabajador = Trabajadores::where('cedula', '=', $id)->first(); // Buscar el registro por cédula
        if ($trabajador) {
            $trabajador->deleted_at = now(); // Sustituir el valor de "deleted_at" por el timestamp actual
            $trabajador->save(); // Guardar el registro actualizado
        }
        return json_encode($trabajador);
    }
    public function check(Request $request) {
        $cedula = $request->cedula;
        $voto = true;
        $horaVoto = $request->hora_voto;
        $trabajador = Trabajadores::where('cedula', '=',$cedula)->first();
        $trabajador->voto = $voto;
        $trabajador->hora_voto = $horaVoto;
        $trabajador->save();
        return json_encode($trabajador);
    }
    public function trabajador_auxiliares() {
        $estados = Cne_estado::select('id', 'estado')->get();
        $municipios = Cne_municipio::select('id', 'estado_id','municipio')->get();
        $parroquias = Cne_parroquia::select('id', 'estado_id','municipio_id','parroquia')->get();
        $gabinetes = Gabinete::select('id_gabinete', 'gabinete')->get();
        $entes = Ente::select('id_ente', 'id_gabinete','ente')->get();
        $dependencias = Dependencia::select('id_dependencia', 'id_gabinete','id_ente','nombre_dependencia')->get();
        return json_encode([$estados,$municipios,$parroquias,$gabinetes,$entes,$dependencias]);
    }
    public function obtener_trabajador(Request $request) {
        $ci = $request->ci;
        $trabajador = Trabajadores::find($ci);
        return json_encode($trabajador);
    }
    public function revisar_cedula(Request $request) {
        $ci = $request->cedula;
        // DB::enableQueryLog();
        $cedula = Vcne_trabajadores::where('cedula','=',$ci)->get();
        if (count($cedula)==0) {
            $cne = 'http://poi-r.vps.co.ve/cne/?cedula='.$ci;
            info($cne);
            $respuesta = file_get_contents($cne);
            info($respuesta);
            return json_encode([count($cedula),$respuesta]);
        } else {
            return json_encode([count($cedula)]);
        }
    }
}
