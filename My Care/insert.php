<?php
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phonecode = $_POST['phoneCode'];
$phone = $_POST['phone'];


if(!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "Register";

    //create connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM register WHERE email=? Limit=1";
        $INSERT = "INSERT INTO register (username, password, gender, email, phoneCode, phone) VALUES (?, ?, ?, ?, ?, ?)";
    }

    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt -> bind_param("s", $email);
    $stmt -> execute();
    $stmt -> bind_result($email);
    $stmt -> store_result();
    $rnum = $stmt -> num_rows;

    if ($rnum==0) {
        $stmt -> close();

        $stmt = $conn ->prepare($INSERT);
        $stmt -> bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
        $stmt -> execute();
        echo "New record inserted successfully";
    } else {
        echo "Someone already registered using this email";
    }
    $stmt -> close();
    $conn -> close();

} else {
    echo "All Fields are required";
    die();
}

?>