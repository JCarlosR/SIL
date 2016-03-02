<?php

namespace App\Http\Controllers;

use App\Area;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AreaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRegister()
    {
        $areas = Area::all();
        return view('areas.registrar', [ 'areas' => $areas ]);
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:30',
            'responsable' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('area/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $area = new Area();
        $area->nombre = $request->nombre;
        $area->descripcion = $request->descripcion;
        $area->responsable = $request->responsable;

        $area->save();

        return redirect('area/registrar');
    }

    public function getEditar($id) {
        $area = Area::findOrFail($id);
        return view('areas.editar', [ 'area' => $area ]);
    }

    public function putEditar(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:30',
            'responsable' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('area/registrar')
                ->withInput()
                ->withErrors($validator);
        }

        $area = Area::findOrFail($id);

        $area->nombre = $request->nombre;
        $area->descripcion = $request->descripcion;
        $area->responsable = $request->responsable;

        $area->save();

        return redirect('area/registrar');
    }

    public function delete($id) {
        Area::findOrFail($id)->delete();
        return redirect('area/registrar');
    }

}
