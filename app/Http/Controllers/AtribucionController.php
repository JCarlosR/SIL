<?php

namespace App\Http\Controllers;

use App\Atribucion;
use Illuminate\Http\Request;

use App\Http\Requests;

class AtribucionController extends Controller
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

        $atribucion = Atribucion::create([
            'cargo_id' => $request->get('cargo_id'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($atribucion);
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
            'id' => 'required|exists:atribuciones,id',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $atribucion = Atribucion::find($request->get('id'));
        $atribucion->descripcion = $request->get('descripcion');
        $atribucion->save();

        return response()->json($atribucion);
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
            'id' => 'exists:atribuciones'
        ]);

        $atribucion = Atribucion::find($request->get('id'));
        $atribucion->delete();

        return response()->json($atribucion);
    }
}
