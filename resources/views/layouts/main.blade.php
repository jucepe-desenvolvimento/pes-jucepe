<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('img/pngwing.com2.png') }}" type="image/x-icon">
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    {{-- CSS Pesquisa --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pesquisaesp.css') }}">

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    

</head>
<body>

<div id="loader">
    <img src="{{ asset('img/ju.png') }}" alt="Loading..." class="loading-img" style="width: 250px; height: auto;">
    <div class="progress">
        <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>

<header class="header-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="logo">
         <a href="/">
        <img src="{{ asset('img/_branding-main.png') }}" alt="Logo">
    </a>
</div>

            </div>
            <div class="col-md-6">
                <nav class="top-nav text-right d-none d-md-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.jucepe.pe.gov.br/">A JUCEPE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.jucepe.pe.gov.br/sobre#!">INSTITUCIONAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.jucepe.pe.gov.br/ouvidoria/sobre">OUVIDORIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.jucepe.pe.gov.br/arquivos/lgpd">LGPD</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<header class="header-secondary" style="background-color: #005B99; color: #003366;">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-start" id="navbarMenu">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link text-blue " href="/">INÍCIO</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-blue " href="{{ url('/dashboard') }}">ACESSO SISTEMA INTERNO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue " href="/sobre">SOBRE A PESQUISA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="http://chamados.jucepe.pe.gov.br/helpdesk/">FALE CONOSCO</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
        {{-- Página da pesquisa --}}

        <main>
            <div class="pesquisa-container">
                @yield ('content')
            <div>
        </main>

        {{-- ------------------ --}}

<footer class="footer">
    <div class="container">
        <p>Junta Comercial do Estado de Pernambuco - © {{ date('Y') }}</p>
    </div>
</footer>

<script>
    document.onreadystatechange = function () {
        var state = document.readyState;
        if (state == 'loading') {
            document.getElementById('progress-bar').style.width = '0%'; 
        } else if (state == 'interactive') {
            document.getElementById('progress-bar').style.width = '5%'; 
        } else if (state == 'complete') {
            setTimeout(function(){
                document.getElementById('progress-bar').style.width = '100%';
                setTimeout(function() {
                    document.getElementById('loader').style.opacity = '0';
                    document.getElementById('loader').style.pointerEvents = 'none';
                }, 1000); 
            }, 1000); 
        }
    };
</script>

{{-- Scripts --}}
<script src="/js/pesquisasatisf.js"></script>
<script src="/js/funcoes.js"></script>

</body>
</html>
