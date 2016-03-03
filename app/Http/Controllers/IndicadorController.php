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

    public function getAtencionCliente()
    {
        // En el mismo orden de las perspectivas
        // Financiera, Cliente, Procesos y Aprendizaje
        $objetivos = [
            'Incrementar la rentabilidad.',
            'Obtener nuevos y potenciales clientes.',
            'Evitar la cancelación de protocolos de atención. ',
            'Gestionar adecuadamente las quejas.'
        ];

        // Enlaces hacia las vistas de cada sub-proceso (KPI)
        $enlaces = [
            'http://www.google.com',
            '/',
            '/',
            '/'
        ];

        return view('indicadores.atencion_cliente')->with(compact(['objetivos', 'enlaces']));
    }

    public function getGestionCalidad()
    {
        // En el mismo orden de las perspectivas
        // Financiera, Cliente, Procesos y Aprendizaje
        $objetivos = [
            'Disminuir los gastos operativos por área.',
            'Incrementar la satisfacción de los clientes.',
            'Optimizar los tiempos por proceso. ',
            'Mejorar la capacidad del personal en general.'
        ];

        // Enlaces hacia las vistas de cada sub-proceso (KPI)
        $enlaces = [
            'gestion-calidad/financiero',
            '/',
            'gestion-calidad/proceso',
            '/'
        ];

        return view('indicadores.gestion_calidad')->with(compact(['objetivos', 'enlaces']));
    }

}
