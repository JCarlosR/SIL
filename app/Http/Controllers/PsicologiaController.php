<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class PsicologiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIngreso()
    {
        return view('psicologia.ingreso');
    }

}
