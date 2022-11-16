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
			$ref_table = 'verify';
			$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
			if($getdata > 0)
			{
	?>
        <form name="form1" method="post" action="verification_code.php"  style="height:500px;">
		<table>
		<input type="hidden" name = "id" value = "<?=$key_child;?>">

        <tr> 
			<td>Student Number:</td>
			<td><input type="text" id="name" name="Student_number" value = "<?=$getdata['Student_number']; ?>" class="form-control"></td>
		</tr>
        <tr> 
			<td>Fullname:</td>
			<td><input type="text" id="name" name="Name" value = "<?=$getdata['Name']; ?>" class="form-control"></td>
		</tr>
        <tr> 
			<td>Course:</td>
			<td><input type="text" id="name" name="Course" value = "<?=$getdata['Course']; ?>" class="form-control"></td>
		</tr>
        <tr> 
			<td>Email:</td>
			<td><input type="text" id="name" name="Email" value = "<?=$getdata['Email']; ?>" class="form-control"></td>
		</tr>
        <tr> 
			<td>Address:</td>
			<td><input type="text" id="address" name="Address" value = "<?=$getdata['Address']; ?> "class="form-control" ></td>
		</tr>
		<tr> 
			<td>Phone No.:</td>
			<td><input type="text" id="num" name="Contact_Number" value = "<?=$getdata['Contact_Number']; ?>" class="form-control">
			&emsp;
			Birthdate:
				<input type="date" name="Birthday" value = "<?=$getdata['Birthday'];?>" class="form-control">
			</td>
		</tr>
		<tr> 
			<td>Mother's Fullname:</td>
			<td><input type="text" id="mother" name="Mother" value = "<?=$getdata['Mother']; ?>" class="form-control">
			&emsp;
			Phone no. of Mother:
				<input type="text" id="num" name="Mother_number" value = "<?=$getdata['Mother_number']; ?>" class="form-control">
			</td>
		</tr>
		<tr> 
			<td>Father's Fullname:</td>
			<td><input type="text" id="father" name="Father" value = "<?=$getdata['Father']; ?>" class="form-control">
			&emsp;
			Phone no. of Father:
				<input type="text" id="num" name="Father_number" value = "<?=$getdata['Father_number']; ?>" class = "form-control">
			</td>
		</tr>
		</table>
		<center>
		<div id="btns">
            <button type="submit" name="verify_contact" id = "view_btn" class="btn btn-primary"> Verify </button>
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