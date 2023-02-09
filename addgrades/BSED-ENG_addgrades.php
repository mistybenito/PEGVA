<?php
    include('authentication.php');
	include("nav-new.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Subject and Grades </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<center>
<div id="subject_info">
	<form name="form1" method="post" action="code_addgrades.php" >

    <center><legend>Subject Description</legend></center>

	<table>
	<?php
		$key_child = $_GET['id'];
		$scode = $_GET['Subject_code'];
		$ccode = $_GET['ref'];
		$sub = $_GET['sub'];
		$where = $_GET['where'];
        $ref = $ccode;
        $getdata = $database->getReference($ref)->getValue();
				if ($getdata > 0) {
					if ($scode == $getdata['code']) {
							?>
						<input type="hidden" name = "id" value = "<?= $key_child; ?>">
						<input type="hidden" name = "Grade" value = "1">
						<input type="hidden" name = "reference" value = "<?= $ccode;?>">
						<input type="hidden" name = "sub" value = "<?= $sub;?>">
						<input type="hidden" name = "where" value = "<?= $where;?>">
					<tr> 
						<td>Course</td>
						<td><input type="text" name = "Course" value = "Bachelor of Secondary Education, Major in English"></td>
					</tr>
					<tr> 
						<td>Subject Code</td>
						<td><input type="text" name = "Subject_code" value = "<?= $getdata['code'] ?>"></td>
					</tr>
					<tr> 
						<td>Descriptive Title</td>
						<td><input type="text" name = "Desc_title" value ="<?= $getdata['descriptive_title'] ?>" ></td>
					</tr>
					<tr> 
						<td>Unit</td>
						<td><input type="text" name = "Unit" value ="<?= $getdata['units']; ?>" ></td>
					</tr>
					<tr> 
						<td><label for="<?= $getdata['grade']; ?>"></label>
							<select name="<?= $getdata['grade']; ?>" id="<?= $getdata['grade']; ?>">
								<option value="">--- Choose a grade---</option>
								<option value="1.0">1.0</option>
								<option value="1.5">1.5</option>
								<option value="2.0">2.0</option>
								<option value="2.5">2.5</option>
								<option value="3.0">3.0</option>
								<option value="5.0">5.0</option>
							</select></td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $getdata['code']; ?>" id="update"> Save <?= $getdata['code']; ?> </button></center>
				</form>
				<?php
						}
					}
	
?>

</div>
				</center>
</body>
    </html>