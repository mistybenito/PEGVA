<?php
    include("authentication.php");
    include("nav-new.php");
?>
<!DOCTYPE html>
<html>
<title> Remarks </title>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
<h2>Student Remarks</h2>
<br>
<!-- Drop downn section and options -->

<div class="grds">
<div class="content-selection">
  	<select id="mySelect" onchange="npup.doSelect(this);">
		<option value="">Year and Semester</option>
		<!-- the option values are suffixes for the elements to show -->
		<option value="0">1st Year, 1st Sem</option>
		<option value="1">1st Year, 2nd Sem</option>
		<option value="2">2nd Year, 1st Sem</option>
		<option value="3">2nd Year, 2nd Sem</option>
		<option value="4">3rd Year, 1st Sem</option>
		<option value="5">3rd Year, 2nd Sem</option>
		<option value="6">4th Year, 1st Sem</option>
		<option value="7">4th Year, 2nd Sem</option>
  	</select>
</div>
</div>
</center>
<!-- end of content-selection -->

<!-- container for any elements that are to be in the game -->
<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->

<div id="npup0" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">1st Year, 1st Sem</p>	
     
	<form name="form1" method="post" action="code.php">
<center>
	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/grades/first_year/first_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{

						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "7"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "7"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table>
		   
	</form>
  </div>
		</div>
 </center>





    <div id="npup1" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">1st Year, 2nd Sem</p>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/first_year/second_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
			?>
		</table> 
		   
		</form>
  </div>
		</div>
 </center>



    <div id="npup2" class="hidden" style="margin-left:300px">

<div>
<center> 
	<p style="font-size: 18px; margin-top: 20px;">2nd Year, 1st Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/second_year/first_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table> 
		</form>
  </div>
		</div>
 </center>

	<div id="npup3" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">2nd Year, 2nd Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/second_year/second_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table> 
		   
		</form>
  </div>
		</div>
 </center>







	<div id="npup4" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">3rd Year, 1st Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/third_year/first_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table> 
		   
		</form>
  </div>
		</div>
 </center>


	<div id="npup5" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">3rd Year, 2nd Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/third_year/second_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
			?>
		</table> 
		   
		</form>
  </div>
		</div>
 </center>



	<div id="npup6" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">4th Year, 1st Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php"   >

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/fourth_year/first_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table> 
		   
		</form>
  </div>
		</div>
 </center>

	<div id="npup7" class="hidden" style="margin-left:300px">

<div>

<center> 

	<p style="font-size: 18px; margin-top: 20px;">4th Year, 2nd Sem</p>
<center>	
     
	<form name="form1" method="post" action="code.php">

	<table class="view_grades">
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Unit</th>
				<th>Discriptive Title</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/fourth_year/second_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							
						?>
						<!-- 1 -->
						<tr>
						<td> <?= $fetchdata['sc1'];?> </td>
						<td> <?= $fetchdata['des1'];?> </td>
						<td> <?= $fetchdata['unit1'];?> </td>
						<td> <?= $fetchdata['grade1'];?> </td>
						</tr>

						<!-- 2 -->
						<tr>
						<td> <?= $fetchdata['sc2'];?> </td>
						<td> <?= $fetchdata['des2'];?> </td>
						<td> <?= $fetchdata['unit2'];?> </td>
						<td> <?= $fetchdata['grade2'];?> </td>
						</tr>



						<!-- 3 -->
						<tr>
						<td> <?= $fetchdata['sc3'];?> </td>
						<td> <?= $fetchdata['des3'];?> </td>
						<td> <?= $fetchdata['unit3'];?> </td>
						<td> <?= $fetchdata['grade3'];?> </td>
						</tr>

						<!-- 4 -->
						<tr>
						<td> <?= $fetchdata['sc4'];?> </td>
						<td> <?= $fetchdata['des4'];?> </td>
						<td> <?= $fetchdata['unit4'];?> </td>
						<td> <?= $fetchdata['grade4'];?> </td>
						</tr>

						<!-- 5 -->
						<tr>
						<td> <?= $fetchdata['sc5'];?> </td>
						<td> <?= $fetchdata['des5'];?> </td>
						<td> <?= $fetchdata['unit5'];?> </td>
						<td> <?= $fetchdata['grade5'];?> </td>
						</tr>

						<!-- 6 -->
						<tr>
						<td> <?= $fetchdata['sc6'];?> </td>
						<td> <?= $fetchdata['des6'];?> </td>
						<td> <?= $fetchdata['unit6'];?> </td>
						<td> <?= $fetchdata['grade6'];?> </td>
						</tr>

						<!-- 7 -->
						<tr>
						<td> <?= $fetchdata['sc7'];?> </td>
						<td> <?= $fetchdata['des7'];?> </td>
						<td> <?= $fetchdata['unit7'];?> </td>
						<td> <?= $fetchdata['grade7'];?> </td>
						</tr>

						<!-- 8 -->
						<tr>
						<td> <?= $fetchdata['sc8'];?> </td>
						<td> <?= $fetchdata['des8'];?> </td>
						<td> <?= $fetchdata['unit8'];?> </td>
						<td> <?= $fetchdata['grade8'];?> </td>
						</tr>

						<!-- 9 -->
						<tr>
						<td> <?= $fetchdata['sc9'];?> </td>
						<td> <?= $fetchdata['des9'];?> </td>
						<td> <?= $fetchdata['unit9'];?> </td>
						<td> <?= $fetchdata['grade9'];?> </td>
						</tr>

						<!-- 10 -->
						<tr>
						<td> <?= $fetchdata['sc10'];?> </td>
						<td> <?= $fetchdata['des10'];?> </td>
						<td> <?= $fetchdata['unit10'];?> </td>
						<td> <?= $fetchdata['grade10'];?> </td>
						</tr>
							<?php
			}
			else
			{
				?>
				<td colspan = "6"> Nothing Found </td>
				<?php
			}
		}
			else
					{
					?>
						<td colspan = "6"> No Record found </td> 
					<?php
			}
	
			

			?>
		</table> 
		</form>
  </div>
		</div>
 </center>


</div>

















<script>
window.npup = (function (containerId, baseId) {
    // save the container of your special element
    var elementsContainer = document.getElementById(containerId);
    function doSelect(select) {
        // get value of select
        var value = select.value;
        // find element based on the value of the select
        var selected = findElement(value);
        if (!selected) {return;} // didn't find the element, bail
        // do hiding/showing of elements
        hideAll(elementsContainer);
        showElement(selected);
    }
    // retrieve some element based on the value submitted
    function findElement(value) {
        return document.getElementById(baseId+value);
    }
    // hide all element nodes within some parent element
    function hideAll(parent) {
        var children = parent.childNodes, child;
        // loop all the parent's children
        for (var idx=0, len = children.length; idx<len; ++idx) {
            child = children.item(idx);
            // if element node (not comment- or textnode)
            if (child.nodeType===1) {
                // hide it
                child.style.display = 'none';
            }
        }
    }
    // display a certain element
    function showElement(element) {
        element.style.display = '';
    }
    // hide all on page load (might want some extra logic here)
    hideAll(elementsContainer);

    // export api to use from select element's onchange or so
    return {
        doSelect: doSelect
    };
})('mySpecialElements', 'npup'); // give the routine a container id of your special elements, and the base id of those elements
</script>


 
    <p id="footer">All content copyright © 2022, PEGVA.</p>
 
</body>
</html>