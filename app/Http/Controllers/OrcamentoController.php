<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function salvarOrcamento(Request $request){
        $orcamento = new Orcamento();
        $orcamento->nome = $request->nome;
        $orcamento->email = $request->email;
        $orcamento->telefone = $request->telefone;
        $orcamento->descricao = $request->descricao;
        $orcamento->save();
        return redirect()->back()->with(['finalizacao' => 'Orcamento enviado com sucesso !']);
    }
}
