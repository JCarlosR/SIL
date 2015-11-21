<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Paciente;
use App\Protocolo;
use App\Triaje;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HistorialClinicoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHistorial($triaje_id)
    {
        $triaje = Triaje::find($triaje_id);

        $protocolo = Protocolo::find($triaje->protocolo_id);

        $paciente = Paciente::find($triaje->paciente_id);

        $empresa = Empresa::find($protocolo->empresa_id);
        //dd($empresa->toArray());

        return view('historial.registrarHistorial')->with(compact(['protocolo', 'paciente', 'empresa']));
    }
}
