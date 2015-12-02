<?php

namespace App\Http\Controllers;


use App\Cargo;
use App\ContratarRequisito;
use App\Funcion;
use App\Postulacion;
use App\Postulante;
use App\Solicitado;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
        return view('personal.convocatoria.convocatoria')->with(compact(['asignados','noAsignados']));
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
        return view('personal.convocatoria.requisitos')->with(compact(['cargo','requisitos']));
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

        return view('personal.seleccion.seleccion')->with(compact(['asignados']));
    }

    public function getSeleccionRequerimientos( $id )
    {

        $cargo = Cargo::find($id);
        $funciones = Funcion::where('cargo_id',$id)->get();
        $requisitos = ContratarRequisito::where('cargo_id',$id)->get();
        return view('personal.seleccion.requerimientos')->with(compact(['cargo','funciones','requisitos']));
    }

    public function getSeleccionPostulante($id)
    { //Debo tener el id cargo ?
        return view('personal.seleccion.postulante')->with(compact(['id']));;
    }

    public function postSeleccionRegistrarPostulante($id,Request $request )
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|min:3|max:50',
            'dni' => 'required | max:8',
            'email' => 'required|min:3|max:50',
            'telefono' => 'required|max:9',
            'direccion' => 'required|min:3|max:50'
        ]);

        if ($validator->fails()) {
            $data['errors'] = $validator->errors();
            return redirect('personal/seleccion/postulante')
                ->withInput($request->all())
                ->with($data);
        }
        $postulante = Postulante::create([
            'full_name' => $request->get('nombres'),
            'dni' =>$request->get('dni'),
            'email' =>$request->get('email'),
            'phone' =>$request->get('telefono'),
            'address' =>$request->get('direccion')
        ]);
        $dni = $request->get('dni');
        if($request->hasFile('cv') )
        {
            $file = $request->file('cv');

            // Ruta donde queremos guardar las imágenes para los proveedores
            $path = public_path().'/curriculums';

            // Guardar
            $sinEspacios = str_replace(' ', '', $postulante->dni.".".$file->getClientOriginalExtension());
            $simpleName = strtolower($sinEspacios);
            $fileName = $simpleName;
            $file->move($path , $fileName);

            $postulante->cVitae = $simpleName;
        }
        $postulante->save();

        $postulacion=Postulacion::create([
            'postulante_id'=>$postulante->id,
            'cargo_id' =>$id
        ]);
        $postulacion->save();

        return redirect('personal/registrar/postulante/.$id');
    }
}
