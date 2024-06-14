<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {

        $motivos = MotivoContato::all();
        return view('site.contato', ['motivos' => $motivos]);
    }

    public function salvar(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'mensagem' => 'required',
                "motivo_contatos_id" => 'required'
            ],
            [
                'email.email' => 'O email precisa ser válido',
                'required' => 'Esse campo precisa ser preenchido',
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
