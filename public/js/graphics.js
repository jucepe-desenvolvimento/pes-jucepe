/* ------------------- */
/*  Graphics Chartjs   */
/* ------------------- */

document.addEventListener('DOMContentLoaded', function () {
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const barCtx = document.getElementById('barChart').getContext('2d');

    // Gráfico de linha

    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Item1', 'Item2', 'Item3', 'Item4', 'Item5'],
            datasets: [{
                label: 'Séries 1',
                data: [20, 30, 10, 40, 35],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Gráfico de barras

    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Item1', 'Item2', 'Item3'],
            datasets: [{
                label: 'Séries 1',
                data: [5, 10, 15],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Séries 2',
                data: [10, 15, 20],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});