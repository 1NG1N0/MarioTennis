<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function store(Request $request)
    {
        $validate = $request->validate([
            'fulano' => 'required|string|max:255',
            'hotmail' => 'required|email|unique:users,email',
            'telemovel' => 'required|string',
            'senha' => 'required|string|min:6'
        ],[
            'fulano.required' => 'Vc não é indigente e tem nome, escreva essa merda',
            'hotmail.required' => 'Faça direito, vc não é um inultil q nao tem email, escreva logo',
            'telemovel.required' => 'vamos clonar seu chip',
            'senha.required' => 'tu vai entrar como, sem senha?',
            'senha.min' => 'bote algo que seja palatavel, nunca vi uma senha de 5 digito, nao e pin essa porra'
        ]);
        $user['name'] = $validate['fulano'];
        $user['email'] = $validate['hotmail'];
        $user['telefone'] = $validate['telemovel'];
        $user['password'] = $validate['senha'];

        $novousuario = User::create($user);
        Auth::login($novousuario);
        return redirect()->route('site.index');

    }
    public function login(Request $request){
        $validate = $request->validate([
            'hotmail' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:6'
        ],[
            'hotmail.required' => 'Faça direito, vc não é um inultil q nao tem email, escreva logo',
            'senha.required' => 'tu vai entrar como, sem senha?',
            'senha.min' => 'bote algo que seja palatavel, nunca vi uma senha de 5 digito, nao e pin essa porra'
        ]);
        $catapimbas = User::where('email', $validate['hotmail'])->firstOrFail();

        Auth::login($catapimbas);
        return redirect()->route('site.index');
    }
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
