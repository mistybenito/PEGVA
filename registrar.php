<?php
    include("authentication.php");
	include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="reg.css" rel="stylesheet" type="text/css">
    </head>

<body>
    <center>
    <div class="div1">
        <img src="images/logo.png" id="logo">
    </div>
    </center>
    
    <div id="id01" class="modal">    
        <form class="modal-content animate"  action="#" method="POST">                   
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               
                <img src="images/students.png" alt="Students" class="avatar">
                <h2>Student List</h2>
            </div>
        <div class="div3">  
            <input type="text" placeholder="Search.." class="text-search" >
            <button type="submit" class="searchButton">
        </div>             
    <center>
        <table class="student-list-content">
            <tr>
                <th>Student #</th>
	            <th>Name</th>
	            <th>Email</th>
	            <th>Course</th>
	            <th>Files</th>
            </tr>
         <tbody>
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
                <a href="stprofile.php? id=<?=$key?>" class = "btn btn btn-primary" style="color=black;"> View </a>
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
    </center>
         </form>
    </div>
    <center>
    <div id="id02" class="modal2">
     <div class="modal-content2 animate"  action="#" method="POST" style="height:550px;">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/curriculum.png" alt="Students" class="avatar">
            <h2>Choose course to edit curriculum..</h2>
        </div>
    <center>
        <div class="courses">
        <a href="ABREED.php" class="cards__course"><p>ABREED</p><img src="images/curriculum.png" alt="abreed" class="course-avtr"></a>
        <a href="BSED-SCI.php" class="cards__course"><p>BSED-SCI</p><img src="images/curriculum.png" alt="bsed-sci" class="course-avtr"></a>
        <a href="BSED-MATH.php" class="cards__course"><p>BSED MATH</p><img src="images/curriculum.png" alt="bsed-math" class="course-avtr"></a>
        <a href="BSED-ENG.php" class="cards__course"><p>BSED-ENG</p><img src="images/curriculum.png" alt="bsed-eng" class="course-avtr"></a>
        <a href="BEED.php" class="cards__course"><p>BEED</p><img src="images/curriculum.png" alt="beed" class="course-avtr"></a>
        <a href="BSCS_1y_1s.php" class="cards__course"><p>BSCS</p><img src="images/curriculum.png" alt="bscs" class="course-avtr"></a>
        <a href="BSBA" class="cards__course"><p>BSBA</p><img src="images/curriculum.png" alt="bsba" class="course-avtr"></a>
        <a href="BSOA" class="cards__course"><p>BSOA</p><img src="images/curriculum.png" alt="bsoa" class="course-avtr"></a>
        
        </div> 
            </center>      
     </div>
    </div>
            </center>
</body> 
</html>
           


