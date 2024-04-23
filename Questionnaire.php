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

    <form action="insert.php" method="POST">
    <form id="healthForm">
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
        <select id="bloodType" name="bloodType" required>
            <option value=""> Select One </option>
            <option value=""> A+ </option>
            <option value=""> A- </option>
            <option value=""> B+ </option>
            <option value=""> B- </option>
            <option value=""> AB+ </option>
            <option value=""> AB- </option>
            <option value=""> 0+ </option>
            <option value=""> 0- </option>
        </select>
        

        <label for="Allergies"> Allergies: </label>
        <select id="Allergies" name="Allergies" required>
            <option value=""> Select One </option>
            <option value=""> Food Allergies </option>
            <option value=""> Pet Allergies </option>
            <option value=""> Insect Sting Allergies </option>
            <option value=""> Drug Allergies </option>
            <option value=""> Pollen Allergies </option>
            <option value=""> Latex Allergies </option>
            <option value=""> Mold Allergies </option>
        </select>

        <label for="healthIssues">Any current health issues? (If yes, please specify)</label>
        <textarea id="healthIssues" name="healthIssues"></textarea>

        <label for="WhiteCell"> White Cell Count: </label>
        <select id="WhiteCell" name="WhiteCell" required>
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
    </form>

<!-- JS -->
<script src="./js/script.js"></script>

</body>
</html>
