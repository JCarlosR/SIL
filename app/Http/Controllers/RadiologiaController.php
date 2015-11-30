<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RadiologiaController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('Radiologia.radiologia');
    }

    public function getHR()
    {
        return view('Radiologia.radiologiHC');
    }

    public function getEditarCargo($id)
    {
        return view('mof.editar-cargo');
    }

}
