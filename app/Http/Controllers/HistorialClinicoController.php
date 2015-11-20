<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HistorialClinicoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHistorial()
    {
        return view('historial.registrarHistorial');
    }
}
