<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <title> Login Page </title>
    <link rel="stylesheet" href="./css/Login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<!-- Start of the Menu Bar -->

<body>
    <?php include('header.php')?>
<!-- Start of the Login/Registration -->
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2> Login </h2>
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
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember me </label>
                <a href="#"> Forgot Password? </a>
            </div>
            <button id="loginBtn" class="btn"> Login </button>
            <div class="login-register">
                <p> Don't have an account? <a href="registration.php" class="register-link"> Register </a></p>
            </div>
        </div>
    </div>
<!-- End of the Login/Registration -->

<!-- Start of the Scripts for .js -->
<script>
    $(document).ready(function(){
        $("#loginBtn").click(function(){
            var email = $("#email").val();
            var password = $("#password").val();

            // Send login data to PHP script using Ajax
            $.ajax({
                type: "POST",
                url: "select.php",
                data: { email: email, password: password },
                success: function(response){
                    if(response == "success"){
                        alert('Success!');
                        window.location.href = "index.php";
                    }else if(response == "invalid"){
                        alert('Invalid Credentials!')
                    }else {
                        alert('Something went wrong!')
                    }
                }
            });
        });
    });
</script>
    <script src="./js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- End of the Scripts for .js -->
</body>
</html>