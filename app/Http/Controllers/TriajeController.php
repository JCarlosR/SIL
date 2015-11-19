<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class TriajeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getTriaje()
    {
        return view('triaje.registrarTriaje');
    }

    public function postListadoPacientes(Request $request)
    {

        return view('triaje.registrarTriaje');
    }
}
