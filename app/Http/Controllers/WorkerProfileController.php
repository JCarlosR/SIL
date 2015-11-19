<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Validator;

class WorkerProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $valores = Skill::where('type', 'Valor')->get();
        $v = 0;

        return view('perfil-trabajador.index')->with(compact(['valores', 'v']));
    }

    public function postSkill(Request $request)
    {
        $this->validate($request, [
            'tipo' => 'required|in:Valor,Habilidad,Conocimiento',
            'nombre' => 'required|unique:skills,name|max:55',
            'descripcion' => 'required|max:255|min:5'
        ]);

        // Luego hacer más complejo con ctrl de versiones para el perfil de trab

        $skill = Skill::create([
            'worker_profile_id' => 1,
            'type' => $request->get('tipo'),
            'name' => $request->get('nombre'),
            'description' => $request->get('descripcion')
        ]);

        return response()->json($skill);
    }

}
