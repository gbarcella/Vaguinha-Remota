<!DOCTYPE html>
<html lang="en">
<head>
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

    <div class="container-fluid">
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
                <a href="#">Sobre</a>
              </li>
              <li>
                <a href="#">Vagas</a>
              </li>
              <li>
                <a href="#">Publicar uma Vaga</a>
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
                <a href="#">Sobre</a>
              </li>
              <li>
                <a href="#">Vagas</a>
              </li>
              <li>
                <a href="#">Publicar uma Vaga</a>
              </li>
            </ul>
        </div>
        
    </div>


    {{-- Script Javascript Proprio --}}
    <script src="{{ asset('js/js-site.js') }}"></script>
    
    {{-- Script Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Script Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/37f085f6bc.js" crossorigin="anonymous"></script>
</body>
</html>