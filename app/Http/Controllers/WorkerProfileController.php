<?php

namespace App\Http\Controllers;

use App\Skill;
use Barryvdh\DomPDF\PDF;
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
        $v = 0;
        $valores = Skill::where('type', 'Valor')->get();

        $h = 0;
        $habilidades = Skill::where('type', 'Habilidad')->get();

        $c = 0;
        $conocimientos = Skill::where('type', 'Conocimiento')->get();

        return view('perfil-trabajador.index')->with(compact(['valores', 'v', 'habilidades', 'h', 'conocimientos', 'c']));
    }

    public function getHTML()
    {
        $valores = Skill::where('type', 'Valor')->get();
        $habilidades = Skill::where('type', 'Habilidad')->get();
        $conocimientos = Skill::where('type', 'Conocimiento')->get();

        return view('perfil-trabajador.pdf', compact('valores', 'habilidades', 'conocimientos'));
    }

    public function getPDF()
    {
        $valores = Skill::where('type', 'Valor')->get();
        $habilidades = Skill::where('type', 'Habilidad')->get();
        $conocimientos = Skill::where('type', 'Conocimiento')->get();

        $vista =  view('perfil-trabajador.pdf', compact('valores', 'habilidades', 'conocimientos'))->render();
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();

        // return $pdf->download();
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

    public function putSkill(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:skills',
            'name' => 'required|max:55|unique:skills,name,'.$request->get('id').',id',
            'description' => 'required|max:255|min:5'
        ]);

        $skill = Skill::find($request->get('id'));
        $skill->name = $request->get('name');
        $skill->description = $request->get('description');
        $skill->save();

        return response()->json($skill);
    }

    public function deleteSkill(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:skills'
        ]);

        $skill = Skill::find($request->get('id'));
        $skill->delete();

        return response()->json($skill);
    }

}
