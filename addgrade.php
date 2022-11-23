<?php
    include_once("dbcon.php");
	include("navbar.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Subject and Grades </title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="addgrade.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
<div id="subject_info">
	<form name="form1" method="post" action="add_grade_code.php" >

    <legend>Subject Description</legend>

	<table>

			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Subject Code</td>
			<td><input type="text" name = " " ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = " " ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = " " ></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	 
<center><button type="submit" id="update"> Save </button></center>
</div>

</body>
    </html>