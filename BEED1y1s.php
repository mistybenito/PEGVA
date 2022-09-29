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
        <link href="curriculum-style.css" rel="stylesheet" type="text/css">
        
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
                    <li><a href="BEED1y1s.php">BEED</a></li>
                    <li><a href="BSED-ENG.php">BSED-ENG</a></li>
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
	<h2>Curriculum</h2>
    <div class="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BEED</p>
		<label>Year Level:</label>
			<select name="yearlevel[]" id="yearlevel">
				<option value="first">First Year</option>
				<option value="sec">Second Year</option>
				<option value="third">Third Year</option>
				<option value="fourth">Fourt Year</option>
			</select>
		<label>Semester:</label>
			<select name="semester[]" id="semester">
				<option value="onesem">1st Semester</option>
				<option value="twosem">2nd Semester</option>
			</select>		   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Pre-Requisite</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/First Year/1st Sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['Course_Code']; ?></td>
			<td><?=$row['Desc_title']; ?></td>
			<td><?=$row['Unit']; ?></td>
			<td><?=$row['Pre-Req']; ?></td>
		</tr>
			<?php
				}
			}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
	</form>

</div>	

<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>	
</body>
</html>
