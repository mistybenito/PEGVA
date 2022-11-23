<?php
    include('authentication.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title> Subject and Grades </title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../profile1.css" rel="stylesheet" type="text/css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <div id="div1">
	
	<form name="form1" method="post" action="code_addgrades_BSCS.php"  style="height:550px;">
	<center>
<fieldset>
    <legend>Subject Description</legend>
    <center>CS111</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'Subjects/BSCS/first_year/first_sem/CS111';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
			<input type="hidden" name= "id" value="<?=$key_child;?>">


				<div class="form-group mb-3">
				<label for="">Course</label>
				<input type="text" name="Course" value = "BSCS" class="form-control">
				</div>

				<div class="form-group mb-3">
				<label for="">Subject Code</label>
				<input type="text" name="Subject_code" value = "CS111" class="form-control">
				</div>

				<div class="form-group mb-3">
				<label for="">Description Title</label>
				<input type="text" name="Desc_title" value = "Introduction to Computing" class="form-control">
				</div>

				<div class="form-group mb-3">
				<label for="">Unit</label>
				<input type="text" name="Unit" value ="3" class="form-control">
				</div>

				<div class="form-group mb-3">
				<label for="">Grade</label>
				<input type="text" name="Grade" class="form-control">
				</div>

				<div class="form-group mb-3">
				<button type="submit" name="add_grades_cs111" class="btn btn-primary"> Save Contact </button>
				</div>
						</table> 
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
				</fieldset>
				</center>
				</div>