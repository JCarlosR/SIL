<?php

namespace App\Http\Controllers;

use App\Proceso;
use App\Queja;
use DB;
use App\Empresa;
use App\Protocolo;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AtencionClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndicePerdidas()
    {
        return view('indicadores.atencion-cliente.perdidas');
    }

    public function calcIndicePerdidas(Request $request)
    {
        $inicio = $request->get('inicio');
        $fin = $request->get('fin');

        //
        $verificados = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
                        ->where('estado', 'Verificado')->get();
        $cancelados = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
                        ->where('estado', 'Cancelado')->get();
        $pendientes = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
                        ->where('estado', 'Pendiente')->get();

        $montoVerificado = 0;
        foreach ($verificados as $verificado) {
            $montoVerificado += $verificado->monto;
        }

        $montoPerdido = 0;
        foreach ($cancelados as $cancelado) {
            $montoPerdido += $cancelado->monto;
        }

        $montoPendiente = 0;
        foreach ($pendientes as $pendiente) {
            $montoPendiente += $cancelado->monto;
        }

        $montoTotal = $montoVerificado + $montoPendiente + $montoPerdido;

        $respuesta['verificados'] = 100 * $montoVerificado / $montoTotal;
        $respuesta['cancelados'] = 100 * $montoPerdido / $montoTotal;
        $respuesta['pendientes'] = 100 - $respuesta['verificados'] - $respuesta['cancelados'];

        $respuesta['indice'] = 100 * $montoPerdido / $montoVerificado;

        return $respuesta;
    }

    public function getIndiceCrecimiento()
    {
        return view('indicadores.atencion-cliente.crecimiento');
    }

    public function calcIndiceCrecimiento(Request $request)
    {
        $inicio = $request->get('inicio');
        $fin = $request->get('fin');

        // Empresas que han comprado en el rango de tiempo
        $empresas = Empresa::all();
        $empresas = $empresas->filter(function ($empresa) use ($inicio, $fin) {
            $protocolos = $empresa->protocolos;
            foreach ($protocolos as $protocolo) {
                $fecha = $protocolo->created_at;
                if ($fecha >= $inicio && $fecha <= $fin)
                    return true;
            }

            return false;
        });

        // Total de empresas
        $total = $empresas->count();

        // De tales empresas cuántas son nuevas?
        $nuevas = 0;

        foreach ($empresas as $empresa) {
            if ($empresa->created_at >= $inicio)
                ++$nuevas;
        }
        $respuesta['indice'] = 100 * $nuevas / $total;
        $respuesta['nuevas'] = $nuevas;
        $respuesta['antiguas'] = $total - $nuevas;

        return $respuesta;
    }


    public function getIndiceAceptacion()
    {
        return view('indicadores.atencion-cliente.aceptacion');
    }

    public function calcIndiceAceptacion(Request $request)
    {
        $inicio = $request->get('inicio');
        $fin = $request->get('fin');

        $verificados = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Verificado')->count();
        $cancelados = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Cancelado')->count();
        $pendientes = Protocolo::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Pendiente')->count();

        $total = $verificados + $cancelados + $pendientes;

        $respuesta['verificados'] = 100 * $verificados / $total;
        $respuesta['cancelados'] = 100 * $cancelados / $total;
        $respuesta['pendientes'] = 100 - $respuesta['verificados'] - $respuesta['cancelados'];

        return $respuesta;
    }

    public function getIndiceAtencion()
    {
        return view('indicadores.atencion-cliente.atencion');
    }

    public function calcIndiceAtencion(Request $request)
    {
        $inicio = $request->get('inicio');
        $fin = $request->get('fin');

        $atendidas = Queja::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Atendida')->count();
        $omitidas = Queja::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Omitida')->count();
        $pendientes = Queja::where('created_at', '>=', $inicio)->where('created_at', '<=', $fin)
            ->where('estado', 'Pendiente')->count();

        $total = $atendidas + $omitidas + $pendientes;

        $respuesta['atendidas'] = 100 * $atendidas / $total;
        $respuesta['omitidas'] = 100 * $omitidas / $total;
        $respuesta['pendientes'] = 100 - $respuesta['atendidas'] - $respuesta['omitidas'];

        return $respuesta;
    }
}

