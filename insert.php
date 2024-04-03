<?php

if(isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($email) && !empty($password)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Database connection
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "mycare";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        } else {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT email FROM user WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows == 0) {
                $stmt->close();
                
                // Insert user data into database
                $insertStmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
                $insertStmt->bind_param("sss", $username, $email, $hashedPassword);
                $insertStmt->execute();
                $insertStmt->close();
                
                // Set session variable
                $_SESSION['email'] = $email;
                echo "success";
            } else {
                echo "exist";
            }
        }
        $conn->close();
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Form submission failed.";
}
?>
