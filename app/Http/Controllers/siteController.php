<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Database\Eloquent\Model;
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
    public function personagens()
    {
        $personagens = Personagem::get();
        return view('selecao', compact('personagens'));

    }
    public function personagemShow($nome, $id)
    {
        $personagem = Personagem::where('id', $id)->first();
        //dd($personagem);
        return view('personagens.personagemShow', compact('personagem'));

    }


}
