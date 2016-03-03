<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Examen;
use App\HojaRuta;
use App\Orden;
use App\Paciente;
use App\PacienteExamen;
use App\Protocolo;
use App\Queja;
use App\ResultadoLaboratorio;
use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class QuejaController extends Controller
{

    public function __construct()
    {

    }

    public function getRegister()
    {
        return view('queja.registrar');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'descripcion' => 'required|min:50',
        ], [
            'email.required' => 'Es obligatorio ingresar un e-mail.',
            'email.email' => 'Debe ingresar un e-mail válido.',
            'descripcion.required' => 'Por favor ingrese un mensaje.',
            'descripcion.min' => 'Por favor sea más descriptivo (al menos 50 caracteres).'
        ]);

        Queja::create([
           'email' => $request->get('email'),
            'descripcion' => $request->get('descripcion')
        ]);

        return back()->with('notif', 'Queja enviada correctamente.');;
    }

    public function postEstado($id, $estado)
    {
        $queja = Queja::find($id);
        $queja->estado = $estado;
        $queja->save();

        return back();
    }

}
