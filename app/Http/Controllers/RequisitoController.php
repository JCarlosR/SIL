<?php

namespace App\Http\Controllers;

use App\Requisito;
use Illuminate\Http\Request;

use App\Http\Requests;

class RequisitoController extends Controller
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
            'nombre' => 'required|max:50|min:5',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $requisito = Requisito::create([
            'cargo_id' => $request->get('cargo_id'),
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($requisito);
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
            'id' => 'required|exists:requisitos,id',
            'nombre' => 'required|max:50|min:5',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $requisito = Requisito::find($request->get('id'));
        $requisito->nombre = $request->get('nombre');
        $requisito->descripcion = $request->get('descripcion');
        $requisito->save();

        return response()->json($requisito);
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
            'id' => 'exists:requisitos'
        ]);

        $requisito = Requisito::find($request->get('id'));
        $requisito->delete();

        return response()->json($requisito);
    }
}
