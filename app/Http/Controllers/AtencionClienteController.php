<?php

namespace App\Http\Controllers;

use App\Proceso;
use DB;
use App\Empresa;
use App\Protocolo;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class IndicadorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndicePerdidas()
    {
        return view('indicadores.atencion-cliente.perdidas');
    }

    public function getIndiceCrecimiento()
    {
        return view('indicadores.atencion-cliente.crecimiento');
    }

    public function getIndiceAceptacion()
    {
        return view('indicadores.atencion-cliente.aceptacion');
    }

    public function getIndiceAtencion()
    {
        return view('indicadores.atencion-cliente.atencion');
    }


}
