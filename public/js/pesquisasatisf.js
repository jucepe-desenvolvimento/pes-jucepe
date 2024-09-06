const totalSteps = 6; // Atualizado para refletir o novo número total de etapas

function nextStep(currentStep) {
    const currentDiv = document.getElementById(`step${currentStep}`);
    const nextDiv = document.getElementById(`step${currentStep + 1}`);
    if (validateStep(currentStep)) {
        currentDiv.classList.remove('active');
        nextDiv.classList.add('active');
        updateTimeline(currentStep + 1);
    }
}

function markCompletedAndBackToStep2(optionId, questionId) {
    if (document.getElementById(questionId).value) {
        document.getElementById(optionId).classList.add('completed');
    }
    const currentDiv = document.querySelector('.step.active');
    currentDiv.classList.remove('active');
    document.getElementById('step2').classList.add('active');
}

function validateStep(step) {
    if (step === 1) {
        return validateInputs(['name', 'email', 'phone', 'lgpdConsent']);
    } else if (step === 2) {
        // Verificar se pelo menos uma sub-etapa foi concluída
        if (document.querySelectorAll('.option-button.completed').length > 0) {
            return true;
        } else {
            alert('Por favor, responda pelo menos uma das sub-etapas.');
            return false;
        }
    } else if (step === 2.5) {
        return validateInputs(['question2_5']);
    } else if (step > 2.5 && step < 5) {
        return validateInputs([`question${step}`]);
    }
    return true; // Step 5 validation is handled by form submission
}

function validateInputs(ids) {
    return ids.every(id => {
        let input = document.getElementById(id);

        if ((input.type === 'checkbox' && !input.checked) || (!input.value.trim())) {
            alert('Por favor, preencha todos os campos corretamente.');
            input.focus();
            return false;
        } else if (input.tagName === 'SELECT' && !input.value) {
            alert('Por favor, selecione uma opção válida.');
            input.focus();
            return false;
        }

        return true;
    });
}

function createRatingButtons(containerId, questionId) {
    const container = document.getElementById(containerId);
    container.innerHTML = ''; 
    for (let i = 0; i <= 10; i++) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'rating-button';
        button.style.backgroundColor = getButtonColor(i);
        button.textContent = i;
        button.onclick = () => selectRating(questionId, i);
        container.appendChild(button);
    }
}

function selectRating(questionId, rating) {
    document.getElementById(questionId).value = rating;
    let buttons = document.querySelectorAll(`#${questionId}Container .rating-button`);
    buttons.forEach(button => {
        button.classList.remove('selected');
    });
    document.querySelector(`#${questionId}Container button:nth-child(${rating + 1})`).classList.add('selected');
}

function getButtonColor(index) {
    if (index <= 2) return '#ff4545'; // Red
    if (index <= 6) return '#ffc107'; // Amber
    return '#4caf50'; // Green
}

function chooseOption(option) {
    const currentDiv = document.getElementById('step2');
    currentDiv.classList.remove('active');
    const nextDiv = document.getElementById(`step2_${option}`);
    nextDiv.classList.add('active');
}

function goBackToStep(step) {
    const currentDiv = document.querySelector('.step.active');
    currentDiv.classList.remove('active');
    const previousDiv = document.getElementById(`step${step}`);
    previousDiv.classList.add('active');
}

function updateTimeline(step) {
    for (let i = 1; i <= totalSteps; i++) {
        const indicator = document.getElementById(`stepIndicator${i}`);
        const circle = indicator.querySelector('.circle');
        if (i < step) {
            circle.classList.add('completed');
            circle.classList.remove('active');
            circle.innerHTML = '✓';
        } else if (i === step) {
            circle.classList.add('active');
            circle.classList.remove('completed');
            circle.innerHTML = i;
        } else {
            circle.classList.remove('active', 'completed');
            circle.innerHTML = i;
        }
    }
}

function submitForm() {
    if (validateInputs(['additionalText'])) {
        updateTimeline(totalSteps); // Marcar a etapa 5 como concluída
        markStepAsCompleted(5); // Marcar a etapa 5 como concluída na linha do tempo
        resetForm(); // Volta para a primeira etapa e reinicia o formulário
    }
}

function resetForm() {
    // Limpa todos os campos de entrada
    document.getElementById('surveyForm').reset();
    
    // Reinicia as etapas
    document.querySelectorAll('.step').forEach(step => {
        step.classList.remove('active');
    });
    document.getElementById('step1').classList.add('active');
    
    // Atualiza a linha do tempo para a primeira etapa
    updateTimeline(1); 
    
    // Reativa os botões de navegação
    enableNavigation();
    
    // Remove todas as seleções de botão
    document.querySelectorAll('.rating-button').forEach(button => {
        button.classList.remove('selected');
    });

    // Recria os botões de avaliação para garantir que estão funcionando corretamente
    recreateRatingButtons();

    // Remove a classe 'completed' dos botões de opção
    document.querySelectorAll('.option-button').forEach(button => {
        button.classList.remove('completed');
    });
}

function markStepAsCompleted(step) {
    const indicator = document.getElementById(`stepIndicator${step}`);
    const circle = indicator.querySelector('.circle');
    circle.classList.add('completed');
    circle.classList.remove('active');
    circle.innerHTML = '✓';
}

function disableNavigation() {
    const buttons = document.querySelectorAll('button.back, button.next');
    buttons.forEach(button => {
        button.disabled = true;
        button.style.cursor = 'not-allowed';
        button.style.backgroundColor = '#ccc';
    });
}

function enableNavigation() {
    const buttons = document.querySelectorAll('button.back, button.next');
    buttons.forEach(button => {
        button.disabled = false;
        button.style.cursor = 'pointer';
        button.style.backgroundColor = '#5c67f2';
    });
}

function respostaAnonima() {
    const etapaUmInputs = document.querySelectorAll('input[name="name"], input[name="email"], input[name="phone"], input[name="lgpdConsent"]');
    const checkAnonimo = document.getElementById('anonymous');
    if (checkAnonimo && checkAnonimo.checked) {
        etapaUmInputs.forEach(input => {
            input.disabled = true;
            input.value = 'Anônimo';
            input.checked = true;
        });
    } else {
        etapaUmInputs.forEach(input => {
            input.disabled = false;
        });
    }
}

function recreateRatingButtons() {
    const questions = [
        'question2_1', 'quality2_1',
        'question2_2', 'quality2_2',
        'question2_3', 'quality2_3',
        'friend2_3', 'cordiality2_3',
        'question2_4', 'question3', 'question4',
        'question2_5' // Adicione o novo botão de avaliação aqui
    ];
    
    questions.forEach(question => {
        const containerId = `${question}Container`;
        createRatingButtons(containerId, question);
    });
}

// Chamadas de inicialização
document.addEventListener('DOMContentLoaded', () => {
    recreateRatingButtons();
    updateTimeline(1);
});

// Máscaras
$(document).ready(function(){
    $('#phone').mask('(00) 00000-0000');
});
