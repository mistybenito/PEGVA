<?php
    include("auth/ed_math_auth.php");
    include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BSED-Math Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="students.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <h1>BSED-Math Student List</h1>
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
                    <th>Verification</th>
                    <th>Verify</th>
                    <th>Profile</th>
                    
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
                <?php
                    if ($row['Course'] == "Bachelor in Secondary Education, Major in Math")
                     {
                ?>
                    <td> <?= $row['Student_number']; ?> </td>
                    <td> <?= $row['Name']; ?> </td>
                    <td> <?= $row['Email']; ?> </td>
                    <td> <?= $row['Course']; ?> </td>
                    <td> <?= $row['verify'];?></td>
                    <td>    
                    <a href="verify_page.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color=black"> Verify </a>
                    </td>
                    <td>    
                    <a href="profile.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color=black"> View </a>
                    </td>
                </tr>                
            <?php
                    }
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