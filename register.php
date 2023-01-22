<?php
include_once("dbcon.php");
    session_start();
    if(isset($_SESSION['verified_user_id']))
        {
            $_SESSION['status'] = "You are already logged in.";
            header('Location: registrar.php');
            exit();
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
    </head>

 <body>
 <nav>
<p class="title">Cainta Catholic College</p>    
</nav>
<center>
 <div class="register-form">   
    
 <form class="register-container"  action="logincode.php" method="POST">
     <h3 style=" margin-bottom: 10px; text-align: center;">Register</h3>    
       
            <label>Full Name:</label>
            <input type="text" name="full_name" class="input">
            <br>
            <label>Phone Number:</label>
            <input type="text" name="phone" class="input">
            <br>
            <label>Email Address:</label>
            <input type="text" name="email" class="input">
            <br>
            <label>Password:</label>
            <input type="password" name="password">
            <br>
            
            <div style="padding: 10px; text-align: center;">
             <button type="submit" name="register" class="register_btn"> Register </button>
             <br><br>
             <p>Already have an account? <a href="login.php" class="login">Sign in</a> here.</p>
            </div>   
   
        </form>
       
          
    </div>
</center>

<p id="footer">All content copyright © 2022, PEGVA.</p>  
   </body>
</html>
