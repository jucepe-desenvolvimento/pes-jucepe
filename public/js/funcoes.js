// document.addEventListener('DOMContentLoaded', function () {

//     let selectView = document.getElementById('select');
//     const graphicDiv = document.querySelector('.container-graphic');

//     if(graphicDiv) {
//         graphicDiv.classList.add('inactive');
//     }

//     selectView.onchange = () => {

//         let selectedValue = selectView.value;
//         var tableDiv = document.querySelector('.container-table');

//         if(selectedValue === 'grafico') {
//             if(graphicDiv) {
//                 graphicDiv.classList.toggle('inactive');
//                 graphicDiv.classList.add('active');
//             }
//             if(tableDiv) {
//                 tableDiv.classList.remove('active');
//                 tableDiv.classList.add('inactive');
//             } 
//         } else if(selectedValue === 'tabela') {
//             if(tableDiv) {
//                 tableDiv.classList.remove('inactive');
//                 tableDiv.classList.add('active');
//             }
//             if(graphicDiv) {
//                 graphicDiv.classList.remove('active');
//                 graphicDiv.classList.add('inactive');
//             } 
//         }
//     }
// });

// const ctx = document.getElementById('myChart');

//   new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//       labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//       datasets: [{
//         label: '# of Votes',
//         data: [12, 19, 3, 5, 2, 3],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });


  // Pesquisa servicos

  var servicoSelecionado = document.getElementById('servicos');

  servicoSelecionado.onchange = function() {
    var textoOpcao = servicoSelecionado.options[servicoSelecionado.selectedIndex].text;

    document.getElementById('titulo-servicos').innerText = `Avalie o serviço: ${textoOpcao}`;
  }

