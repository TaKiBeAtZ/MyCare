<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/Test.css">
</head>
<body>
  <div class="sidebar">
    <h2>Sidebar</h2>
    <!-- Sidebar content -->
  </div>
  <div class="content">
    <div class="graph-container">
      <canvas id="pieChart"></canvas>
    </div>
    <div class="graph-container">
      <canvas id="barChart"></canvas>
    </div>
    <div class="graph-container">
      <canvas id="lineChart"></canvas>
    </div>
    <div class="graph-container">
      <canvas id="gaugeChart"></canvas>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="Test.js"></script>
</body>
</html>

