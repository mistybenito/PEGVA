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
        <form name="form1" method="post" action="verification_code.php">
		<table>
		<input type="hidden" name = "id" value = "<?=$key_child;?>">
		<input type ="hidden" name = "verify" value = "Verified">
		<input type ="hidden" name = "not_verify" value = "Not Verified">
		<input type ="hidden" name = "Grade" value = "0">

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
		<tr>
		<td>Year Level</td>
		<td>
            <select>
                <option value="">Year Level</option><!-- here -->
        		<option value="0">1st Year</option>
				<option value="2">2nd Year</option>
				<option value="4">3rd Year</option>
				<option value="6">4th Year</option>
            </select><!-- to here here -->
            </td>
		<tr>
		<tr>
		<td>Semester</td>
		<td><select>
                <option value="">Semester</option><!-- here -->
        		<option value="0">1st Semester</option>
				<option value="2">2nd Semester</option>
            </select><!-- to here here --></td>
			</tr>>
		</table>
		<center>
		<div id="btns">
            <button type="submit" name="yes_verify" id = "view_btn" class="btn btn-primary"> Verify </button>
			<button type="submit" name="no_verify" id = "view_btn" class="btn btn-primary"> Not Verify </button>
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
<p id="footer">All content copyright © 2022, PEGVA.</p>
    </body>
</html>