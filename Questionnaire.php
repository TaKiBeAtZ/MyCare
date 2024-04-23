<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Questionnaire</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/Questionnaire.css">
    
</head>
<body>

    <?php include('header.php')?>
    <?php
        if(isset($_GET['status'])) {
            $status = $_GET['status'];
            // Now you can use $status in your code
            echo "<script>alert('$status');</script>";
            echo "<script>window.location.href = 'questionnaire.php';</script>";
        }
    ?>
    <form action="insert_ques.php" method="post" >
        <h2 style="color: #000000 !important">Health Questionnaire</h2>
        <label for="name"> Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email"> Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age"> Age: </label>
        <input type="text" id="age" name="age" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="bloodType"> Blood Type: </label>
        <select id="blood" name="blood" required>
            <option value=""> Select One </option>
            <option value="A+"> A+ </option>
            <option value="A-"> A- </option>
            <option value="B+"> B+ </option>
            <option value="B-"> B- </option>
            <option value="AB+"> AB+ </option>
            <option value="AB-"> AB- </option>
            <option value="O+"> O+ </option>
            <option value="O-"> O- </option>
        </select>
        
        <label for="Allergies"> Allergies: </label>
        <select id="allergy" name="allergy" required>
            <option value=""> Select One </option>
            <option value="Food Allergies"> Food Allergies </option>
            <option value="Pet Allergies"> Pet Allergies </option>
            <option value="Insect Sting Allergies"> Insect Sting Allergies </option>
            <option value="Drug Allergies"> Drug Allergies </option>
            <option value="Pollen Allergies"> Pollen Allergies </option>
            <option value="Latex Allergies"> Latex Allergies </option>
            <option value="Mold Allergies"> Mold Allergies </option>
        </select>

        <label for="healthIssues">Any current health issues? (If yes, please specify)</label>
        <textarea id="healthIssues" name="healthIssues" style="padding: 10px; width:100%"></textarea>

        <label for="WhiteCell"> White Cell Count: </label>
        <select id="WhiteCell" name="whiteCell" required>
            <option value=""> Select One </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="6"> 6 </option>
            <option value="8"> 8 </option>
            <option value="10"> 10 </option>
            <option value="12"> 12 </option>
            <option value="14"> 14 </option>
            <option value="16"> 16 </option>
            <option value="18"> 18 </option>
            <option value="20"> 20 </option>
            <option value="22"> 22 </option>
            <option value="24"> 24 </option>
            <option value="26"> 26 </option>
        </select>

        <label for="RedCellCount"> Red Cell Count: </label>
        <select id="RedCellCount" name="redCell" required>
            <option value=""> Select One </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="6"> 6 </option>
            <option value="8"> 8 </option>
            <option value="10"> 10 </option>
            <option value="12"> 12 </option>
            <option value="14"> 14 </option>
            <option value="16"> 16 </option>
            <option value="18"> 18 </option>
            <option value="20"> 20 </option>
            <option value="22"> 22 </option>
            <option value="24"> 24 </option>
            <option value="26"> 26 </option>
        </select>

        <label for="Haemoglobin"> Haemoglobin Count: </label>
        <select id="Haemoglobin" name="haemoglobin" required>
            <option value=""> Select One </option>
            <option value="80"> 80 </option>
            <option value="85"> 85 </option>
            <option value="90"> 90 </option>
            <option value="95"> 95 </option>
            <option value="100"> 100 </option>
            <option value="120"> 120 </option>
            <option value="150"> 150 </option>
            <option value="200"> 200 </option>
            <option value="250"> 250 </option>
            <option value="300"> 300 </option>
        </select>

        <label for="Sodium"> Sodium Count: </label>
        <select id="Sodium" name="sodium" required>
            <option value=""> Select One </option>
            <option value="140"> 140 </option>
            <option value="141"> 141 </option>
            <option value="142"> 142 </option>
            <option value="143"> 143 </option>
            <option value="144"> 144 </option>
            <option value="145"> 145 </option>
            <option value="146"> 146 </option>
            <option value="147"> 147 </option>
            <option value="148"> 148 </option>
            <option value="149"> 149 </option>
            <option value="150"> 150 </option>
           
        </select>

        <label for="Calcium"> Calcium Count: </label>
        <select id="Calcium" name="calcium" required>
            <option value=""> Select One </option>
            <option value="2.0"> 2.0 </option>
            <option value="2.05"> 2.05 </option>
            <option value="2.1"> 2.1 </option>
            <option value="2.15"> 2.15 </option>
            <option value="2.2"> 2.2 </option>
            <option value="2.25"> 2.25 </option>
            <option value="2.3"> 2.3 </option>
            <option value="2.35"> 2.35 </option>
        </select>

        <label for="WhiteCellCount"> White Cell Count: </label>
        <select id="WhiteCellCount" name="WhiteCellCount" required>
            <option value=""> Select One </option>
            <option value=""> 3 </option>
            <option value=""> 4 </option>
            <option value=""> 6 </option>
            <option value=""> 8 </option>
            <option value=""> 10 </option>
            <option value=""> 12 </option>
            <option value=""> 14 </option>
            <option value=""> 16 </option>
            <option value=""> 18 </option>
            <option value=""> 20 </option>
            <option value=""> 22 </option>
            <option value=""> 24 </option>
            <option value=""> 26 </option>
        </select>

        <label for="RedCellCount"> Red Cell Count: </label>
        <select id="RedCellCount" name="RedCellCount" required>
            <option value=""> Select One </option>
            <option value=""> 3 </option>
            <option value=""> 4 </option>
            <option value=""> 6 </option>
            <option value=""> 8 </option>
            <option value=""> 10 </option>
            <option value=""> 12 </option>
            <option value=""> 14 </option>
            <option value=""> 16 </option>
            <option value=""> 18 </option>
            <option value=""> 20 </option>
            <option value=""> 22 </option>
            <option value=""> 24 </option>
            <option value=""> 26 </option>
        </select>

        <label for="Haemoglobin"> Haemoglobin Count: </label>
        <select id="Haemoglobin" name="Haemoglobin" required>
            <option value=""> Select One </option>
            <option value=""> 80 </option>
            <option value=""> 85 </option>
            <option value=""> 90 </option>
            <option value=""> 95 </option>
            <option value=""> 100 </option>
            <option value=""> 120 </option>
            <option value=""> 150 </option>
            <option value=""> 200 </option>
            <option value=""> 250 </option>
            <option value=""> 300 </option>
        </select>

        <label for="Sodium"> Sodium Count: </label>
        <select id="Sodium" name="Sodium" required>
            <option value=""> Select One </option>
            <option value=""> 140 </option>
            <option value=""> 141 </option>
            <option value=""> 142 </option>
            <option value=""> 143 </option>
            <option value=""> 144 </option>
            <option value=""> 145 </option>
            <option value=""> 146 </option>
            <option value=""> 147 </option>
            <option value=""> 148 </option>
            <option value=""> 149 </option>
            <option value=""> 150 </option>
           
        </select>

        <label for="Calcium"> Calcium Count: </label>
        <select id="Calcium" name="Calcium" required>
            <option value=""> Select One </option>
            <option value=""> 2.0 </option>
            <option value=""> 2.5 </option>
            <option value=""> 2.10 </option>
            <option value=""> 2.15 </option>
            <option value=""> 2.20 </option>
            <option value=""> 2.30 </option>
            <option value=""> 2.35 </option>
        </select>

        <button type="submit">Submit</button>
</form>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/script.js"></script>

</body>
</html>
