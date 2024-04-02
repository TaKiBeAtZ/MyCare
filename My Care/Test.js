// Sample data for the graphs
const pieChartData = {
    labels: ['Red', 'Blue', 'Yellow'],
    datasets: [{
      data: [300, 50, 100],
      backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
    }]
  };
  
  const barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Sales',
      backgroundColor: '#36a2eb',
      data: [65, 59, 80, 81, 56, 55, 40]
    }]
  };
  
  const lineChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Profit',
      borderColor: '#ffce56',
      data: [30, 40, 45, 50, 60, 70, 80]
    }]
  };

  const gaugeChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'Profit',
      borderColor: '#ffce56',
      data: [30, 40, 45, 50, 60, 70, 80]
    }]
  };
  
  // Creating pie chart
  const pieChartCanvas = document.getElementById('pieChart').getContext('2d');
  new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieChartData
  });
  
  // Creating bar chart
  const barChartCanvas = document.getElementById('barChart').getContext('2d');
  new Chart(barChartCanvas, {
    type: 'bar',
    data: barChartData,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  
  // Creating line chart
  const lineChartCanvas = document.getElementById('lineChart').getContext('2d');
  new Chart(lineChartCanvas, {
    type: 'line',
    data: lineChartData
  });

  // Creating gaugechart
  const gaugeChartCanvas = document.getElementById('gaugeChart').getContext('2d');
  new Chart(gaugeDataChartCanvas, {
    type: 'gauge',
    data: gaugeChartData
  });

  // Sample client data
const clients = [
  { name: 'Client A', age: 35, purchases: 10 },
  { name: 'Client B', age: 42, purchases: 15 },
  { name: 'Client C', age: 28, purchases: 8 },
  { name: 'Client D', age: 55, purchases: 20 },
];

// Function to extract data for a specific property from the clients array
function extractData(property) {
  return clients.map(client => client[property]);
}

// Function to create a bar chart
function createBarChart() {
  const ctx = document.getElementById('barChart').getContext('2d');
  const barChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: extractData('name'),
      datasets: [{
        label: 'Purchases',
        data: extractData('purchases'),
        backgroundColor: 'rgba(54, 162, 235, 0.6)',
        borderColor: 'rgba(54, 162, 235, 1)',
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
} 

// Function to create a pie chart
function createPieChart() {
  const ctx = document.getElementById('pieChart').getContext('2d');
  const pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: extractData('name'),
      datasets: [{
        label: 'Age Distribution',
        data: extractData('age'),
        backgroundColor: [
          'rgba(255, 99, 132, 0.6)',
          'rgba(54, 162, 235, 0.6)',
          'rgba(255, 206, 86, 0.6)',
          'rgba(75, 192, 192, 0.6)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });
}

// Function to initialize charts
function initCharts() {
  createBarChart();
  createPieChart();
}

// Call the initCharts function when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', initCharts);
