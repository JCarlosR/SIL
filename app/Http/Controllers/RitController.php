<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Capitulo;
use App\Empresa;
use App\Item;
use App\Rit;
use App\Titulo;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $rit = Rit::find(1);
        return view('rit.rit')->with(compact(['rit']));
    }

    public function putRit(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:rits',
            'objeto' => 'required|min:5',
            'alcance' => 'required|min:5'
        ]);

        $rit = Rit::find($request->get('id'));
        $rit->objeto = $request->get('objeto');
        $rit->alcance = $request->get('alcance');
        $rit->save();
        return response()->json($rit);
    }

    public function getTitulos()
    {
        $titulos = Titulo::All();
        return view('rit.titulo')->with(compact(['titulos']));
    }

    public function getCapitulos($id)
    {
        $capitulos = Capitulo::where('titulo_id',$id)->get();
        return view('rit.capitulo')->with(compact(['capitulos','id']));
    }

    public function getArticulos($id)
    {
        $articulos = Articulo::where('capitulo_id',$id)->get();
        return view('rit.articulo')->with(compact(['articulos','id']));
    }

    public function getItems($id)
    {
        $items = Item::where('articulo_id',$id)->get();
        return view('rit.item')->with(compact(['items','id']));
    }

    public function putTitulo(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:titulos',
            'nombre' => 'required|min:2'
        ]);

        $titulo = Titulo::find($request->get('id'));
        $titulo->nombre = $request->get('nombre');
        $titulo->save();
        return response()->json($titulo);
    }

    public function putCapitulo(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:capitulos',
            'descripcion' => 'required|min:2'
        ]);

        $capitulo = Capitulo::find($request->get('id'));
        $capitulo->descripcion = $request->get('descripcion');
        $capitulo->save();
        return response()->json($capitulo);
    }

    public function putArticulo(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:articulos',
            'descripcion' => 'required|min:5'
        ]);

        $articulo = Articulo::find($request->get('id'));
        $articulo->descripcion = $request->get('descripcion');
        $articulo->save();
        return response()->json($articulo);
    }

    public function putItem(Request $request)
    {
        $this->validate($request, [
            'id' => 'exists:items',
            'descripcion' => 'required|min:5'
        ]);

        $item = Item::find($request->get('id'));
        $item->descripcion = $request->get('descripcion');
        $item->save();
        return response()->json($item);
    }

    public function postTitulo(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:2'
        ]);

        // Luego hacer más complejo con ctrl de versiones para el perfil de trab

        $titulo = Titulo::create([
            'rit_id' => 1,
            'nombre' => $request->get('nombre')
        ]);

        return response()->json($titulo);
    }

    public function postCapitulo(Request $request)
    {
        $this->validate($request, [
            'romano' => 'required|max:4',
            'descripcion' => 'required|min:2'
        ]);


        $capitulo = Capitulo::create([
            'titulo_id' => $request->get('id'),
            'romano' => $request->get('romano'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($capitulo);
    }

    public function postArticulo(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required|min:3'
        ]);


        $articulo = Articulo::create([
            'capitulo_id' => $request->get('id'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($articulo);
    }

    public function postItem(Request $request)
    {
        $this->validate($request, [
            'romano' => 'required|max:4',
            'descripcion' => 'required|min:3'
        ]);


        $item = Item::create([
            'articulo_id' => $request->get('id'),
            'romano' => $request->get('romano'),
            'descripcion' => $request->get('descripcion')
        ]);

        return response()->json($item);
    }

    public function getPrevisualizar(){
        $rit = Rit::find(1);
        $titulos = Titulo::All();
        $capitulos = Capitulo::All();
        $articulos = Articulo::All();
        $items = Item::All();
        $vista =  view('rit.pdf', compact('rit','titulos','capitulos','articulos','items'))->render();
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();
    }

}
