<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = "";
        if($request->get('erro') == 1) {
            $erro = "Usuário ou senha incorretos";
        }

        if($request->get('erro') == 2) {
            $erro = "É necessário estar logado para navegar";
        }
        return view('site.login', ['erro' => $erro]);
    }

    public function autenticar(Request $request)
    {

        $regras = [
            "usuario" => "email",
            "senha" => "required"
        ];

        $feedback = [
            'usuario.email' => 'o usuário deve ser um email válido',
            'senha' => "a senha deve ser preenchida"
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();

        $exist = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($exist->name)) {
            session_start();
            $_SESSION['nome'] = $exist->name;
            $_SESSION['email'] = $exist->email;
            return redirect()->route('app.fornecedores');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }

        print_r($request->all());
    }

    public function sair() {
        echo "sair";
    }
}
