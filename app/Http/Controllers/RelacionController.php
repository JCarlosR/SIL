<?php

namespace App\Http\Controllers;

use App\Relacion;
use Illuminate\Http\Request;

use App\Http\Requests;

class RelacionController extends Controller
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
            'tipo' => 'required|in:interna,externa',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $relacion = Relacion::create([
            'cargo_id' => $request->get('cargo_id'),
            'tipo' => $request->get('tipo'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($relacion);
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
            'id' => 'required|exists:relaciones,id',
            'tipo' => 'required|in:interna,externa',
            'descripcion' => 'required|max:255|min:5'
        ]);

        $relacion = Relacion::find($request->get('id'));
        $relacion->tipo = $request->get('tipo');
        $relacion->descripcion = $request->get('descripcion');
        $relacion->save();

        return response()->json($relacion);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:relaciones'
        ]);

        $relacion = Relacion::find($request->get('id'));
        $relacion->delete();

        return response()->json($relacion);
    }
}
