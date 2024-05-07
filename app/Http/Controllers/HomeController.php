<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Vaga;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $ultimasVagas = Vaga::orderBy('created_at', 'desc')->where('ativo', 1)->take(4)->get();

        return view('website.home', compact('ultimasVagas'));
    }

    public function sobre() {

        return view('website.sobre');
    }

    public function vagas() {

        return view('website.vagas');
    }

    public function publicarVaga() {

        $categorias = Categoria::all();

        return view('website.publicar-vaga', compact('categorias'));
    }

    public function cadastrarVaga(Request $request) {

        $dataAtual = new DateTime();
        $dataAtualMais30Dias = $dataAtual->modify('+30 days');
        
        $vaga = new Vaga;

        $vaga->titulo = $request->titulo;
        $vaga->categoria_id = $request->categoria_id;
        $vaga->remuneracao = $request->remuneracao;
        $vaga->descricao = $request->descricao;
        $vaga->requisitos = serialize($request->requisitos);
        $vaga->beneficios = serialize($request->beneficios);
        $vaga->link_candidatura = $request->link_candidatura;
        $vaga->outras_informacoes = $request->outras_informacoes;
        $vaga->nome_empresa = $request->nome_empresa;
        $vaga->logotipo_empresa = $request->logotipo_empresa;
        $vaga->ativo = 0;
        $vaga->data_expiracao = $dataAtualMais30Dias;

        $vaga->save();

        return view('website.obrigado-por-publicar');
    }
}
