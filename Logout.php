<?php
    $_SESSION = array();
    session_destroy();
    // Redirect the user to logout.php
    header("Location: login.php");
    exit(); // Make sure to exit after sending the header
?>