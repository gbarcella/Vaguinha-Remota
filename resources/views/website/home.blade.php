@extends('website.partials.base')

@section('content')


<div class="px-4 pt-5 my-5 text-center border-bottom hero-section">
    <h1 class="display-4 fw-bold">Seja bem-vindo (a)!</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Aqui no Vaguinha Remota você vai encontrar o emprego dos sonhos, lhe permitindo trabalhar no conforto de casa, trazendo qualidade e saúde para a sua vida! </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="{{ route('vagas') }}"><button type="button" class="btn btn-hero btn-lg px-4 me-sm-3">Buscar Vagas!</button></a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="{{asset('img/site/hero-home-office-desktop.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4 img-hero-section-desktop" alt="Imagem Hero Section" width="700" height="500" loading="lazy">
        <img src="{{asset('img/site/hero-home-office-mobile.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4 img-hero-section-mobile" alt="Imagem Hero Section" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <h2 class="text-center texto-roxo">
    Últimas Vagas Publicadas
  </h2>

  <br>

  <div class="home-div-vagas">
    <div class="row">
      @foreach ($ultimasVagas as $vaga)
        <div class="col">
          <div class="home-div-box-vaga d-flex flex-column">
            <div class="home-div-logotipo-empresa-mais-titulo d-flex justify-content-start align-items-center">
              <img src="{{ $vaga->logotipo_empresa }}" alt="" class="home-logotipo-empresa img-responsive align-self-center">
              &nbsp;&nbsp;
              <a href="/vagas/{{$vaga->id}}"><p class="home-titulo-vaga texto-roxo align-self-center">{{ $vaga->titulo }}</p></a>
            </div>
      <hr>
            <div class="home-div-info-texto">
              <p class="home-empresa-vaga"><i class="fa-regular fa-building"></i> <b class="texto-roxo">Empresa:</b> {{ $vaga->nome_empresa }}</p>
              <p class="home-empresa-remuneracao"><i class="fa-solid fa-dollar-sign"></i> <b class="texto-roxo">Remuneração:</b> {{ $vaga->remuneracao }}</p>
              <p class="home-data-criacao-vaga"><i class="fa-regular fa-clock"></i> <b class="texto-roxo">Publicação:</b> {{ $vaga->created_at->format('d/m/Y') }}</p>
            </div>
      
            <div class="home-div-botao-saiba-mais-vaga">
              <a href="{{ route('vaga', ['id' => $vaga->id]) }}"><button class="btn btn-hero">Saiba Mais</button></a>
            </div>
          </div>
        </div>
      @endforeach

    </div>

  </div>

  <br>
  <br>

@stop
