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
        return view('registrarEmpresa');
    }

    public function postAsignar(Request $request)
    {
        $insert = Empresa::create([
                'nombre_comercial'=>$request->get('nombre_comercial'),
                'ruc'=>$request->get('ruc'),
                'web'=>$request->get('web'),
                'contacto1'=>$request->get('contacto1'),
                'contacto2'=>$request->get('contacto2')
        ]);
        if($insert)
             return ['exito'=>true];
        return ['exito'=>false];

    }




}
