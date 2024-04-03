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
            <option value="male"> A- </option>
            <option value="female"> B+ </option>
            <option value="other"> B- </option>
            <option value="other"> AB+ </option>
            <option value="other"> AB- </option>
            <option value="other"> 0+ </option>
            <option value="other"> 0- </option>
        </select>

        <label for="Allergies"> Allergies: </label>
        <select id="gender" name="gender" required>
            <option value=""> Select One </option>
            <option value=""> Food Allergies </option>
            <option value="male"> Pet Allergies </option>
            <option value="female"> Insect Sting Allergies </option>
            <option value="other"> Drug Allergies </option>
            <option value="other"> Pollen Allergies </option>
            <option value="other"> Latex Allergies </option>
            <option value="other"> Mold Allergies </option>
        </select>

        <label for="healthIssues">Any current health issues? (If yes, please specify)</label>
        <textarea id="healthIssues" name="healthIssues"></textarea>

        <button type="submit">Submit</button>
    </form>
    </form>

<!-- JS -->
<script src="./js/script.js"></script>

</body>
</html>
