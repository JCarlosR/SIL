<?php

namespace App\Http\Controllers;


use App\Cargo;
use App\ContratarRequisito;
use App\Solicitado;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class PersonalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gestión de Cargos
    public function getCargosConvocatoria()
    {
        $solicitados = Solicitado::all();
        $asignados = [];
        $noAsignados = [];

        foreach($solicitados as $solicitado)
        {
            if($solicitado->estado == 1)
                $asignados[] = Cargo::find($solicitado->cargo_id);
            else
                $noAsignados[] = Cargo::find($solicitado->cargo_id);
        }
        return view('personal.convocatoria')->with(compact(['asignados','noAsignados']));
    }

    public function postCargosConvocatoria( Request $request )
    {
        $solicitado = Solicitado::find( $request->get('cargo_id') );
        $estado = $request->get('estado');

        $solicitado->estado = $estado;
        $solicitado->save();
        return ['exito'=>true];
    }

    //Gestión de requisitos
    public function getRequisitos( $id )
    {
        $requisitos = ContratarRequisito::where('cargo_id',$id)->get();
        $cargo = Cargo::find($id);
        return view('personal.requisitos')->with(compact(['cargo','requisitos']));
    }

    public function postRegistrarRequisitos( $id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|min:3|max:50'
        ]);

        if ($validator->fails()) {
            $data['errors'] = $validator->errors();
            return redirect('personal/requisitos/'.$id)
                ->withInput($request->all())
                ->with($data);
        }
        $requisito = ContratarRequisito::create([
            'cargo_id'    =>$id,
            'descripcion' => $request->get('descripcion')
        ]);

        $requisito->save();

        return redirect('personal/requisitos/'.$id);
    }

    public function postModificarRequisitos($id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|min:3|max:50'
        ]);

        if ($validator->fails()) {
            $data['errors'] = $validator->errors();
            return redirect('personal/requisitos/'.$id)
                ->withInput($request->all())
                ->with($data);
        }

        $requisito = ContratarRequisito::find($request->get('id'));
        $requisito->descripcion = $request->get('descripcion');
        $requisito->save();

        return redirect('personal/requisitos/'.$id);

    }

    public function postEliminarRequisitos($id,Request $request)
    {
        $requisito = ContratarRequisito::find($request->get('id'));
        $requisito->delete();
        return redirect('personal/requisitos/'.$id);
    }

    public function getCargosSeleccion()
    {
        $solicitados = Solicitado::all();
        $asignados = [];

        foreach($solicitados as $solicitado)
        {
            if($solicitado->estado == 1)
                $asignados[] = Cargo::find($solicitado->cargo_id);
        }
        return view('personal.seleccion')->with(compact(['asignados']));
    }

}
