<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConsultoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('Consultoria.consultoria');
    }

    public function getHCl()
    {
        return view('Consultoria.consultoriaRegistrar');
    }

    public function getEditarCargo($id)
    {
        return view('mof.editar-cargo');
    }
}
