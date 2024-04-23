<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title> Home </title>
</head>

<!-- Start of the Menu Bar -->
<body>
    <i class='bx bx-chevron-right toggle'></i>
    <?php
        include('sessCheck.php');
    ?>
    <?php include('header.php')?>

<!-- Start of the Charts -->
        <div class="container">
            <div class="chart-group">
                <div class="Piechart">
                    <select class="select" id = "pie" style="margin:5px">
                        <option value="">Select a Year</option>
                        <option value="0">Full Year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                    <canvas id="Piechart" width="300" height="300"></canvas>
                </div>
                <div class="Barchart">
                    <select class="select" id = "bar" style="margin:5px">
                        <option value="">Select a Year</option>
                        <option value="0">Full Year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                    <canvas id="Barchart" width="300" height="300"></canvas>
                </div>
            </div>
            <div class="Linechart">
                <select class="select" id="line">
                    <option value="">Select a Year</option>
                    <option value="0">Full Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select>
                <canvas id="Linechart" height="300"></canvas>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.2/dist/chart.min.js"></script>
        <script src="./js/Piechart.js"></script>
        <script src="./js/Barchart.js"></script>
        <script src="./js/Linechart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.2/dist/chart.min.js"></script>
    </nav>

<!-- End of the Charts -->
</body>
</html>
