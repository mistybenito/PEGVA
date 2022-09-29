<?php
    include_once("dbcon.php");
	include("navbar.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="subjects.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2>Adding Subject</h2>
<div id="div1">
	
<form name="form1" method="post" action="code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
		
	<table>
		
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
	</table> 
	</form>
	<center><button type="submit" name="add_subject_bscs_1y_2s" id="update"  value = "add_subject"> Add Subject </button></center></div>
</fieldset>
</div>
<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>	
</body>
</html>
