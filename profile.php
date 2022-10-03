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
        <link href="profile1.css" rel="stylesheet" type="text/css">
        
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
                    <li><a href="#">BEED</a></li>
                    <li><a href="#">BSED-ENG</a></li>
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
    <h2>Student Information</h2>

    <div class="div1">
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
        <form name="form1" method="post" action="code.php"  style="height:600px;">
		<table>
		<input type="hidden" name = "key" value = "<?=$key_child;?>">
        <tr> 
			<td>Fullname:</td>
			<td><input type="text" name="Name" value = "<?=$getdata['Name']; ?>" ></td>
		</tr>
		<tr> 
			<td>Phone No.:</td>
			<td><input type="text" name="Contact_Number" value = "<?=$getdata['Contact_Number']; ?>" ></td>
		</tr>
        <tr> 
			<td>Address:</td>
			<td><input type="text" name="Address" value = "<?=$getdata['Address']; ?>" ></td>
		</tr>
		<tr> 
			<td>Birthdate:</td>
			<td><input type="date" name="Birthday" value = "<?=$getdata['Birthday'];?>" ></td>
		</tr>
		<tr> 
			<td>Mother's Fullname:</td>
			<td><input type="text" name="Mother" value = "<?=$getdata['Mother']; ?>" ></td>
		</tr>
		<tr> 
			<td>Phone no. of Mother:</td>
			<td><input type="text" name="Mother_number" value = "<?=$getdata['Mother_number']; ?>" ></td>
		</tr>
		<tr> 
			<td>Father's Fullname:</td>
			<td><input type="text" name="Father" value = "<?=$getdata['Father']; ?>" ></td>
		</tr>
		<tr>
			<td>Phone no. of Father:</td>
			<td><input type="text" name="Father_number" value = "<?=$getdata['Father_number']; ?>" ></td>
		</tr>
		</table> 
        <center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<a href="view_grades.php?id=<?=$key_child?>"> View Grades </a>

		<a href="add_grades.php?id=<?=$key_child?>"> Add Grades </a>
		
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