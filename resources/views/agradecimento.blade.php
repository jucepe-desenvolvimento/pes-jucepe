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
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <a href="https://portal.jucepe.pe.gov.br/" class="navbar-brand ms-5"><img src="/img/_branding-main.png" alt="Junta Comercial do Estado de Pernambuco" style="width: 150px;"></a>
        </a>
        <h1 class="text-primary mt-4">Agradecemos pela sua avaliação!</h1>
        <a href="https://portal.jucepe.pe.gov.br/" class="btn btn-primary mt-3" style="background-color: #002c71; border-color: #002c71;">Voltar ao Início</a>
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
<html>