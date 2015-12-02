<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Orden;
use App\Paciente;
use App\PacienteExamen;
use App\Protocolo;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HojaRutaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHojaRuta($orden_id, $paciente_id)
    {
        $examenes = PacienteExamen::where('orden_id', $orden_id)->get();
        $paciente = Paciente::find($paciente_id);
        $orden = Orden::find($orden_id);
        $protocolo = Protocolo::find($orden->protocolo_id);
        $empresa = Empresa::find($protocolo->empresa_id);
        $orden = $orden_id;
        //dd($empresa);
        return view('hojaruta.registrarHojaRuta')->with(compact(['examenes','paciente','empresa', 'orden']));
    }

    public function getVisualizar($orden_id, $paciente_id)
    {
        $examenes = PacienteExamen::where('orden_id', $orden_id)->get();
        $paciente = Paciente::find($paciente_id);
        $orden = Orden::find($orden_id);
        $protocolo = Protocolo::find($orden->protocolo_id);
        $empresa = Empresa::find($protocolo->empresa_id);
        //dd($empresa);
        return view('hojaruta.pdfRuta')->with(compact(['examenes','paciente','empresa']));
    }
}
