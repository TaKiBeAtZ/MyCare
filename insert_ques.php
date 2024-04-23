<?php

if(
    isset(
        $_POST['name'], 
        $_POST['email'], 
        $_POST['age'], 
        $_POST['gender'], 
        $_POST['blood'], 
        $_POST['allergy'], 
        $_POST['healthIssues'],
        $_POST['whiteCell'],
        $_POST['redCell'],
        $_POST['haemoglobin'],
        $_POST['sodium'],
        $_POST['calcium'],
        )) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $allergy = $_POST['allergy'];
    $healthIssues = $_POST['healthIssues'];
    $whiteCell = $_POST['whiteCell'];
    $redCell = $_POST['redCell'];
    $haemoglobin = $_POST['haemoglobin'];
    $sodium = $_POST['sodium'];
    $calcium = $_POST['calcium'];

    if(
        !empty($username) && 
        !empty($email) && 
        !empty($age) && 
        !empty($gender) && 
        !empty($blood) && 
        !empty($allergy) &&
        !empty($whiteCell) &&
        !empty($redCell) &&
        !empty($haemoglobin) &&
        !empty($sodium) &&
        !empty($calcium)
        ){

        // Database connection
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "mycare";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        } else {
            $createdAt = date("Y");
                // Insert question data into database
                $insertStmt = $conn->prepare('INSERT INTO question (name, email, age, gender, blood, allergy, health_issues, white_cell, red_cell, haemoglobin, sodium, calcium, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $insertStmt->bind_param("sssssssssssss", $username, $email, $age, $gender, $blood, $allergy, $healthIssues, $whiteCell, $redCell, $haemoglobin, $sodium, $calcium, $createdAt);
                $insertStmt->execute();
                $insertStmt->close();
                
                // Redirect back to the form page
                header("Location: questionnaire.php?status=success");
                exit();
        }
    } else {
        // Redirect back to the form page with an error message
        header("Location: questionnaire.php?status=error");
        exit();
    }
} else {
    // Redirect back to the form page if form submission failed
    header("Location: questionnaire.php?status=failed");
    exit();
}
?>
