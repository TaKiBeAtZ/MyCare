<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <title> Registration Page </title>
    <link rel="stylesheet" href="./css/Login.css">
</head>

<!-- Start of the Menu Bar -->

<body>
    <?php include('header.php')?>

<!-- Start of the Login/Registration -->
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2> Register </h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-unread"></ion-icon></span>
                <input type="username" name="username" id="username" required>
                <label> UserName </label>    
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-unread"></ion-icon></span>
                <input type="email" name="email" id="email" required>
                <label> Email </label>    
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" id="password" required>
                <label> Password </label>    
            </div>
            <button id="registerBtn" class="btn"> Register </button>
            <div class="login-register">
                <p> Already have an account? <a href="login.php" class="register-link"> Login </a></p>
            </div>
        </div>
    </div>
<!-- End of the Login/Registration -->

<!-- Start of the Scripts for .js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#registerBtn").click(function(){
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: { username: username, email: email, password: password },
                success: function(response){
                    if(response == "success"){
                        alert('Registration successful. Please login.');
                        window.location.href = "login.php";
                    }else if(response == "exist"){
                        alert('User with this email already exists.');
                    }
                }
            });
        });
    });
</script>
    <script src="./js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- End of the Scripts for .js -->

</body>
</html>