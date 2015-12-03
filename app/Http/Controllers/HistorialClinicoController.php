<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Orden;
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

    public function getHistorial($paciente_id)
    {
        $orden = Orden::where('paciente_id', $paciente_id)->first();
        $protocolo = $orden->protocolo;
        //dd($protocolo);
        $empresa = $protocolo->empresa;
        $paciente = Paciente::find($paciente_id);

        $ordenes = $paciente->ordenes;

        return view('historial.registrarHistorial')->with(compact(['ordenes', 'protocolo', 'paciente', 'empresa']));
    }

    public function getVisualizar($paciente_id)
    {
        $orden = Orden::where('paciente_id', $paciente_id)->first();
        $protocolo = $orden->protocolo;
        //dd($protocolo);
        $empresa = $protocolo->empresa;
        $paciente = Paciente::find($paciente_id);

        $ordenes = $paciente->ordenes;

        $vista = view('historial.pdfHistorial')->with(compact(['ordenes','protocolo','paciente','empresa']))->render();
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();

    }
}
