<?php

namespace App\Http\Controllers;

use App\Funcion;
use Illuminate\Http\Request;

use App\Http\Requests;

class FuncionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cargo_id' => 'required|exists:cargos,id',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $funcion = Funcion::create([
            'cargo_id' => $request->get('cargo_id'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($funcion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:funciones,id',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $funcion = Funcion::find($request->get('id'));
        $funcion->descripcion = $request->get('descripcion');
        $funcion->save();

        return response()->json($funcion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:funciones'
        ]);

        $funcion = Funcion::find($request->get('id'));
        $funcion->delete();

        return response()->json($funcion);
    }
}
