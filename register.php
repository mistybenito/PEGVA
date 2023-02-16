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

    <body style="background: linear-gradient(157deg, #111d3c, #014a99, #3b89ba, #4bb0e8); background-repeat: no-repeat; background-attachment: fixed;">

<nav>
    <p class="title"><img src="images/logo.png" alt="Admin" class="avatar">Cainta Catholic College</p>    
</nav>
<center>
 <div class="register-form">   
    
     <form class="register-container"  action="CODE_register.php" method="POST">
        <h3>Register</h3>  
       
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
            <input type="password" name="password" class = "input">
            <br>

            <br>
            <label>Secret Code:</label>
            <input type="password" name="seccode" class = "input">
            <br>

            
            <div style="padding: 10px; text-align: center;">
             <button type="submit" name="register_btn" class="register_btn"> Register </button>
             <br><br>
             <p>Already have an account? <a href="login.php" class="login">Sign in</a> here.</p>
            </div>   
   
        </form>
       
          
    </div>
</center>

<p id="footer">All content copyright © 2022, PEGVA.</p>  
   </body>
</html>
