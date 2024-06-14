<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        
        $motivos = MotivoContato::all();
        return view('site.contato', ['motivos' => $motivos]);
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required', 
            'telefone' => 'required',
            'email' => 'email',
            'mensagem' => 'required',
            "motivo_contatos_id" => 'required'   
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}