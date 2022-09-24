<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="practice.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="chckbtn">
                <i class="fa fa-bars"></i>
            </label>
            <label class="title">Cainta Catholic College</label>
            <ul class="main-navigation">
                <li><a href="students.php">Student List</a></li>
                <li><a href="#">Curriculum</a>
                <ul class="course">
                    <li><a href="ABREED.php">ABREED</a></li>
                    <li><a href="#">BEED</a></li>
                    <li><a href="#">BSED-ENG</a></li>
                    <li><a href="#">BSED-MATH</a></li>
                    <li><a href="#">BSED-SCI</a></li>
                    <li><a href="#">BSBA</a></li>
                    <li><a href="BSCS.php">BSCS</a></li>
                    <li><a href="#">BSOA</a></li>
                </ul>
                </li>
                <li><a href="practice.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <center>
        <div>
            <img src="images/logo4.png" class="logo4">
        </div>
        </center>
        <div  id="footer">
        <p>All content copyright © 2022, PEGVA.</p>
        </div>
    </body>
</html>