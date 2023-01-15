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
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <div id="profile">
	<p style="font-size: 18px; font-weight: bold; padding: 12px 0px 0px 10px;">Student Information</p>
    <?php
	include('dbcon.php');
	if(isset($_GET['id']))
	{
			$key_child = $_GET['id'];
			$ref_table = 'User';
			$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
			if($getdata > 0)
			{
	?>
         <form name="form1" method="post" action="code.php"  >
		<table id="student-info">
		<input type="hidden" name = "id" value = "<?=$key_child;?>">
        
		<tr> 
			<td>Fullname:</td>
			<td><input type="text" id="name" name="Name" value = "<?=$getdata['Name']; ?>" class="form-control"></td>
		</tr>
		<tr> 
			<td>Email:</td>
			<td><input type="text" id="email" name="Email" value = "<?=$getdata['Email']; ?> "class="form-control" ></td>
		</tr>
		<tr> 
			<td>Student Number:</td>
			<td><input type="text" id="stud_num" name="Student_Number" value = "<?=$getdata['Student_number']; ?> "class="form-control" ></td>
		</tr>
		<tr> 
			<td>Course:</td>
			<td><input type="text" id="course" name="Course" value = "<?=$getdata['Course']; ?>" class="form-control"></td>
		</tr>
		
        <tr> 
			<td>Address:</td>
			<td><input type="text" id="address" name="Address" value = "<?=$getdata['Address']; ?> "class="form-control" ></td>
		</tr>
		<tr>
			<td>Birthdate:</td>
			<td><input type="date" name="Birthday" value = "<?=$getdata['Birthday'];?>" class="form-control"></td>
		</tr>
		<tr> 
			<td>Contact Number:</td>
			<td><input type="text" id="num" name="Contact_Number" value = "<?=$getdata['Contact_Number']; ?>" class="form-control">
		</tr>
		<tr> 
			<td>Mother's Fullname:</td>
			<td><input type="text" id="mother" name="Mother" value = "<?=$getdata['Mother']; ?>" class="form-control">
		</tr>
		<tr> 
			<td>Father's Fullname:</td>
			<td><input type="text" id="father" name="Father" value = "<?=$getdata['Father']; ?>" class="form-control">
		</tr>
		<tr> 
			<td>Contact Person incase of emergency:</td>
			<td><input type="text" id="emergency" name="Emergency" value = "<?=$getdata['Emergency_name']; ?>" class="form-control">
		</tr>
		<tr> 
			<td>Contact number:</td>
			<td><input type="text" id="emergency_num" name="Emergency_num" value = "<?=$getdata['Emergency_number']; ?>" class="form-control">
		</tr>
		
		</table>
		<center>
		<div id="btns">
			<button type="submit" name="update_contact" id = "update"> Update </button>
			<input type="button" onclick="window.location.href='view_grades.php?id=<?=$key_child;?>'" id="view_btn" value="View Grades"/>
			<input type="button" onclick="window.location.href='add_grades.php?id=<?=$key_child;?>'" id="add_grade_btn" value="Add Grades"/>
			<button id="delete_btn">Delete</button>
		</div>
		</center>
	</form>
        
    <?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: registrar.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: registrar.php');
			exit();
		}
	?>
</div>
<p id="footer">All content copyright © 2022, PEGVA.</p>
    </body>
</html>