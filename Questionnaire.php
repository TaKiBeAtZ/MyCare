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
        <select id="gender" name="gender" required>
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
        <select id="gender" name="gender" required>
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
            <option value=""> 3.0 - 4.0 </option>
            <option value=""> 4.0 - 6.0 </option>
            <option value=""> 6.0 - 8.0 </option>
            <option value=""> 8.0 - 10.0 </option>
            <option value=""> 10.0 - 12.0 </option>
            <option value=""> 12.0 - 14.0 </option>
            <option value=""> 14.0 - 16.0 </option>
            <option value=""> 16.0 - 18.0 </option>
            <option value=""> 18.0 - 20.0 </option>
            <option value=""> 20.0 - 22.0 </option>
            <option value=""> 22.0 - 24.0 </option>
            <option value=""> 24.0 - 26.0 </option>
        </select>

        <label for="RedCellCount"> Red Cell Count: </label>
        <select id="RedCellCount" name="RedCellCount" required>
            <option value=""> Select One </option>
            <option value=""> 3.0 - 4.0 </option>
            <option value=""> 4.0 - 6.0 </option>
            <option value=""> 6.0 - 8.0 </option>
            <option value=""> 8.0 - 10.0 </option>
            <option value=""> 10.0 - 12.0 </option>
            <option value=""> 12.0 - 14.0 </option>
            <option value=""> 14.0 - 16.0 </option>
            <option value=""> 16.0 - 18.0 </option>
            <option value=""> 18.0 - 20.0 </option>
            <option value=""> 20.0 - 22.0 </option>
            <option value=""> 22.0 - 24.0 </option>
            <option value=""> 24.0 - 26.0 </option>
        </select>

        <label for="Haemoglobin"> Haemoglobin Count: </label>
        <select id="gender" name="gender" required>
            <option value=""> Select One </option>
            <option value=""> 80 - 85 </option>
            <option value=""> 85 - 90 </option>
            <option value=""> 90 - 95 </option>
            <option value=""> 95 - 100 </option>
            <option value=""> 100 - 120 </option>
            <option value=""> 120 - 150 </option>
            <option value=""> 150 - 200 </option>
            <option value=""> 200 - 250 </option>
            <option value=""> 250 - 300 </option>
        </select>

        <label for="Sodium"> Sodium Count: </label>
        <select id="gender" name="gender" required>
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
        <select id="gender" name="gender" required>
            <option value=""> Select One </option>
            <option value=""> 2.0 - 2.5 </option>
            <option value=""> 2.5 - 2.10 </option>
            <option value=""> 2.10 - 2.15 </option>
            <option value=""> 2.15 - 2.20 </option>
            <option value=""> 2.20 - 2.25 </option>
            <option value=""> 2.30 - 2.35 </option>
        </select>

        <button type="submit">Submit</button>
    </form>
    </form>

<!-- JS -->
<script src="./js/script.js"></script>

</body>
</html>
