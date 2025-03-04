<?php

namespace App\Http\Controllers;

use App\Models\Meiaquadra;
use App\Models\Personagem;
use Illuminate\Http\Request;


class inscricaoController extends Controller
{
    public function inscrever(Request $request, $userid)
    {
        //dd($request);
        Meiaquadra::create([
            'usuario_id' => $userid,
            'personagem1_id' => $request['qualquercoisa'],
        ]);
        return redirect()->route('site.index');
    }
    public function index()
    {
        $personagens = Personagem::get();
        return view('inscricaoTorneio', compact('personagens'));
    }
}
