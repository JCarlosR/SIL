<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Examen;
use App\Orden;
use App\Paciente;
use App\Protocolo;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class ProtocoloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        $empresas = Empresa::all();
        $maxid = Protocolo::all()->max('id');
        if($maxid == null){$maxid = 0;}
        $maxid++;
        return view('registrarProtocolo')->with(compact(['empresas','maxid']));
    }

    public function postAsignar(Request $request)
    {
        $filas = $request->get('filas');

        $insert1 = Protocolo::create([
           'empresa_id'=> $request->get('empresa')
        ]);

        foreach($filas as $fila){
            $insert = Paciente::create([
                'nombre'=>$fila[1],
                'dni'=>$fila[2],
                'pacienteperfil_id'=>$fila[3]
            ]);
            $ultimo = Paciente::all()->max('id');
            $insert2 = Orden::create([
                'paciente_id'=>$ultimo,
                'protocolo_id'=>$request->get('id')
            ]);
        }
        if($insert1)
            return ['exito'=>true];
        return ['exito'=>false];
    }

    public function getExamenes(){
        $maxid = Protocolo::all()->max('id');
        $examenes = Examen::all();
        $ordenes = Orden::where('protocolo_id',$maxid)->get();
        $pacientes = [];
        foreach($ordenes as $orden) {
            $pacientes[] = Paciente::find($orden->paciente_id);
        }
        return view('registrarExamenes')->with(compact(['maxid','pacientes','examenes']));
    }

    public function asignarExamenes(Request $request){
    }
}
