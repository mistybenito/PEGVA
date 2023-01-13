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
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

 <body>
 <nav>
<p class="title">Cainta Catholic College</p>    
</nav>
<center>
    <div class="login-form">
    <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
    
        <form class="container"  action="logincode.php" method="POST">
        <div class="imgcontainer">                        
             <img src="images/admin.png" alt="Admin" class="avatar">
                <h3>Hello Admin! Welcome!</h3>
            </div>
      
            <label>Email:</label>
            <input type="text" name="email"  placeholder="Enter email" id="email">
            </br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter password">
            
            
            <div style="padding: 10px; text-align: center;">
                <input type="submit" name = "login_btn" value="Login" class="login_btn">
                <br><br>
                <a href="#" class="forgot">Forgot password?</a>
                <br>
                <a href="register.php" class="register">Register</a>
            </div>     
        </div>
        </form>

                <img src="images/ccc.png" alt="logo" class="ccc-logo">
          
    </div>
</center>

    <p id="footer">All content copyright © 2022, PEGVA.</p>
 
   </body>
</html>
