<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaboratorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('Laboratorio.LaboratorioHDR');
    }

    public function getHC()
    {
        return view('Laboratorio.LaboratorioHC');
    }

    public function getEditarCargo($id)
    {
        return view('mof.editar-cargo');
    }
}
