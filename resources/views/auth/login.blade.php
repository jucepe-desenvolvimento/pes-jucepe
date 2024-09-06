@extends('layouts.mainlogin')

@section('title', 'Acesso - PES')

@section('content-login')

    <div class="login-body-container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="login-container">
                <div class="header-login">
                    <h1>
                        Bem<br>
                        Vindo!                
                    </h1>
                    <hr>
                    <p>Pesquisa e Satisfação da Jucepe</p>
                </div>
                    <div class="input-container">
                        <div class="access-pes">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" placeholder="Insira seu e-mail" required autofocus autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>            
                        </div>
                        <div class="access-pes">
                            <label for="email">Senha:</label>
                            <input type="password" name="password" id="password" placeholder="Insira sua senha" required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />            
                        </div>
                        <div class="rembember-container">
                            <input type="checkbox" name="remember" id="remember-me">
                            <span class="remember-check">Lembre de mim</span>
                        </div> 
                        <div class="button-pes">
                            <button type="submit">Entrar</button>
    
                            @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Esqueci minha senha</a>
                            @endif
                        </div>
                        <div class="login-logo">
                            <a href="http://10.10.10.42:8090/">
                                <img src="/img/_branding-main.png" alt="Pesquisa e Satisfação da Jucepe">
                            </a>
                        </div>
                    </div>
            </div>
        </form>
    </div>

@endsection