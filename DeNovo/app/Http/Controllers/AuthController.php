<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // ação 
    // retornar o formulário de login para usuário
    public function create () {
        return view('auth.login');
    }

    public function store (Request $request){
        $nome = $request->post('nome');
        $senha = $request->post('senha');

        if($nome == 'Pedro' && $senha == '123'){
            return redirect(url('/dashboard', ['usuario'=>$nome]));
        } else {
            return back()->withInput();
        }
    
        return $nome . ' ' . $senha;
    }

    
}
