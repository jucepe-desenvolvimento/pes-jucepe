@extends('layouts.main')

@section('title', 'Pesquisa de Satisfação da JUCEPE')

@section('content')

@if(session('mnsg'))
<script>
    alert('{{ session('
        mnsg ') }}')
</script>
@endif

<h1>Avaliação dos Serviços da JUCEPE</h1>

<div class="timeline">
    <div class="step-indicator" id="stepIndicator1">
        <div class="circle active">✓</div>
        <div class="label">Identificação</div>
    </div>
    <div class="step-indicator" id="stepIndicator2">
        <div class="circle">2</div>
        <div class="label">Processos e Serviços</div>
    </div>
    <!-- <div class="step-indicator" id="stepIndicator3">
        <div class="circle">3</div>
        <div class="label">Avaliação Geral</div>
    </div> -->
    <div class="step-indicator" id="stepIndicator4">
        <div class="circle">3</div>
        <div class="label">Sugestões</div>
    </div>
    <div class="step-indicator" id="stepIndicator5">
        <div class="circle">4</div>
        <div class="label">Finalizar</div>
    </div>
</div>

<div class="container-2">
    <form id="surveyForm" action="/pesquisaservicos" method="POST">
        @csrf
        <!-- Captura dos dados -->
        <div id="step1" class="step active">

            {{-- Seleção de serviços --}}
            <label for="servicos">Selecione um serviço:</label>
            <select name="servicos" id="servicos" class="form-select mb-3" autofocus required>
                <option value=""></option>
                <option value="aberturaEmpresa">Abertura de Empresa</option>
                <option value="alteracaoEmpresa">Alteração de Empresa</option>
                <option value="baixaEmpresa">Baixa de Empresa</option>
                <option value="atendimentoOnline">Atendimento Online</option>
                <option value="certidaoInternet">Certidão Internet</option>
                <option value="compraDados">Compra de Dados Cadastrais</option>
                <option value="geradorDocumentos">Gerador de Documentos</option>
                <option value="integradorEstadual">Integrador Estadual</option>
                <option value="livrosDigitais">Livros Digitais</option>
                <option value="registrarBalanco">Registrar Balanço</option>
                <option value="restituicaoTaxa">Restituição de Taxa</option>
                <option value="traducao">Tradução</option>
                <option value="transformacao">Transformação</option>
                <option value="balcaoUnico">Balcão Único</option>
            </select>

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" required><br>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-check mt-4">
                <input type="checkbox" id="lgpdConsent" name="lgpdConsent" class="form-check-input" required>
                <label for="lgpdConsent" class="form-check-label">Estou ciente que meus dados serão tratados conforme LGPD.</label>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="anonymous" name="anonymous" onchange="respostaAnonima()">
                <label for="anonymous">Desejo manter as respostas anônimas.</label>
            </div>


            @error('lgpdConsent')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="button" class="next" onclick="nextStep(1)">Próxima</button>

        </div>

        <!-- Satisfação com o serviço -->

        <div id="step2" class="step">

            <div class="content">
                <div class="row">
                    <div class="aval-container col-md-12">

                        <h4 id="titulo-servicos"></h4>
                        <hr>

                        {{-- <div class="botoes-resposta" id="botoes-div">
                            <p>Qual é a sua satisfação geral com o serviço que você acabou de utilizar?</p>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>


        <div id="step3" class="step">
            <h2>Sugestões e/ou Reclamações</h2>
            <label for="additionalText">Digite seu texto (máx. 300 caracteres):</label>
            <textarea id="additionalText" name="sugestoes"></textarea><br>
            @error('sugestoes')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <!-- <button type="button" class="back" onclick="goBackToStep(4)">Voltar</button> -->
            <button type="submit" class="submit" onclick="">Enviar</button>
        </div>
    </form>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const selecaoServico = document.getElementById('servicos');

        function validarEtapaUmServicos() {
            var inputsPesquisa = document.querySelectorAll('input');

            if (selecaoServico && !selecaoServico.value) {
                inputsPesquisa.forEach(input => {
                    input.disabled = true;
                });
            } else if (selecaoServico && selecaoServico.value) {
                inputsPesquisa.forEach(input => {
                    input.disabled = false;
                });
            }
        }

        // validarEtapaUmServicos();
        botoesAvaliacao(5, 10);

        selecaoServico.addEventListener('change', validarEtapaUmServicos);

    });

    function botoesAvaliacao(avalDivs, avalBotoes) {
        var avalContainer = document.querySelector('.aval-container');

        for (let i = 0; i < avalDivs; i++) {
            var divs = document.createElement('div');
            divs.id = `avalDiv-${i}`;
            divs.class = `aval-div-${i}`;

            avalContainer.appendChild(divs);
        }

        for (let i = 0; i <= avalBotoes; i++) {
            var botoes = document.createElement('button');
            botoes.id = `botao-${i}`;
            botoes.name = `${i}`;
            botoes.textContent = `${i}`;
            botoes.class = 'avalBotao';

            divs.appendChild(botoes);
        }     
    }


</script>

@endsection

