<?php

namespace App\Http\Controllers;

use App\Area;
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
        $areas = Area::all();
        return view('indicadores.gestion-calidad.info-financiero')->with(compact(['areas']));
    }

    public function getGCProceso()
    {
        $procesos = Proceso::all();

        return view('indicadores.gestion-calidad.info-proceso')->with(compact(['procesos']));
    }

    public function postGCProcesoGrafica( Request $request)
    {
        $proceso = $request->proceso;
        $nombreProceso = Proceso::find($proceso);
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

        $procesos = DB::table('procesos')
            ->join('operacions', 'procesos.id', '=', 'operacions.proceso')
            ->select('procesos.nombre')
            ->get();
        //dd( $procesos[0]->nombre );

        $operaciones = DB::table('operacions')
            ->select('operacions.operacion')
            ->get();
        //dd( $operaciones[0]->operacion );

        $transportes = DB::table('operacions')
            ->select('operacions.transporte')
            ->get();
        //dd( $transportes[0]->transporte );
        $inspecciones = DB::table('operacions')
            ->select('operacions.inspeccion')
            ->get();
        //dd( $transportes[0]->transporte );
        $demoras = DB::table('operacions')
            ->select('operacions.demora')
            ->get();
        //dd( $transportes[0]->transporte );
        $almacenajes = DB::table('operacions')
            ->select('operacions.almacenaje')
            ->get();
        //dd( $transportes[0]->transporte );
        $combinadas = DB::table('operacions')
            ->select('operacions.combinada')
            ->get();
        //dd( $combinadas[0]->combinada );


        return view('indicadores.gestion-calidad.grafica-proceso')->with(compact(['nombreProceso', 'combinadas', 'almacenajes', 'demoras', 'inspecciones', 'transportes', 'operaciones', 'procesos', 'res']));
    }

    public function postGCFinancieroGrafica( Request $request)
    {
        $area = $request->area;
        $anual = $request->anual;
        $valorproc = DB::table('presupuestos')
            ->select('presupuesto')
            ->where('area', '=', $area)
            ->where('anual', '=', $anual)
            ->get();
        $valortotal = DB::table('presupuestos')
            ->select('real')
            ->where('area', '=', $area)
            ->where('anual', '=', $anual)
            ->get();
        //dd( $valortotal[0]->real );
        //dd( $valorproc[0]->presupuesto );
        $res = $valortotal[0]->real/$valorproc[0]->presupuesto;
        //dd($res);

        $areaNombre = Area::find($area);

        $anualTotal = DB::table('presupuestos')
            ->select('anual')
            ->where('area', '=', $area)
            ->get();
        //dd($anualTotal[0]->anual);
        $presupuestos = DB::table('presupuestos')
            ->select('presupuesto')
            ->where('area', '=', $area)
            ->get();
        $reales = DB::table('presupuestos')
            ->select('real')
            ->where('area', '=', $area)
            ->get();
        //dd($reales);
        return view('indicadores.gestion-calidad.grafica-financiero')->with(compact(['reales', 'presupuestos', 'res', 'anual', 'areaNombre', 'anualTotal']));
    }

}
