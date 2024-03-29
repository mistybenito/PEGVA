<?php
    include("authentication.php");
    include("navbar.php");
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
    <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
    <body>
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
                    <th>Database #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Profile</th>
                </tr>
            <?php
                include('dbcon.php');
                $ref_table = 'verify';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if($fetchdata > 0)
                {
                $i = 0;
                foreach($fetchdata as $key => $row)
                {
            ?>
            <tr>
                <td> <?= $row['Student_number'];?> </td>
                <td> <?=$key;?> </td>
                <td> <?= $row['Name'];?> </td>
                <td> <?= $row['Email'];?> </td>
                <td> <?= $row['Course'];?> </td>
                <td> 
                <a href="verify_page.php?id=<?=$key;?>" class = "btn btn btn-primary" style="color=black"> View </a>
                </td>
            </tr>
            <?php
                }
                }
                else
                {
            ?>
            <tr>
                <td colspan = "6"> <center> No Record Found</center> </td>
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