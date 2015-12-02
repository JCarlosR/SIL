<?php

namespace App\Http\Controllers;

use App\Atribucion;
use App\Cargo;
use App\Funcion;
use App\MOF;
use App\Relacion;
use App\Requisito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Validator;

class MOFController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMOF()
    {
        $mof = MOF::first();
        return view('mof.mof')->with(compact(['mof']));
    }

    public function postMOF(Request $request)
    {
        $this->validate($request, [
            'finalidad' => 'required|min:5',
            'alcance' => 'required|min:5'
        ]);

        $MOF = MOF::firstOrCreate([ 'user_id' => Auth::user()->id ]);

        if (! $MOF)
            return view('mof.mof')->withErrors(['No se ha registrado ningún MOF.']);

        $MOF->finalidad = $request->get('finalidad');
        $MOF->alcance = $request->get('alcance');
        /*
        Usando Storage
        if ($request->hasFile('organigrama'))
        {
            // Si ya tenía un archivo asociado, lo eliminamos
            if ($MOF->organigrama)
                Storage::delete($MOF->organigrama);

            $archivo = $request->file('organigrama');
            $nombre = $archivo->getClientOriginalName();

            Storage::put($nombre,  File::get($archivo));
            $MOF->organigrama = $nombre;
        }
        */
        if ($request->hasFile('organigrama'))
        {
            // Eliminar el organigrama anterior
            if ($MOF->organigrama)
                File::delete(public_path() . '/images/' . $MOF->organigrama);

            $archivo = $request->file('organigrama');
            $nombre = $archivo->getClientOriginalName();

            $archivo->move(public_path() . '/images/', $nombre);
            $MOF->organigrama = $nombre;
        }

        $MOF->save();
        return redirect('MOF');
    }

    public function getOrganigrama()
    {
        $mof = MOF::first();
        if ($mof)
        {
            $contenido = File::get(public_path() . '/images/' . $mof->organigrama);
            $tipo_contenido = File::mimeType(public_path() . '/images/' . $mof->organigrama);

            $respuesta = response($contenido, 200);
            $respuesta->header('Content-Type', $tipo_contenido);

            return $respuesta;
        }

        // En realidad nunca debería de ocurrir, pero por si acaso
        return redirect('MOF');
    }

    public function getHTML()
    {
        $mof = MOF::find(1);

        // Si el organigrama es img, se incluye en el PDF
        $organigrama = $mof->organigrama_es_imagen;

        $c = 0;
        $cargos = Cargo::all();
        return view('mof.pdf', compact('c', 'cargos', 'mof', 'organigrama'));
    }

    public function getPDF()
    {
        $mof = MOF::find(1);
        $organigrama = $mof->organigrama_es_imagen;
        $c = 0;
        $cargos = Cargo::all();

        $vista =  view('mof.pdf', compact('c', 'cargos', 'mof', 'organigrama'))->render();
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();
    }

    public function getCargos()
    {
        $c = 0;
        $cargos = Cargo::all();
        return view('mof.cargos')->with(compact('cargos', 'c'));
    }

    public function postCargo(Request $request)
    {
        $this->validate($request, [
            'unidad' => 'required|min:5',
            'nombre' => 'required|unique:cargos|min:5',
            'funcion' => 'required|max:255|min:5'
        ]);

        $cargo = Cargo::create([
            'MOF_id' => 1,
            'unidad' => $request->get('unidad'),
            'nombre' => $request->get('nombre'),
            'funcion' => $request->get('funcion')
        ]);

        return response()->json($cargo);
    }

    public function getEditarCargo($id)
    {
        $cargo = Cargo::find($id);

        $rel = 0;
        $relaciones = Relacion::where('cargo_id', $id)->get();

        $atr = 0;
        $atribuciones = Atribucion::where('cargo_id', $id)->get();

        $fun = 0;
        $funciones = Funcion::where('cargo_id', $id)->get();

        $req = 0;
        $requisitos = Requisito::where('cargo_id', $id)->get();
        return view('mof.editar-cargo')->with(compact('cargo', 'rel', 'relaciones', 'atr', 'atribuciones', 'fun', 'funciones', 'req', 'requisitos'));
    }

    public function putEditarCargo($id, Request $request)
    {
        $this->validate($request, [
            'unidad' => 'required|min:5',
            'nombre' => 'required|unique:cargos,nombre,'.$id.',id|min:5',
            'funcion' => 'required|max:255|min:5'
        ]);

        $cargo = Cargo::find($id);
        $cargo->unidad = $request->get('unidad');
        $cargo->nombre = $request->get('nombre');
        $cargo->funcion = $request->get('funcion');
        $cargo->save();

        return redirect('MOF/cargos/'.$id)->withNotif('Los datos del cargo se han actualizado correctamente.');
    }
}
