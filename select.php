<?php

if(isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mycare";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    } else {
        // Check if email exists in database
        $stmt = $conn->prepare("SELECT password FROM user WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();
            
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['email'] = $email;
                echo "success";
            } else {
                echo "invalid";
            }
        } else {
            echo "failed";
        }

        $stmt->close();
    }
    $conn->close();
} else {
    echo "Form submission failed.";
}
?>