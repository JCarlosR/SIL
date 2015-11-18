<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class MOFController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('mof.mof');
    }

    public function getCargos()
    {
        return view('mof.cargos');
    }

    public function getEditarCargo($id)
    {
        return view('mof.editar-cargo');
    }
}
