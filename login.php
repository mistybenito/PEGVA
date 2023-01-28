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

<body style="background: linear-gradient(157deg, #111d3c, #014a99, #3b89ba, #4bb0e8); background-repeat: no-repeat; background-attachment: fixed;">

<nav>
    <p class="title"><img src="images/logo.png" alt="Admin" class="avatar">Cainta Catholic College</p>    
</nav>
<center>
    <div id="login-form">
    <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
    
        <form class="container"  action="logincode.php" method="POST">
        <div class="imgcontainer">                        
            <img src="images/pegva.png" alt="logo" style="width:50px; ">
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

                
    </div>
</center>
 
   </body>
</html>
