@extends('website.partials.base')

@section('content')

<div class="container-vaga d-flex justify-content-center">
    <div class="card card-vaga-especifica" >
        <img src="{{$vaga->logotipo_empresa}}" alt="" class="img-card-vaga-especifica align-self-center">
        <div class="card-body">
            <h5 class="card-title">{{$vaga->titulo}}</h5>
            <p class="card-text"><b>Empresa:</b> {{$vaga->nome_empresa}}</p>
            <p class="card-text"><b>Descrição:</b></p>
            <p class="card-text">{{$vaga->descricao}}</p>
            <hr>
            <p class="card-text"><b>Requisitos</b></p>
            <ul class="list-group list-group-flush">
                @foreach ($requisitos as $r) 
                    <li class="list-group-item">{{$r}}</li>
                @endforeach
            </ul>

            <br>

            <p class="card-text"><b>Benefícios</b></p>
            <ul class="list-group list-group-flush">
                @foreach ($beneficios as $b) 
                    <li class="list-group-item">{{$b}}</li>
                @endforeach
            </ul>

            <br>
            <p class="card-text"><b>Remuneração</b></p>
            <p class="card-text">{{$vaga->remuneracao}}</p>        

            @if ($vaga->outras_informacoes)
                <br>
                <p class="card-text"><b>Outras Informações</b></p>
                <p class="card-text">{{$vaga->outras_informacoes}}</p>            
            @endif

            <br>
            <p class="card-text"><b>Publicação da Vaga</b></p>
            <p class="card-text">{{$vaga->created_at->format('d/m/Y')}}</p>  
            

            <br>
            <a href="{{$vaga->link_candidatura}}" target="_blank" class="btn btn-hero">Ir para candidatura</a>
        </div>
      </div>
</div>

@stop