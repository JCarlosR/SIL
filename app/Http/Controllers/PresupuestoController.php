<?php

namespace App\Http\Controllers;

use App\Area;
use App\Operacion;
use App\Presupuesto;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class PresupuestoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        $presupuestos = DB::table('areas')
            ->join('presupuestos', 'areas.id', '=', 'presupuestos.area')
            ->select('*')
            ->get();
        $areas = Area::all();
        //dd($operaciones);
        return view('presupuestos.registrar')->with(compact(['presupuestos', 'areas']));
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'area' => 'required',
            'anual' => 'required',
            'real' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('presupuesto/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $presupuesto = new Presupuesto();
        $presupuesto->area = $request->area;
        $presupuesto->anual = $request->anual;

        $valorproc = DB::table('presupuestos')
            ->select(DB::raw('avg(presupuesto) as average'))
            ->where('area', '=', $request->area)
            ->get();

        //dd($valorproc[0]->average);
        $presupuesto->presupuesto = $valorproc[0]->average;
        $presupuesto->real = $request->real;

        $presupuesto->save();

        return redirect('presupuesto/registrar');
    }

    public function getEditar($id) {
        $presupuesto = Presupuesto::findOrFail($id);
        return view('presupuestos.editar', [ 'presupuesto' => $presupuesto ]);
    }

    public function putEditar(Request $request, $id) {

        $validator = Validator::make($request->all(), [

            'real' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('presupuesto/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $presupuesto = Presupuesto::findOrFail($id);

        $presupuesto->real = $request->real;

        $presupuesto->save();

        return redirect('presupuesto/registrar');
    }

    public function delete($id) {
        Presupuesto::findOrFail($id)->delete();
        return redirect('presupuesto/registrar');
    }

}
