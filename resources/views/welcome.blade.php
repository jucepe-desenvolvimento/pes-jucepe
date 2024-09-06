@extends('layouts.main')

@section('title', 'Pesquisa de Satisfação da JUCEPE')


@section('content')

    @if(session('mnsg'))
        <script>
            alert('{{ session('mnsg') }}');
        </script>
    @endif

    <h1>Avaliação Espontânea dos Serviços da JUCEPE</h1>

    <div class="timeline">
        <div class="step-indicator" id="stepIndicator1">
            <div class="circle active">✓</div> 
            <div class="label">Identificação</div>
        </div>
        <div class="step-indicator" id="stepIndicator2">
            <div class="circle">2</div>
            <div class="label">Processos e Serviços</div>
        </div>
        <div class="step-indicator" id="stepIndicator3">
            <div class="circle">3</div>
            <div class="label">Avaliação Geral</div>
        </div>
        <div class="step-indicator" id="stepIndicator4">
            <div class="circle">4</div>
            <div class="label">Sugestões</div>
        </div>
        <div class="step-indicator" id="stepIndicator5">
            <div class="circle">5</div>
            <div class="label">Finalizar</div>
        </div>
    </div>

    <div class="container-2">
        <form id="surveyForm" action="/" method="POST"> 
            @csrf
            <!-- Step 1 -->
            <div id="step1" class="step active">
                <h2></h2>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" required><br>
                <div class="checkbox-container">
                    <input type="checkbox" id="lgpdConsent" name="lgpdConsent" required>
                    <label for="lgpdConsent">Estou ciente que os dados serão salvos conforme a LGPD.</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="anonymous" name="anonymous" onchange="respostaAnonima()">
                    <label for="anonymous">Desejo manter as respostas anônimas.</label>
                </div>
                <button type="button" class="next" onclick="nextStep(1)">Próxima</button>
            </div>
            <!-- Step 2 -->
            <div id="step2" class="step">
                <h2>Avalie o(s) serviço(s) disponibilizados pela JUCEPE</h2>
                <div class="option-button" id="option1" onclick="chooseOption(1)">Atendimento Online</div>
                <div class="option-button" id="option2" onclick="chooseOption(2)">Atendimento Presencial</div>
                <div class="option-button" id="option3" onclick="chooseOption(3)">Processos e Serviços</div>
                <div class="option-button" id="option4" onclick="chooseOption(4)">Avaliação Geral</div>
                <button type="button" class="back" onclick="goBackToStep(1)">Voltar</button>
                <button type="button" class="next" onclick="nextStep(2)">Próxima</button>
            </div>
            <!-- Sub-step 2.1 -->
        <div id="step2_1" class="step">
                <h2>Atendimento Online</h2>
                <label>Orientação recebida ou solicitação atendida</label>
                <div class="button-container" id="question2_1Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <label>Tempo de resposta (até 48 horas)</label>
                <div class="button-container" id="quality2_1Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question2_1" name="orientacao" required>
                <input type="hidden" id="quality2_1" name="tempoResposta" required>
                <button type="button" class="back" onclick="markCompletedAndBackToStep2('option1', 'question2_1')">Voltar</button>
            </div>
            <!-- Sub-step 2.2 -->
            <div id="step2_2" class="step">
                <h2>Atendimento Presencial</h2>
                <label>Ambiente físico (instalações, portaria, recepção)</label>
                <div class="button-container" id="question2_2Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <label>Orientação recebida (dúvidas, esclarecimentos)</label>
                <div class="button-container" id="quality2_2Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question2_2" name="ambienteFisico" required>
                <input type="hidden" id="quality2_2" name="duvidasEsclarecimentos" required>
                <button type="button" class="back" onclick="markCompletedAndBackToStep2('option2', 'question2_2')">Voltar</button>
            </div>
            <!-- Sub-step 2.3 -->
            <div id="step2_3" class="step">
                <h2>Processos e Serviços</h2>
                <label>Tempo de análise dos processos</label>
                <div class="button-container" id="question2_3Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <label>Prazo de entrega de certidões ou de autenticação de livros</label>
                <div class="button-container" id="quality2_3Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <label>Integração com outros órgãos de registro (Receita Federal,Sefaz, Prefeituras, etc)</label>
                <div class="button-container" id="friend2_3Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <label>Facilidade de uso dos serviços digitais</label>
                <div class="button-container" id="cordiality2_3Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question2_3" name="tempoAnalise" required>
                <input type="hidden" id="quality2_3" name="prazoEntrega" required>
                <input type="hidden" id="friend2_3" name="integracaoOrgaos" required>
                <input type="hidden" id="cordiality2_3" name="facilidadeUso" required>
                <button type="button" class="back" onclick="markCompletedAndBackToStep2('option3', 'question2_3')">Voltar</button>
            </div>
            <!-- Sub-step 2.4 -->
            <div id="step2_4" class="step">
                <h2>Avaliação Geral</h2>
                <label>Sua avaliação geral sobre a JUCEPE</label>
                <div class="button-container" id="question2_4Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question2_4" name="avaliacaoGeral" required>
                <button type="button" class="back" onclick="markCompletedAndBackToStep2('option4', 'question2_4')">Voltar</button>
            </div>
            <!-- Step 3 -->
            <div id="step3" class="step">
                <h2>Avaliação de Atendimento</h2>
                <label>Como você avalia nossa qualidade de atendimento?</label>
                <div class="button-container" id="question3Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question3" name="qualidadeAtendimento" required>
                <button type="button" class="back" onclick="goBackToStep(2)">Voltar</button>
                <button type="button" class="next" onclick="nextStep(3)">Próxima</button>
            </div>
            <!-- Step 4 -->
            <div id="step4" class="step">
                <h2>Avaliação dos nossos serviços</h2>
                <label>Como você avalia a qualidade dos nossos serviços?</label>
                <div class="button-container" id="question4Container">
                    <!-- Botões serão adicionados pelo JavaScript -->
                </div>
                <input type="hidden" id="question4" required>
                <button type="button" class="back" onclick="goBackToStep(3)">Voltar</button>
                <button type="button" class="next" onclick="nextStep(4)">Próxima</button>
            </div>
            <!-- Step 5 -->
            <div id="step5" class="step">
                <h2>Sugestões e/ou Reclamações</h2>
                <label for="additionalText">Digite seu texto (máx. 300 caracteres):</label>
                <textarea id="additionalText" name="textoAdicional" rows="4" maxlength="300"></textarea><br>
                <button type="button" class="back" onclick="goBackToStep(4)">Voltar</button>
                <button type="submit" class="submit" onclick="">Enviar</button>
            </div>
        </form>
    </div>
    
    {{-- Scripts --}}
    <script src="/js/pesquisasatisf.js"></script>
</div>

@endsection
