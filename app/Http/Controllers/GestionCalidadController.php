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

class GestionCalidadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getGCFinanciero()
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
            'gestion-calidad/proceso',
            '/',
            '/'
        ];

        return view('indicadores.gestion-calidad.info-financiero')->with(compact(['objetivos', 'enlaces']));
    }

    public function getGCProceso()
    {
        $procesos = Proceso::all();

        return view('indicadores.gestion-calidad.info-proceso')->with(compact(['procesos']));
    }

    public function postGCProcesoGrafica( Request $request)
    {
        $proceso = $request->proceso;
        $valorproc = DB::table('operacions')
            ->select(DB::raw('sum(inspeccion+operacion+combinada+almacenaje) as suma'))
            ->where('proceso', '=', $proceso)
            ->get();
        $valortotal = DB::table('operacions')
            ->select(DB::raw('sum(inspeccion+operacion+combinada+almacenaje+transporte+demora) as suma'))
            ->where('proceso', '=', $proceso)
            ->get();

        $res = $valorproc[0]->suma*100/$valortotal[0]->suma;
        //dd( $valortotal[0]->suma );



        return view('indicadores.gestion-calidad.grafica-proceso')->with(compact(['res']));
    }

}
