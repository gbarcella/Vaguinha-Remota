<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M6KWQZFJ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Encontre a sua vaga remota</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/site/favicon.png') }}">

    {{-- Bootstrap 5.0.2 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- CSS Próprio --}}
    <link rel="stylesheet" href="{{ asset('css/css-site.css') }}">

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6KWQZFJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <div class="top-nav d-flex justify-content-around align-items-center">
      <div class="top-nav-div-email">
          <a href="mailto:vaguinharemota@gmail.com"><i class="fa-regular fa-envelope"></i> vaguinharemota@gmail.com</a>
      </div>

      <div class="top-nav-div-redes-sociais d-flex" >
          <a href="http://instagram.com/vaguinharemota" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
          &nbsp;
          <a href="http://facebook.com/vaguinharemota" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-facebook"></i></a>
      </div>
  </div>

  <nav>
      <div class="logo">
        <a href="{{ route('/')}}"><img src="{{asset('img/site/logotipo-navbar.png')}}" alt="logo" /></a>
      </div>

      <ul>
        <li>
          <a href="{{ route('/')}}">Home</a>
        </li>
        <li>
          <a href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li>
          <a href="{{ route('vagas') }}">Vagas</a>
        </li>
        <li>
          <a href="{{ route('publicar-vaga' )}}">Publicar uma Vaga</a>
        </li>
      </ul>

      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>

    </nav>

  <div class="menubar">
      <ul>
        <li>
          <a href="{{ route('/')}}">Home</a>
        </li>
        <li>
          <a href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li>
          <a href="{{ route('vagas') }}">Vagas</a>
        </li>
        <li>
          <a href="{{ route('publicar-vaga' )}}">Publicar uma Vaga</a>
        </li>
      </ul>
  </div>
   

  <div class="container">
    @yield('content')
  </div>
    
  <footer class="py-3 my-4 footer">
    <ul class="nav justify-content-center pb-3 mb-3">
      <li class="nav-item"><a href="{{ route('/')}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route('sobre') }}" class="nav-link px-2 text-muted">Sobre</a></li>
      <li class="nav-item"><a href="{{ route('vagas') }}" class="nav-link px-2 text-muted">Vagas</a></li>
      <li class="nav-item"><a href="{{ route('publicar-vaga' )}}" class="nav-link px-2 text-muted">Publicar uma Vaga</a></li>
    </ul>
    <p class="text-center text-muted">© 2024 - Todos os direitos reservados!</p>
  </footer>

  {{-- Script Javascript JQuery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- Script Javascript Proprio --}}
  <script src="{{ asset('js/js-site.js') }}"></script>

  {{-- Script Bootstrap 5 --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  {{-- Script Font Awesome Icons --}}
  <script src="https://kit.fontawesome.com/37f085f6bc.js" crossorigin="anonymous"></script>
</body>
</html>

    