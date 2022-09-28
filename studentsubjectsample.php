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
<h1>Adding Subject</h1>
    <div id="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
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
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
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
	<center><button type="submit" name="TEST" id="update"  value = "TEST"> Add Subject </button></center></div>
</fieldset>
</body>
</html>