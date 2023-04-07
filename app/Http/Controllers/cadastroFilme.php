<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    } 

    public function CadastrarFilme(Request $request){
        $dadosFilmes = $request->validate(
            [
            'nomeFilme' => 'string|required',
            'atoresFilme' => 'string|required',
            'dataLancamentoFilme' => 'string|required',
            'sinopseFilme' => 'string|required',   
            'capaFilme' => 'string|required',   
            
        ]
    );
    Filme::create($dadosFilmes);
    return Redirect::route('cadastro-filme');
    }
}
