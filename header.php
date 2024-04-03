<?php 
     $email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?>
<header>
 <h2 class="index.php"> MyCare </h2>
 <nav class="navigation">
     <a href="index.php"> Home </a>
     <a href="about.php"> About </a>
     <a href="questionnaire.php"> Questionnaire </a>
     <?php
        if($email){ echo"<a href='logout.php'> Logout </a>"; }
        else{ echo"<a href='login.php'> Login </a>"; }
     ?>
 </nav>
</header>