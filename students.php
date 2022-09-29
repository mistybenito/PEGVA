<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="students.css" rel="stylesheet" type="text/css">
        
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
                    <li><a href="ABREED1.php">ABREED</a></li>
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
        <h1>Student List</h1>
        <div id="div1">  
            <input type="text" placeholder="Search.." class="text-search" >
            <label for="search" type="submit" class="searchbtn">
                <i class="fa fa-search"></i>
            </label>
        </div>
        <div id="div2">
            <tbody>
            <table class="student-list-content" width="80%" border="0">
                <tr>
                    <th style="border-radius: 25px 0 0 0;">Student #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th style="border-radius: 0 25px 0 0;">Files</th>
                </tr>
            <?php
                include('dbcon.php');
                $ref_table = 'User';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if($fetchdata > 0)
                {
                $i = 0;
                foreach($fetchdata as $key => $row)
                {
            ?>
            <tr>
                <td> <?= $row['Student_number'];?> </td>
                <td> <?= $row['Name'];?> </td>
                <td> <?= $row['Email'];?> </td>
                <td> <?= $row['Course'];?> </td>
                <td>
                <a href="profile.php? id=<?=$key?>" class = "btn btn btn-primary" style="color=black;"> View </a>
                </td>
            </tr>
            <?php
                }
                }
                else
                {
            ?>
            <tr>
                <td > No Record Found </td>
            </tr>
            <?php
                }
            ?>
         </tbody>
            </table>
            </div>
        <div  id="footer">
        <p>All content copyright © 2022, PEGVA.</p>
        </div>
    </body>
</html>