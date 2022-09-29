<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Curriculum</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="curriculum.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Edit Curriculum</h1>
    <div id="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:500px;">
	
<fieldset>
	<legend>Curriculum</legend>
		<label for="courses">Course:</label>
			<select name="courses[]" id="courses">
				<option value = "BSEDENG">BSED-ENG</option>
				<option value = "BSCS">BSCS</option>
				<option value = "ABREED">ABREED</option>
				<option value = "BSEDSCI">BSED-SCI</option>
				<option value = "BSEDMATH">BSED-MATH</option>
				<option value = "BEED">BEED</option>
				<option value = "BSBA">BSBA</option>
				<option value = "BSOA">BSOA</option>
			</select>
		<label for="yearlevel">Year Level:</label>
			<select name="yearlevel[]" id="yearlevel">
				<option value="first">First Year</option>
				<option value="second">Second Year</option>
				<option value="third">Third Year</option>
				<option value="fourth">Fourth Year</option>
			</select>
		<label for="sem">Semester:</label>
			<select name="semester[]" id="semester">
				<option value="onesem">1st Semester</option>
				<option value="twosem">2nd Semester</option>
			</select>		   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Pre-Requisite</th>
		</tr>
			<?php
			include('dbcon.php');
			//COURSES		
			$courses = filter_input(INPUT_POST, "courses");
			$BSCS = filter_input(INPUT_POST, "BSCS");
			$ABREED = filter_input(INPUT_POST, "ABREED");
			$BSEDSCI = filter_input(INPUT_POST, "BSEDSCI");
			$BSEDMATH = filter_input(INPUT_POST, "BSEDMATH");
			$BSEDENG = filter_input(INPUT_POST, "BSEDENG");
			$BEED = filter_input(INPUT_POST, "BEED");
			$BSBA = filter_input(INPUT_POST, "BSBA");
			$BSOA= filter_input(INPUT_POST, "BSOA");
			//yearlevel
			$yearlevel = filter_input(INPUT_POST, "yearlevel");
			$first = filter_input(INPUT_POST, "first");
			$second = filter_input(INPUT_POST, "second");
			$third = filter_input(INPUT_POST, "third");
			$fourth = filter_input(INPUT_POST, "fourth");
			//semester
			$semester = filter_input(INPUT_POST, "semester");
			$onesem = filter_input(INPUT_POST, "onesem");
			$twosem = filter_input(INPUT_POST, "twosem");
			switch($courses)
			{
				case "$BSCS":
				{
					switch($yearlevel)
					{
						case "$first":
							{
								switch($semester)
								{
									case "$onesem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/First Year/1st Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
									case "$twosem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/First Year/2nd Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
								}
								break;
							}
						case "$second":
							{
								switch($semester)
								{
									case "$onesem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Second Year/1st Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
									case "$twosem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Second Year/2nd Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
								}
								break;
							}
					}
					break;
				}
				case "$BSEDENG":
					{
						switch($yearlevel)
					{
						case "$first":
							{
								switch($semester)
								{
									case "$onesem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Education in English/First Year/1st Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
									case "$twosem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Education in English/First Year/2nd Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
								}
								break;
							}
						case "$second":
							{
								switch($semester)
								{
									case "$onesem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Education in English/Second Year/1st Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
									case "$twosem":
										{
											$ref_table = "Course&Curriculum/Bachelor of Education in English/Second Year/2nd Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											break;
										}
								}
								break;
							}
					}
					break;
					}
			}
			?>
		</table> 
</center>
	</form>
</fieldset>

</div>	
<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
</body>
</html>
