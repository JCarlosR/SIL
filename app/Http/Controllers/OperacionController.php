<?php

namespace App\Http\Controllers;

use App\Operacion;
use App\Proceso;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class OperacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        $operaciones = DB::table('procesos')
            ->join('operacions', 'procesos.id', '=', 'operacions.proceso')
            ->select('*')
            ->get();
        $procesos = Proceso::all();
        //dd($operaciones);
        return view('operaciones.registrar')->with(compact(['operaciones', 'procesos']));
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'proceso' => 'required',
            'operacion' => 'required',
            'transporte' => 'required',
            'inspeccion' => 'required',
            'demora' => 'required',
            'almacenaje' => 'required',
            'combinada' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('operacion/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $operacion = new Operacion();
        $operacion->proceso = $request->proceso;
        $operacion->operacion = $request->operacion;
        $operacion->transporte = $request->transporte;
        $operacion->inspeccion = $request->inspeccion;
        $operacion->demora = $request->demora;
        $operacion->almacenaje = $request->almacenaje;
        $operacion->combinada = $request->combinada;

        $operacion->save();

        return redirect('operacion/registrar');
    }

    public function getEditar($id) {
        $operacion = Operacion::findOrFail($id);
        return view('operaciones.editar', [ 'operacion' => $operacion ]);
    }

    public function putEditar(Request $request, $id) {

        $validator = Validator::make($request->all(), [

            'operacion' => 'required',
            'transporte' => 'required',
            'inspeccion' => 'required',
            'demora' => 'required',
            'almacenaje' => 'required',
            'combinada' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('operacion/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $operacion = Operacion::findOrFail($id);

        $operacion->operacion = $request->operacion;
        $operacion->transporte = $request->transporte;
        $operacion->inspeccion = $request->inspeccion;
        $operacion->demora = $request->demora;
        $operacion->almacenaje = $request->almacenaje;
        $operacion->combinada = $request->combinada;

        $operacion->save();

        return redirect('operacion/registrar');
    }

    public function delete($id) {
        Operacion::findOrFail($id)->delete();
        return redirect('operacion/registrar');
    }

}
