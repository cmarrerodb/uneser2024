<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VtotalMovilizacionHora;
use App\Models\VacumuladoNucleo;
use App\Models\VacumuladoEstado;
use App\Models\VacumuladoTipo;
use App\Models\VtotalMovilizacionHoraTra;
use App\Models\VtotalMovilizacionHoraEst;
use App\Models\VnucleosMovilizacionHora;
use App\Models\VestadosMovilizacionHora;
use App\Models\VestadosMovilizacionHoraTra;
use App\Models\VestadosMovilizacionHoraEst;
use App\Models\VtipoElectorMovilizacionHora;
use App\Models\VtipoElectorMovilizacionHoraTra;
use App\Models\VtipoNucleoMovilizacionHora;
use App\Models\VtipoNucleoMovilizacionHoraTra;
use App\Models\VnucleosMovilizacionHoraEst;
use App\Models\VnucleosMovilizacionHoraTra;
use App\Models\VtipoEstadosMovilizacionHora;
use App\Models\VtipoEstadosMovilizacionHoraTra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GraficosController extends Controller
{
    public function index() {
        $max_hora_movilizacion = VtotalMovilizacionHora::max('hora');
        $movilizacion = VtotalMovilizacionHora::all();
        $nucleos = VacumuladoNucleo::all();
        $max_hora_nucleos = VacumuladoNucleo::max('hora');
        $estados = VacumuladoEstado::all();
        $tipos = VacumuladoTipo::all();

        return view('graficos.graficos',compact(
            'max_hora_movilizacion',
            'movilizacion',
            'nucleos',
            'max_hora_nucleos',
            'estados',
            'tipos'
        ));
    }

    

    
}
