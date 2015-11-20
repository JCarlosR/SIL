<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class EmpresaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        return view('empresa.registrar');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'nombre_comercial' => 'required|min:3',
            'ruc'              => 'required|digits:11'
        ]);

        Empresa::create([
            'nombre_comercial' => $request->get('nombre_comercial'),
            'ruc'              => $request->get('ruc'),
            'web'              => $request->get('web'),
            'contacto1'        => $request->get('contacto1'),
            'contacto2'        => $request->get('contacto2')
        ]);

        return redirect('protocolo/registrar');
    }




}
