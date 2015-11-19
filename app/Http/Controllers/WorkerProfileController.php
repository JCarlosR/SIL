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
            'type' => 'required|in:Valor,Habilidad,Conocimiento',
            'name' => 'required|unique:skills|max:55',
            'description' => 'required|max:255|min:5'
        ]);
    }

}
