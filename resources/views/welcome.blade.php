@extends('layouts.main')

@section('title', 'Pesquisa de Satisfação da JUCEPE')


@section('content')

    <h4 class="shadow">Avaliação Espontânea dos Serviços da JUCEPE</h4>

    {{-- Atendimento online --}}
    <form action="/" method="POST">
        @csrf
        <div id="atendimento-online" class="container-aval p-2" style="display: block">
            <h5 class="d-flex align-items-center">
                <i class="bi bi-person-workspace me-2"></i>
                Avalie nosso atendimento online
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#legenda-modal">
                    <i class="bi bi-question-circle"></i>
                </button>
            
            </h5> 
                <div class="pergunta" id="pergunta-orientacao">
                    <p>Orientação recebida ou solicitação atendida:</p>
                    {{-- Os botões foram criados com javascript --}}
                    <input type="hidden" class="btn-value" name="orientacao" id="orientacao"> 
                </div>                    
                <div class="pergunta">
                    <p>Tempo de resposta (até 48 horas):</p>
                    <input type="hidden" class="btn-value" name="tempoResposta" id="tempoResposta">    
                </div>
        </div>
        
        {{-- Atendimento presencial --}}
        <div id="atendimento-presencial" class="container-aval p-2">
            <h5 class="d-flex align-items-center">
                <i class="bi bi-geo-fill me-2"></i>
                Avalie nosso atendimento presencial
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#legenda-modal">
                    <i class="bi bi-question-circle"></i>
                </button>
            </h5>
                <div class="pergunta">
                    <p>Ambiente físico (instalações, portaria, recepção):</p>
                    <input type="hidden" class="btn-value" name="ambienteFisico" id="ambienteFisico">    
                </div>                    
                <div class="pergunta">
                    <p>Orientação recebida (dúvidas, esclarecimentos):</p>
                    <input type="hidden" class="btn-value" name="orientacaoPres" id="orientacaoPres">    
                </div>
        </div> 
        
        {{-- Processos e Serviços --}}
        <div id="processos-servicos" class="container-aval p-2">
            <h5 class="d-flex align-items-center">
                <i class="bi bi-person-fill-gear me-2"></i>
                Processos e Serviços
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#legenda-modal">
                    <i class="bi bi-question-circle"></i>
                </button>
            </h5>
                <div class="pergunta">
                    <p>Tempo de análise dos processos:</p>
                    <input type="hidden" class="btn-value" name="tempoAnalise" id="tempoAnalise">    
                </div>                    
                <div class="pergunta">
                    <p>Prazo de entrega de certidões ou de autenticação de livros:</p>
                    <input type="hidden" class="btn-value" name="prazoEntrega" id="prazoEntrega">    
                </div>
                <div class="pergunta">
                    <p>Integração com outros órgãos de registro (Receita Federal,Sefaz, Prefeituras, etc):</p>
                    <input type="hidden" class="btn-value" name="integracaoOrgaos" id="integracaoOrgaos">    
                </div>
                <div class="pergunta">
                    <p>Facilidade de uso dos serviços digitais:</p>
                    <input type="hidden" class="btn-value" name="facilidadeDigitais" id="facilidadeDigitais">    
                </div>
        </div>
       {{-- Avaliação Geral  --}}
        <div id="avaliacao-geral" class="container-aval p-2">
            <h5 class="d-flex align-items-center">
                <i class="bi bi-journal-check me-2"></i>
                Avaliação Geral
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#legenda-modal">
                    <i class="bi bi-question-circle"></i>
                </button>
            </h5>
                <div class="pergunta">
                    <p>Sua avaliação geral sobre a JUCEPE:</p>
                    <input type="hidden" class="btn-value" name="avaliacaoGeral" id="avaliacaoGeral">    
                </div>                    
        </div>
        
        <div id="sugestoes" class="container-aval p-2">
            <h5 class="d-flex align-items-center">
                <i class="bi bi-journal-check me-2"></i>
                    Sugestoes e/ou Reclamações
            </h5>
            <div class="pergunta">
                <div class="form-floating">
                    <textarea class="form-control" id="sugestao" name="sugestao" style="height: 100px"></textarea>
                    <label for="sugestoes">Digite seu texto</label>
                </div>    
            </div>                    
        </div>

        <div class="d-grid col-6 mx-auto m-4">
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" id="sub-link">Enviar</a>
        </div>

        {{-- modal identificação --}}

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Identificação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Deseja se identicar?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" id="sub-btn">Não</button>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" href="#exampleModalToggle2" role="button">Sim</a>
            </div>
          </div>
        </div>
    </div>

    {{-- campos para preenchimento dos dados --}}

      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">Informe os dados solicitados abaixo:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5>
                <i class="bi bi-person-plus-fill me-2 mb-1"></i>
                Identificação
              </h5>
                <div class="dados-pessoais input-group input-group-sm mb-3">
                    <span class="input-group-text">Nome:</span>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>                    
                <div class="dados-pessoais input-group input-group-sm mb-3">
                    <span class="input-group-text">Email:</span>
                    <input type="email" id="email" name="email" class="form-control">
                </div>                    
                <div class="dados-pessoais input-group input-group-sm mb-3">
                    <span class="input-group-text">Telefone:</span>
                    <input type="text" id="telefone" name="telefone" class="form-control">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Sim" name="consentimento_lgpd" id="lgpd-consentimento">
                    <label for="lgpd-consentimento" class="form-check-label">Estou ciente que os dados serão tratados conforme a LGPD.</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="sub-btn-final">Enviar</button>
            </div>
          </div>
        </div>
      </div>

    </form>

      {{-- Modal inicial --}}

        <div class="modal fade" id="legenda-modal" tabindex="-1" aria-labelledby="legenda-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="legenda-modal-label">Bem-vindo(a) a Pesquisa de Satisfação da JUCEPE!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                <p>Responda a pesquisa utilizando uma escala de 0 a 10. <br>Onde <strong>0</strong> equivale a <strong>"Muito Ruim"</strong> e <strong>10</strong> equivale a <strong>"Excelente"</strong>.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Prosseguir</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

                var modal = new bootstrap.Modal(document.getElementById('legenda-modal'));
                modal.show();

            });
        </script>

        <script>

            $(document).ready(function() {
                $('#telefone').mask('(81) 0 0000-0000');
            });

        </script>

@endsection
