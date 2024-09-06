<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/login.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

    {{-- Vue/vite --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>

    @auth
    <nav class="auth-menu">
        <div class="expand-btn">
            <h4>PES - JUCEPE</h4>
        </div>
        <ul>
            <li class="auth-item">
                <a href="#" class="auth-link">
                    <span class="auth-link-icon"><i class="bi bi-file-text"></i></span>
                    <span class="auth-link-text">Dashboard - Geral</span>
                </a>
            </li>
            <li class="auth-item">
                <a href="#" class="auth-link">
                    <span class="auth-link-icon"><i class="bi bi-file-earmark-medical"></i></span>
                    <span class="auth-link-text">Pesquisa Espontânea</span>
                </a>
            </li>
            <li class="auth-item">
                <a href="#" class="auth-link">
                    <span class="auth-link-icon"><i class="bi bi-body-text"></i></span>
                    <span class="auth-link-text">Pesquisa Serviços</span>
                </a>
            </li>
            <li class="auth-item">
                <a href="#" class="auth-link">
                    <span class="auth-link-icon"><i class="bi bi-check-lg"></i></span>
                    <span class="auth-link-text">Responder</span>
                </a>
            </li>
            <li class="auth-item">
                <a href="#" class="auth-link">
                    <span class="auth-link-icon"><i class="bi bi-person-bounding-box"></i></span>
                    <span class="auth-link-text">Meus Dados</span>
                </a>
            </li>
            <li class="auth-item">
                <a href="#" class="auth-link-icon" @click.prevent="logout">
                    <span class="auth-link-icon"><i class="bi bi-box-arrow-left"></i></span>
                    <span class="auth-link-text">Sair</span>
                </a>
            </li>   
        </ul>
    </nav>
    @endauth

    <main>
        <div class="main-login-container">
            @yield('content-login')
        </div>
        
        <div class="dash-container">
            @yield('dash-content')
        </div>
    </main>
    
    
    {{-- Icon Lib --}}
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
    {{-- Chart JS --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Script JS --}}
        <script src="/js/funcoes.js"></script>
        <script src="/js/graphics.js"></script>

</body>
</html>