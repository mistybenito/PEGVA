<?php
    include('authentication.php');
    include("nav-new.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Edit Curriculum </title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
	<center>
<div id="subject_info">
	<form name="form1" method="post" action="CODE_edit-curriculum.php" >

    <center><h3>Subject Description</h3></center>

	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$course = $_GET['course'];
		$ref_table = 'course_curriculum';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "id" value = "<?=$key_child;?>">
			<input type="text" name = "course" value = "<?=$course;?>">

		<tr> 
			<td>Subject Code</td>
			<td><input type="text" name = "code" value ="<?=$getdata['code']?>"></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "descriptive_title" value ="<?=$getdata['descriptive_title']?>" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "units" value ="<?=$getdata['units']?>" ></td>
		</tr>
		
		</table> 
		<center><button type="submit" name = "edit_curric" id="update"> Save </button></center>
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
					</center>
</body>
    </html>