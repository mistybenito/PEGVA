<?php
    include('authentication.php');
	include('navbar.php');
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
	<form name="form1" method="post" action="code_addgrades_BSCS.php" >

    <legend>Subject Description</legend>

	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'Subjects/BSCS/first_year/first_sem/GE101';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "id" value = "<?=$key_child;?>">
		<tr> 
			<td>Course</td>
			<td><input type="text" name = "Course" value ="Bachelor of Science in Computer Science"></td>
		</tr>
		<tr> 
			<td>Subject Code</td>
			<td><input type="text" name = "Subject_code" value = "GE101"></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" value ="Contemporary World" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" value ="3" ></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name =  "Grade"></td>
		</tr>
		
		</table> 
		<center><button type="submit" name = " add_grades_ge101" id="update"> Save </button></center>
	</form>
	<?php
						}
						else
						{
						?>
							<td colspan = "5"> No Record found </td> 
						<?php
						}
					}
					else
						{
							?>
								<td colspan = "5"> No Record found </td> 
							<?php
						}
					?>
	 

</div>

</body>
    </html>