<?php
    include_once("dbcon.php");
	include("navbar.php");
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
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
	</form>

</div>	

<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>	
</body>
</html>
