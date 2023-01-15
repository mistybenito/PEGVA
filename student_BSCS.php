<?php
    include("auth/ch-bscs_auth.php");
    include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BSCS Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div id="student-list">
        <p class="course-student-list">BSCS Student List</p>
        <input type="text" placeholder="Search.." class="text-search" >
            <label for="search" type="submit" class="searchbtn">
                <i class="fa fa-search"></i>
            </label>
            <table class="student-list-content">
                <tr>
                    <th>Student #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Verification</th>
                    <th>Verify</th>
                    <th>Profile</th>
                    <th>Delete</th>
                    
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
                    if ($row['Course'] == "Bachelor of Science in Computer Science")
                     {
                ?>
                    <td> <?= $row['Student_number']; ?> </td>
                    <td> <?= $row['Name']; ?> </td>
                    <td> <?= $row['Email']; ?> </td>
                    <td> <?= $row['Course']; ?> </td>
                    <td> <?= $row['verify'];?></td>
                    <td>    
                    <a href="verify_page.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color:#0054c7"> Verify </a>
                    </td>
                    <td>    
                    <a href="profile.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color:#0054c7"> View </a>
                    </td>
                    <td>
                    <button type="submit" name="delete_btn" id = "view_btn" class="btn btn-primary"> Delete </button>
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
            </table>
            </div>
            <p id="footer">All content copyright © 2022, PEGVA.</p>
    </body>
</html>