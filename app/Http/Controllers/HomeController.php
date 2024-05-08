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

        $categorias = Categoria::all();
        $vagas = Vaga::orderBy('created_at', 'desc')->where('ativo', 1)->paginate(10);

        return view('website.vagas', compact('categorias', 'vagas'));
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
        if($request->outras_informacoes) {
            $vaga->outras_informacoes = $request->outras_informacoes;
        } else {
            $vaga->outras_informacoes = "";
        }
        $vaga->nome_empresa = $request->nome_empresa;
        $vaga->ativo = 0;
        $vaga->data_expiracao = $dataAtualMais30Dias;

        if($request->logotipo_empresa) {
            $vaga->logotipo_empresa = $request->logotipo_empresa;
        } else {
            $vaga->logotipo_empresa = 'https://images.tcdn.com.br/img/img_prod/840618/livre_teste_95_1_885fa8156198b5e059f20c92b095ecfc.jpg';
        }

        $vaga->save();

        return view('website.obrigado-por-publicar');
    }

    public function buscarVaga(Request $request) {

        $categorias = Categoria::all();

        $categoria = '';
        $texto = '';

        if($request->input('categoria')){
            $categoria = (int)$request->input('categoria');
        }

        if($request->input('texto')){
            $texto = $request->input('texto');
        }

        if($categoria && $texto) {

            $vagas = Vaga::where('ativo', 1)
                            ->where('categoria_id', $categoria)
                            ->where(function ($query) use ($texto) {
                                $query->where('nome_empresa', 'LIKE', '%' . $texto . '%')
                                    ->orWhere('titulo', 'LIKE', '%' . $texto . '%');
                            })->paginate(10)->appends(['categoria' => $categoria, 'texto' => $texto]);;

        } else if($categoria && !$texto) {

            $vagas = Vaga::where('ativo', 1)
                            ->where('categoria_id', $categoria)
                            ->paginate(10)->appends(['categoria' => $categoria]);

        } else if(!$categoria && $texto) {

            $vagas = Vaga::where('ativo', 1)
                            ->where(function ($query) use ($texto) {
                                $query->where('nome_empresa', 'LIKE', '%' . $texto . '%')
                                    ->orWhere('titulo', 'LIKE', '%' . $texto . '%');
                            })->paginate(10)->appends(['texto' => $texto]);

        } else {
            return redirect('/vagas');
        }

        return view('website.vagas', compact('vagas', 'categorias'));
    }

    public function buscarVagaPorId(Request $request) {
    
        $vaga = Vaga::find($request->id);

        $requisitos = unserialize($vaga->requisitos);
        $beneficios = unserialize($vaga->beneficios);
        
        
        return view('website.vaga', compact('vaga', 'requisitos', 'beneficios'));
    }
}
