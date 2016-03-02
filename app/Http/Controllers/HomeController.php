<?php

namespace App\Http\Controllers;

use App\Queja;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPanel()
    {
        return view('welcome');
    }

    public function getQuejas()
    {
        $quejas = Queja::where('estado', 'Pendiente')->get();
        $q = 0;
        return view('queja.listar')->with(compact(['quejas', 'q']));
    }
}
