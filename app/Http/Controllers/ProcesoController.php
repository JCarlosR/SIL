<?php

namespace App\Http\Controllers;

use App\Proceso;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class ProcesoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        $procesos = Proceso::all();
        return view('procesos.registrar', [ 'procesos' => $procesos ]);
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('proceso/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $proceso = new Proceso;
        $proceso->nombre = $request->nombre;
        $proceso->descripcion = $request->descripcion;

        $proceso->save();

        return redirect('proceso/registrar');
    }

    public function getEditar($id) {
        $proceso = Proceso::findOrFail($id);
        return view('procesos.editar', [ 'proceso' => $proceso ]);
    }

    public function putEditar(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('proceso/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $proceso = Proceso::findOrFail($id);

        $proceso->nombre = $request->nombre;
        $proceso->descripcion = $request->descripcion;
        $proceso->save();

        return redirect('proceso/registrar');
    }

    public function delete($id) {
        Proceso::findOrFail($id)->delete();
        return redirect('proceso/registrar');
    }

}
