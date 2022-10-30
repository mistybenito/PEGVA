<?php
    include_once("dbcon.php");
	include("navbar.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Curriculum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="profile1.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <h2>Student Information</h2>

    <div class="div1">
    <?php
	include('dbcon.php');
	if(isset($_GET['id']))
	{
			$key_child = $_GET['id'];
			$ref_table = 'course_curriculum/bscs/first_year/first_sem';
			$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
			if($getdata > 0)
			{
	?>
        <form name="form1" method="post" action="code.php"  style="height:500px;">
		<table>
		<input type="hidden" name = "id" value = "<?=$key_child;?>">
        <tr> 
			<td>Course Code: </td>
			<td><input type="text" id="name" name="Name" value = "<?=$getdata['code']; ?>" class="form-control"></td>
		</tr>
        <tr> 
			<td>Descriptive Title: </td>
			<td><input type="text" id="address" name="Address" value = "<?=$getdata['descriptive_title']; ?> "class="form-control" ></td>
		</tr>
		<tr> 
			<td>Units: </td>
			<td><input type="text" id="num" name="Contact_Number" value = "<?=$getdata['units']; ?>" class="form-control">
		</tr>
		</table>
		<center>
		<div id="btns">
			<button type="submit" name="update_curriculum" id = "view_btn" class="btn btn-primary"> Update </button>
			<input type="button" onclick="window.location.href='view_grades.php?id=<?=$key_child;?>'" id="view_btn" value="View Grades"/>
			<input type="button" onclick="window.location.href='add_grades.php?id=<?=$key_child;?>'" id="add_grade_btn" value="Add Grades"/>
		</div>
		</center>
	</form>
        
    <?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
</div>
<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
    </body>
</html>