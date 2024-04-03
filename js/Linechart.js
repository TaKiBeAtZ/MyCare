document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('Linechart').getContext('2d');
    let Linechart;

    // Function to update chart data
    function updateChartData(selectedYear) {
        // Fetch data based on the selected year (assuming data is fetched dynamically)
        fetch(`data.json`)
            .then(response => response.json())
            .then(data => {
                // Update chart data
                Linechart.data.datasets[0].data = data[selectedYear];
                Linechart.update(); // Redraw the chart
            })
            .catch(error => console.error('Error updating chart data:', error));
    }

    // Get a reference to the select element
    const selectElement = document.getElementById('line');

    // Add change event listener to the select element
    selectElement.addEventListener('change', function() {
        // Get the selected value
        const selectedYear = this.value;

        // Update chart data based on the selected year
        updateChartData(selectedYear);
    });

    // Initial chart configuration
    Linechart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['WCC', 'RCC', 'HBGL', 'HCT', 'MCVU', 'MCH', 'MCGL', 'RDWU', 'PLT', 'MPVU', 'NE', 'LY', 'MO', 'EO', 'BA', 'NA', 'K', 'URE', 'CREA', 'GFR', 'BILI', 'ALP', 'ALT', 'ALB', 'CA', 'CCA', 'PHOS', 'CRP', 'MG', 'GLU', 'HTRT', 'KAPPA', 'LAMB', 'KLRA', 'IgA', 'IgG', 'IgM', 'PROT', 'LDH', 'SB2M'],
            datasets: [{
                label: 'value: ',
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            maintainAspectRatio: false
        }
    });
});
