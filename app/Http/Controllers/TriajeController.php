<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Paciente;
use App\Protocolo;
use App\Triaje;
use Illuminate\Http\Request;
use Validator;


class TriajeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getTriaje()
    {
        return view('triaje.registrarTriaje');
    }

    public function getPacientes(Request $request)
    {
        $pacientes = Paciente::where('nombre', 'like', $request->get('inicio').'%')->get();
        return response()->json($pacientes);
    }

    public function postRegistrar(Request $request)
    {
//        paciente_id
//        hojaruta_id
//        protocolo_id
//        orden_id
//        historial_clinico_id

        $this->validate($request, [
            'paciente_id' => 'required',
            'peso' => 'required|numeric',
            'talla' => 'required|numeric',
            'presion_arterial' => 'required',
            'frecuencia_cardiaca' => 'required'
        ]);

        $triaje = Triaje::create([
            'peso' => $request->get('peso'),
            'talla' => $request->get('talla'),
            'presion_arterial' => $request->get('presion_arterial'),
            'frecuencia_cardiaca' => $request->get('frecuencia_cardiaca'),
            'paciente_id' =>$request->get('paciente_id'),
            'hojaruta_id' => $request->get('hojaruta_id'),
            'protocolo_id' => $request->get('protocolo_id'),
            'orden_id' => $request->get('orden_id'),
            'historial_clinico_id' => $request->get('historial_clinico_id')
        ]);

        
        return redirect('Historial/registrar/'.$triaje->id);
    }
}
