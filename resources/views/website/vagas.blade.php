@extends('website.partials.base')

@section('content')

<div class="container-vagas">
    <div class="container-filtros">
        <form action="{{ route('buscar-vaga') }}" method="get">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
                    <select class="form-control" name="categoria" id="categoria">
                        <option selected disabled>Selecione uma categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
                    <input type="text" class="form-control input-pesquisa-vaga-titulo-nome-empresa" name="texto" placeholder="Pesquise por nome da vaga ou nome da empresa">
                </div>

                <div class="col-lg-2 col-md-12 col-xs-12 col-sm-12">
                    <button type="submit" class="btn btn-hero btn-pesquisar-vaga" style="width: 100%">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>

    <br>

    
    <div class="row">

        @foreach ($vagas as $vaga)
            <div class="col-md-12 col-lg-6">
                <div class="card mb-3 card-vaga">
                    <div class="row g-0">
                        <div class="col-md-4" >
                            <img src="{{ $vaga->logotipo_empresa }}" style="height: 100% !important" class="img-fluid rounded-start" alt="Logotipo da Empresa">
                        </div>
                        
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $vaga->titulo }}</h5>
                                <p class="card-text">Empresa: {{ $vaga->nome_empresa }}</p>
                                <p class="card-text">Remuneração: {{ $vaga->remuneracao }}</p>
                                <p class="card-text">Publicação: {{ $vaga->created_at->format('d/m/Y') }}</p>
                                <a href="{{ route('vaga', ['id' => $vaga->id]) }}" class="btn btn-hero" style="width: 100%">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $vagas->links() }}

    </div>


</div>

@stop