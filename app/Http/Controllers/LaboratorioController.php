<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Paciente;
use App\ResultadoLaboratorio;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaboratorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('Laboratorio.LaboratorioHDR');
    }

    public function getHC()
    {
        return view('Laboratorio.LaboratorioHC');
    }

    public function getEditarCargo($id)
    {
        return view('mof.editar-cargo');
    }

    public function getPrevisualizar($id)
    {
        $examen = ResultadoLaboratorio::find($id);
        $pacienteid = Orden::find($examen->detalleorden_id);
        $paciente = Paciente::find($pacienteid->paciente_id);
        $vista =  view('Laboratorio.pdf', compact('examen','paciente'))->render();
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();
    }

}
