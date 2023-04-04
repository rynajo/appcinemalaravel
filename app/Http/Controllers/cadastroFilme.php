<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\CadastroFilme;
 
class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nome_filme' => 'string|required',
            'atores_filme' => 'string|required',
            'dataLancamento_filme' => 'string|required',
            'sinopse_filme' => 'string|required',
            'capa_filme' => 'string|required'
        ]);

        cadastroFilme::create($dadosFilme);

        return Redirect::route('cadastro-filme');
    }

}
