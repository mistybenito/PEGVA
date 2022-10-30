<?php
include_once("dbcon.php");
    session_start();
    if(isset($_SESSION['verified_user_id']))
        {
            $_SESSION['status'] = "You are already logged in.";
            header('Location: reg.php');
            exit();
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
<style>
           
@font-face
{
    font-family: 'Nunito-VariableFont_wght';
    src: url('fonts/Nunito-VariableFont_wght.ttf');
}
body
{
    font-family: 'Nunito-VariableFont_wght';
    background-image:url("images/bground.png");
    background-attachment: fixed; 
	background-position: center; 
	background-size: cover;
    margin: 0;
	padding: 0;
}
.logo
{
    display: inline-block;
}
div.div1
{
    margin-top: -40%;
    margin-left: 50%;
    overflow: hidden;
}
div.div2
{   
    height: 450px;
    margin-top: 9%;
    background-color: white;
    width: 50%;
    border-radius: 25px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.container
{
    position: relative;
    display: block;
    width: 38%;
    margin-right: 50%;
    overflow: hidden;
    border-radius: 25px;
    text-align: -webkit-left;
}
.nav
{
    text-align: center;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text], input[type=password] 
{
    width: -webkit-fill-available;
    padding: 7px 11px;
    margin: 7px 0;
    border: 1px solid #ccc;
    border-radius: 20px;
}
.button
{
    background-color: #214198;
    color: white;
    padding: 12px 0px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: -webkit-fill-available;
    border-radius: 20px;
    letter-spacing: 6px;
}
.button:hover 
{
    opacity: 0.8;
}
.forgot
{  
    text-decoration: none;
    color: #e03434;
}
.register
{  
    text-decoration: none;
    color: #214198;
}
.imgcontainer 
{
    text-align: center;
    margin-top: 5px;
}
img.avatar 
{
    width: 13%;
    border-radius: 50%;
}
#footer 
{
    background-color: #0c2a7a;
    text-align: center;
    line-height: 60px;
    color: white;
    margin: 0;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}
@media (max-width: 952px)
{
    label.title
    {
        font-size: 30px;
    }
    nav ul li a
    {
        font-size: 16px;
    }
    .logo4
    {
        width: 250px;
    }
}
@media (max-width: 858px)
{   
    .chckbtn
    {
        display: block;
    }
    #logo
    {   
        overflow: none;
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #214198;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
    }
    nav ul li
    {
        display: block;
    }
    nav ul li a
    {
        font-size: 20px;
        margin: 50px 0;
        line-height: 30px; 
    }
    a:hover
    {
        background: none;
        color: #0082e6;
        box-shadow: 0px 15px 20px #182f6f;
        transform: translateY(-7px);
    }
}
.login-form
{
    font-size: 14px;
}
.back
{
    border: none;
    background: transparent;
    cursor: pointer;
    position: relative;
    margin-left: -90%;
    margin-top: 25px;
    font-size: 18px;
}
</style>
    </head>

 <body>
    <div class="nav">
        <p style="color: #ffffff; text-align: center; font-weight: bold; letter-spacing:5px;" >Cainta Catholic College</p>
    </div>
<center>
    <div class="div2">
    <a href="index.php">
    <button class="back">
        <i class="fa fa-arrow-left"></i>
    </button>
</a>
        <form class="container"  action="logincode.php" method="POST">                       
        
        <h3>Register</h3>
          
        <div class="login-form">
            <label for ="">Full Name:</label>
            <input type="text" name="full_name" class = "form-control">
            <br>
            <label for ="">Phone Number:</label>
            <input type="text" name="phone" class = "form-control">
            <br>
            <label for ="">Email Address:</label>
            <input type="text" name="email" class = "form-control">
            <br>
            <label for ="">Password:</label>
            <input type="password" name="password" class = "form-control">
            <br>
            
            <div style="padding: 10px; text-align: center;">
            <button type="submit" name="register_btn" class="btn btn-primary"> Register </button>
            </div>   
        </div>
        </form>
            <div class="div1">
                <img src="images/ccc.png" alt="logo" class="logo">
            </div>
    </div>
</center>
<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>  
   </body>
</html>
