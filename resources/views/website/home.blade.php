@extends('website.partials.base')

@section('content')


<div class="px-4 pt-5 my-5 text-center border-bottom hero-section">
    <h1 class="display-4 fw-bold">Seja bem-vindo (a)!</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Aqui no Vaguinha Remota você vai encontrar o emprego dos sonhos, lhe permitindo trabalhar no conforto de casa e trazendo qualidade e saúde para a sua vida! </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-hero btn-lg px-4 me-sm-3">Buscar Vagas!</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="{{asset('img/site/hero-home-office-desktop.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4 img-hero-section-desktop" alt="Imagem Hero Section" width="700" height="500" loading="lazy">
        <img src="{{asset('img/site/hero-home-office-mobile.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4 img-hero-section-mobile" alt="Imagem Hero Section" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

@stop
