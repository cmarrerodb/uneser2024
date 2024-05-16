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
        // $nucleos = VacumuladoNucleo::where('nucleo','='.'SUCRE')->get();
        // $nucleos_hora = VtipoNucleoMovilizacionHora::all();
        // $nucleos_hora = VnucleosMovilizacionHora::where('nucleo','='.'SUCRE')->get();
        $capital = ['CARICUAO','CEPAP','EL VALLE','IDECYT','PALO VERDE','POSTGRADO','SANTA FE'];
        // $nucleos_hora = VnucleosMovilizacionHora::all();
        $nucleos_hora = VnucleosMovilizacionHora::whereIn('nucleo',$capital)->get();
        $max_hora_nucleos = VacumuladoNucleo::max('hora');
        $estados = VacumuladoEstado::all();
        $max_hora_estados = VacumuladoNucleo::max('hora');
        $tipos = VacumuladoTipo::all();
        $max_hora_tipos = VacumuladoTipo::max('hora');

        return view('graficos.graficos',compact(
            'max_hora_movilizacion',
            'movilizacion',
            'nucleos',
            'nucleos_hora',
            'max_hora_nucleos',
            'estados',
            'max_hora_estados',
            'tipos',
            'max_hora_tipos'
        ));
    }

    

    
}
