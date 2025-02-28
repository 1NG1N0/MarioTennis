<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function regras()
    {
        return view('regras');
    }
    public function inscricao()
    {
        return view('vesedaceerto.login');
    }
    public function registro()
    {
        return view('vesedaceerto.registro');
    }

}
