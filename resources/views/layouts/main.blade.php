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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    {{-- CSS Pesquisa --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/pesquisaesp.css') }}"> --}}

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    

</head>
<body>

    <div id="loader">
        <img src="{{ asset('img/ju.png') }}" alt="Loading..." class="loading-img" style="width: 250px; height: auto;">
        <div class="progress">
            <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <header> 
        <div class="navbar navbar-expand-lg mb-1">
            <div class="container-fluid">
                <a href="/" class="navbar-brand ms-5"><img src="/img/_branding-main.png" alt="Junta Comercial do Estado de Pernambuco" style="width: 120px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pes-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="pes-navbar">
                    <ul class="navbar-nav ms-auto" style="padding: 0 !important;">
                        <li class="nav-item">
                            <a href="https://portal.jucepe.pe.gov.br/" class="nav-link">A JUCEPE</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://portal.jucepe.pe.gov.br/arquivos/lgpd" class="nav-link">LGPD</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://portal.jucepe.pe.gov.br/sobre#!" class="nav-link">Institucional</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://portal.jucepe.pe.gov.br/ouvidoria/sobre" class="nav-link">Ouvidoria</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/sobre') }}" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary ms-2">Acesso Interno</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="menu-lateral col-md-2 col-sm-2 shadow rounded-top">
                    <div class="container">
                        <div class="row">
                                <ul>
                                    <li class="side-nav-item">
                                        <a href="#atendimento-online" class="side-nav-link"><i class="bi bi-person-workspace"></i>{{ Route::is('pesquisa.create') ? 'Atendimento Online' : 'Satisfação com o Serviço' }}</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="#atendimento-presencial" class="side-nav-link"><i class="bi bi-geo-fill"></i>{{ Route::is('pesquisa.create') ? 'Atendimento Presencial' : 'Facilidade de Uso' }}</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="#processos-servicos" class="side-nav-link"><i class="bi bi-person-fill-gear"></i>{{ Route::is('pesquisa.create') ? 'Processos e Serviços' : 'Expectativas' }}</a>
                                    </li>
                                    @if(Route::is('pesquisaservicos.create'))
                                    <li class="side-nav-item">
                                        <a href="#avaliacao-geral" class="side-nav-link"><i class="bi bi-award-fill"></i>Recomendação</a>
                                    </li>
                                    @endif
                                    <li class="side-nav-item">
                                        <a href="#avaliacao-geral" class="side-nav-link"><i class="bi bi-journal-check"></i>Avaliação Geral</a>
                                    </li>
                                    <li class="side-nav-item" id="link-dados">
                                        <a href="#sugestoes" class="side-nav-link" id="link-identificacao"><i class="bi bi-pencil-square"></i>Sugestões e/ou Reclamações</a>
                                    </li>
                                    <li class="side-nav-item" id="link-dados">
                                        <a href="#identificacao" class="side-nav-link" id="link-identificacao"><i class="bi bi-person-plus-fill"></i>Identificação</a>
                                    </li>
                                </ul>                
                        </div>
                    </div>
            </div>
            <div class="col-md-10 ms-auto">
                {{-- Página da pesquisa --}}
                <main>
                    <div class="main-container shadow-sm border rounded overflow-auto">
                        @yield ('content')
                    <div>
                </main>
                {{-- <footer class="container text-center footer">
                        <p>Junta Comercial do Estado de Pernambuco - © {{ date('Y') }}</p>
                </footer> --}}
            </div>
        </div>
    </div>

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
<script src="/js/funcoes.js"></script>

</body>
</html>
