<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\ExamenEspecial;
use App\HistorialClinico;
use App\Orden;
use App\Paciente;
use App\PacienteExamen;
use App\Protocolo;
use App\Psicologia;
use App\ResultadoConsultoria;
use App\ResultadoLaboratorio;
use App\ResultadoRadiologia;
use App\Triaje;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//        $ordenes = collect([]);
//        foreach($pacientes as $paciente){
//            $ordenes = $ordenes->merge(Orden::where('paciente_id', $paciente->id)->get());
//        }
        $ordenes = DB::table('pacientes')
        ->join('ordenes', 'pacientes.id','=', 'ordenes.paciente_id')
        ->select('ordenes.*','pacientes.nombre')
        ->get();

        //dd($ordenes);
        return response()->json($ordenes);
    }

    public function postRegistrar(Request $request)
    {

        $this->validate($request, [
            'paciente_id' => 'required',
            'peso' => 'required|numeric',
            'talla' => 'required|numeric',
            'presion_arterial' => 'required',
            'frecuencia_cardiaca' => 'required'
        ]);
        $fecha = Carbon::now('America/Lima');

        $historial = HistorialClinico::create([
            'fecha_creacion' => $fecha,
            'fecha_modificacion' => $fecha
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
            'historial_clinico_id' => $historial->id
        ]);

        $examenes = PacienteExamen::where('orden_id',$request->get('orden_id'))->get();

        foreach($examenes as $examen){
            if($examen->examen_id == 7){
                ResultadoLaboratorio::create([
                    'tipoAnalisis' => 'Análisis de Sangre',
                    'estado' => 'pendiente',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
                ResultadoLaboratorio::create([
                    'tipoAnalisis' => 'Análisis de Orina',
                    'estado' => 'pendiente',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
                ResultadoLaboratorio::create([
                    'tipoAnalisis' => 'Análisis de Triglicéridos',
                    'estado' => 'pendiente',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }
            if($examen->examen_id == 2){
                Psicologia::create([
                    'estado' => 'pendiente',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }
            if($examen->examen_id == 3){
                ResultadoRadiologia::create([
                    'estado' => 'pendiente',
                    'tipoRadiologia' => 'Resonancia Magnética',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
                ResultadoRadiologia::create([
                    'estado' => 'pendiente',
                    'tipoRadiologia' => 'Tomografía Axial',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }

            if($examen->examen_id == 1){
                ExamenEspecial::create([
                    'estado' => 'pendiente',
                    'tipoExamen' => 'Espirometría',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }
            if($examen->examen_id == 4){
                ExamenEspecial::create([
                    'estado' => 'pendiente',
                    'tipoExamen' => 'Musculoesquelético',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }
            if($examen->examen_id == 5){
                ExamenEspecial::create([
                    'estado' => 'pendiente',
                    'tipoExamen' => 'Psicosensométricos',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }
            if($examen->examen_id == 8){
                ExamenEspecial::create([
                    'estado' => 'pendiente',
                    'tipoExamen' => 'Oftalmología',
                    'detalleorden_id' => $request->get('orden_id'),
                    'protocolo_id' => $request->get('protocolo_id'),
                    'hojaruta_id' => $request->get('hojaruta_id'),
                    'historialClinico_id' => $historial->id
                ]);
            }

            ResultadoConsultoria::create([
                'estado' => 'pendiente',
                'temaConsultoria' => 'Consultoria de seguridad',
                'detalleorden_id' => $request->get('orden_id'),
                'protocolo_id' => $request->get('protocolo_id'),
                'hojaruta_id' => $request->get('hojaruta_id'),
                'historialClinico_id' => $historial->id
            ]);
        }


        return redirect('historial/registrar/'.$request->get('paciente_id'));
    }
}
