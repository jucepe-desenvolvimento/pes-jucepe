  // Pesquisa espontanea

  document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('lgpd-consentimento').addEventListener('change', permitirSubmitLGDP);

  });

  function criarBotoes(botoesNotas) {
    var divAvaliacoes = document.querySelectorAll('.pergunta');

    divAvaliacoes.forEach(function(div) {

      var inputsOcultos = div.querySelector('input[type="hidden"]');

      if (inputsOcultos) {

        for(let i = 0; i <= botoesNotas; i++) {
          var botoesDinamicos = document.createElement('button');
          botoesDinamicos.type = 'button';
          botoesDinamicos.className = 'botoesAval';
          botoesDinamicos.innerText = i;

          div.appendChild(botoesDinamicos);

          if( i <= 3) {
            botoesDinamicos.style.backgroundColor = '#ff4545';
          }else if ( i >= 4 && i < 7) {
            botoesDinamicos.style.backgroundColor = '#ffc107';
          } else {
            botoesDinamicos.style.backgroundColor = '#4caf50';
          }

          botoesDinamicos.addEventListener('click', function() {
            
            

            var botaoSelecionado = event.target;

            if(botaoSelecionado.classList.contains('selecionado')) {
              botaoSelecionado.classList.remove('selecionado');
              inputsOcultos.value = '';
            } else {

              var divBotoes = div.querySelectorAll('button');
            divBotoes.forEach(function(btn) {
                btn.classList.remove('selecionado');
            });

            botaoSelecionado.classList.add('selecionado');
            inputsOcultos.value = i;

            }

            permitirSubmit()


          });


        }
      }
    });
  }

  criarBotoes(10);

  function permitirSubmit() {
    
    var botaoEnviar = document.getElementById('sub-btn');
    var linkEnviar = document.getElementById('sub-link');

    if(botaoEnviar && linkEnviar) {
        var inputs = document.querySelectorAll('.btn-value');
        var vazios = true;
      
        inputs.forEach(function(input) {
          if(input.value !== '')
            vazios = false;
        });

        if(vazios) {
          botaoEnviar.disabled = true;
          linkEnviar.classList.add('btn-deastivado');
        } else {
          botaoEnviar.disabled = false;
          linkEnviar.classList.remove('btn-deastivado');
        }
    }

  }

  permitirSubmit();
  
  function permitirSubmitLGDP() {
    var consentimento = document.getElementById('lgpd-consentimento');
    var botaoEnviar = document.getElementById('sub-btn-final');

    botaoEnviar.disabled = consentimento && !consentimento.checked;
  }

  permitirSubmitLGDP();

