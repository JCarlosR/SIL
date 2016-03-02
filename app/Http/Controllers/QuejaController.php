<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Examen;
use App\HojaRuta;
use App\Orden;
use App\Paciente;
use App\PacienteExamen;
use App\Protocolo;
use App\ResultadoLaboratorio;
use App\User;
use Barryvdh\DomPDF\PDF;
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
        return view('queja.registrar');
    }

    public function postRegister(Request $request)
    {
        $filas = $request->get('filas');

        $insert1 = Protocolo::create([
           'empresa_id'=> $request->get('empresa')
        ]);

        foreach($filas as $fila){
            $paciente = Paciente::create([
                'nombre'=>$fila[1],
                'dni'=>$fila[2],
                'pacienteperfil_id'=>$fila[3],
                'numhijos'=>$fila[4],
                'estudios'=>$fila[5],
                'sexo'=>$fila[6],
                'gruposangre'=>$fila[7]
            ]);

            $orden = Orden::create([
                'paciente_id' => $paciente->id,
                'protocolo_id' => $request->get('id')
            ]);
            HojaRuta::create([
                'protocolo_id' => $request->get('id'),
                'orden_id' => $orden->id
            ]);
            //inserts en las tablas que usan la hoja ruta
        }

        if ($insert1)
            return ['exito'=>true];

        return ['exito'=>false];
    }

    public function postEstado($id, $estado)
    {
        $protocolo = Protocolo::find($id);
        $protocolo->estado = $estado;
        $protocolo->save();

        return back();
    }

}
