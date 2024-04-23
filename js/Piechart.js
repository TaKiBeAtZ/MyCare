document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('Piechart').getContext('2d');
    let Piechart;

    // Function to update chart data
    function updateChartData(selectedYear) {
        let formData = new FormData();
        formData.append('selectedYear', selectedYear);
    
        fetch('fetch_data.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Update chart data
            let chartData = Object.values(data);
            Piechart.data.datasets[0].data = chartData;
            Piechart.update(); // Redraw the chart
        })
        .catch(error => console.error('Error updating chart data:', error));
    }

    // Get a reference to the select element
    const selectElement = document.getElementById('pie');

    // Add change event listener to the select element
    selectElement.addEventListener('change', function() {
        const selectedYear = this.value;
        updateChartData(selectedYear);
    });

    Piechart = new Chart(ctx, {
        type: 'pie',
        data: {
            // labels: ['WCC', 'RCC', 'HBGL', 'HCT', 'MCVU', 'MCH', 'MCGL', 'RDWU', 'PLT', 'MPVU', 'NE', 'LY', 'MO', 'EO', 'BA', 'NA', 'K', 'URE', 'CREA', 'GFR', 'BILI', 'ALP', 'ALT', 'ALB', 'CA', 'CCA', 'PHOS', 'CRP', 'MG', 'GLU', 'HTRT', 'KAPPA', 'LAMB', 'KLRA', 'IgA', 'IgG', 'IgM', 'PROT', 'LDH', 'SB2M'],
            labels: ["WCC", "RCC", "HBGL", "NA", "CA"],
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
            }
        }
    });
});