<?php
    include("authentication.php");
	include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BSCS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="curriculum-style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>


	<h2>Curriculum</h2>
    <div class="div1">
	
	<form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>
		<label>Year Level and Semester:</label>
			<select id="yearlevel" onchange="npup.doSelect(this);">
				<option>-- Year and Semester --</option>
				<option value="0">1st Year, First Sem</option>
      			<option value="1">1st Year, Second Sem</option>
      			<option value="2">2nd Year, First Sem</option>
	  			<option value="3">2nd Year, Second Sem</option>
	  			<option value="4">3rd Year, First Sem</option>
	  			<option value="5">3rd Year, Second Sem</option>
	  			<option value="6">4th Year, First Sem</option>
	  			<option value="7">4th Year, Second Sem</option>
			</select>		   
<center>
	<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
    <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control"></input>
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control"></input>
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control"></input>
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control"></input>
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control"></input>
					<input type="hidden" name="Grade" value= "0" class= "form-control"></input>

		<tr class ="cs111">
			<td>CS111</td>
			<td>Introduction to Computing</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs111_a"> 
            	<label for="cs111" id ="cs111-b"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs112">
			<td>CS112</td>
			<td>Computer Programming 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs112_a"> 
            	<label for="cs112" id ="cs112-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="ge100">
			<td>GE100</td>
			<td>Understanding the Self</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_ge100_a"> 
					<label for="ge100" id ="ge100-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="ge101">
			<td>GE101</td>
			<td>Contemporary World</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge101_a"> 
				<label for="ge101" id ="ge100-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="ge102">
			<td>GE102</td>
			<td>Reading in the Philippine History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge102_a"> 
					<label for="ge102" id ="ge102-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="ge103">
			<td>GE103</td>
			<td>Reading in the Philippine History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge103_a"> 
					<label for="ge103" id ="ge103-a"></label>
				</input>
            </td>
		</tr>

        <tr class ="ge104">
			<td>GE104</td>
			<td>Math in the Modern World</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge104_a"> 
					<label for="ge104" id ="ge104-a"></label>
			</input>
			</td>
		</tr>

        <tr class ="fil111">
			<td>FIL111</td>
			<td>Malayuning Komunikasyon</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_fil111_a"> 
					<label for="fil111" id ="fil111-a"></label>
			</input>
			</td>
		</tr>

        <tr class ="reed111">
			<td>REED111</td>
			<td>Salvation History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_reed111_a"> 
					<label for="reed111" id ="fil111-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="pe111">
			<td>PE111</td>
			<td>Gymnastics</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_pe111_a"> 
					<label for="pe111" id ="fil111-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="nstp1">
			<td>NSTP1</td>
			<td>National Service Training Program 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_nstp1_a"> 
					<label for="nstp1" id ="fil111-a"></label>
			</input>
            </td>
		</tr>

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>    
	</center>
	</form>
    </div>











    <div id="npup1" class="hidden">
      <h3>BSCS 1st Year, Second Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">		   
<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs121">
			<td>CS121</td>
			<td>Software Applications</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs121_a"> 
            	<label for="cs121" id ="cs121-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs122">
			<td>CS122</td>
			<td>Computer Programming 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs122_a"> 
            	<label for="cs122" id ="cs122-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="ge104">
			<td>GE104</td>
			<td>Purposive Communication</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_ge104_a"> 
					<label for="ge104" id ="ge104-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="ge105">
			<td>GE105</td>
			<td>Ethics and Logic</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge105_a"> 
				<label for="ge105" id ="ge105-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="ge106">
			<td>GE106</td>
			<td>Science, Technology, and Society</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge106_a"> 
					<label for="ge106" id ="ge106-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="ge107">
			<td>GE107</td>
			<td>Arts Appreciation</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge107_a"> 
					<label for="ge107" id ="ge107-a"></label>
				</input>
            </td>
		</tr>

        <tr class ="fil121">
			<td>FIL121</td>
			<td>Masining na Pagpapahayag</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_fil121_a"> 
					<label for="fil121" id ="fil121-a"></label>
			</input>
			</td>
		</tr>

        <tr class ="reed121">
			<td>REED121</td>
			<td>Church and Sacraments</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_reed121_a"> 
					<label for="reed121" id ="fil121-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="pe121">
			<td>PE121</td>
			<td>Rhytmic Activities</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_pe121_a"> 
					<label for="pe1121" id ="pe121-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="nstp21">
			<td>NSTP2</td>
			<td>National Service Training Program 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_nstp2_a"> 
					<label for="nstp2" id ="nstp2-a"></label>
			</input>
            </td>
		</tr>

		<input type="submit" value="Submit" class = "btn btn-primary">
			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center><!-- TO HERE -->

</form>
</div>









    <div id="npup2" class="hidden">
      <h3>BSCS 2nd Year, First Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs211">
			<td>CS211</td>
			<td>Object-oriented Programming 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs211_a"> 
            	<label for="cs211" id ="cs211-b"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs212">
			<td>CS212</td>
			<td>Information Management 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs212_a"> 
            	<label for="cs212" id ="cs212-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs213">
			<td>CS213</td>
			<td>Data Structures</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_cs213_a"> 
					<label for="cs213" id ="cs213-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs214">
			<td>CS214</td>
			<td>Discrete Structures</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs214_a"> 
				<label for="cs214" id ="cs214-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="ge108">
			<td>GE108</td>
			<td>Rizal's Life and Works</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge108_a"> 
					<label for="ge108" id ="ge108-a"></label>
				</input>
            </td>
		</tr>

		<tr class ="ge109">
			<td>GE109</td>
			<td>General Psychology</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge109_a"> 
					<label for="ge109" id ="ge109-a"></label>
				</input>
            </td>
		</tr>

        <tr class ="fil211">
			<td>FIL211</td>
			<td>Panitikan Filipino</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_fil211_a"> 
					<label for="fil211" id ="fil211-a"></label>
			</input>
			</td>
		</tr>

		<tr class ="el211">
			<td>EL211</td>
			<td>General Elective(Differential Calculus)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_el211_a"> 
					<label for="el211" id ="el211-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="reed211">
			<td>REED211</td>
			<td>Morality</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_reed211_a"> 
					<label for="reed211" id ="reed211-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="pe211">
			<td>PE211</td>
			<td>Sports and Games</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_pe211_a"> 
					<label for="pe211" id ="pe211-a"></label>
			</input>
            </td>
		</tr>

        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>




	<!-- 2nd year 2nd sem -->

	<div id="npup3" class="hidden">
      <h3>BSCS 2nd Year, Second Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs221">
			<td>CS221</td>
			<td>Object-oriented Programming 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs221_a"> 
            	<label for="cs221" id ="cs221-b"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs222">
			<td>CS222</td>
			<td>Information Management 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs222_a"> 
            	<label for="cs22" id ="cs222-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs213">
			<td>CS223</td>
			<td>Web Design and Programming 1</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_cs213_a"> 
					<label for="cs213" id ="cs213-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs224">
			<td>CS224</td>
			<td>Design and Analysis of Algorithms</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs224_a"> 
				<label for="cs224" id ="cs224-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="ge110">
			<td>GE110</td>
			<td>Social Science and Philosophy</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge110_a"> 
					<label for="ge110" id ="ge110-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="ge111">
			<td>GE111</td>
			<td>Math, Science, and Technology</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge111_a"> 
					<label for="ge111" id ="ge111-a"></label>
				</input>
            </td>
		</tr>

		<tr class ="el221">
			<td>EL221</td>
			<td>GE Elective(Integral Calculus)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_el221_a"> 
					<label for="el221" id ="el221-a"></label>
				</input>
            </td>
		</tr>

        <tr class ="el222">
			<td>EL222</td>
			<td>Panitikan Filipino</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_el222_a"> 
					<label for="el222" id ="el222-a"></label>
			</input>
			</td>
		</tr>

        <tr class ="reed221">
			<td>REED221</td>
			<td>Christology</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_reed221_a"> 
					<label for="reed221" id ="reed221-a"></label>
			</input>
            </td>
		</tr>

        <tr class ="pe221">
			<td>PE221</td>
			<td>Recreational Activities</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_pe221_a"> 
					<label for="pe221" id ="pe221-a"></label>
			</input>
            </td>
		</tr>

        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>











	<div id="npup4" class="hidden">
      <h3>BSCS 3rd Year, First Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs311">
			<td>CS311</td>
			<td>Web Design and Programming 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs311_a"> 
            	<label for="cs311" id ="cs311-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs312">
			<td>CS312</td>
			<td>CS Elective(System Analysis and Design)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs312_a"> 
            	<label for="cs312" id ="cs312-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs313">
			<td>CS313</td>
			<td>Free Elective(Management Information Systems)</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_cs313_a"> 
					<label for="cs313" id ="cs313-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs314">
			<td>CS314</td>
			<td>Applications Development Technology</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs314_a"> 
				<label for="cs314" id ="cs314-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="cs315">
			<td>CS315</td>
			<td>Human Computer Interaction</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs315_a"> 
					<label for="cs315" id ="cs315-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="el311">
			<td>EL311</td>
			<td>GE Elective(Writing in Discipline</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_el311_a"> 
					<label for="el311" id ="gel311-a"></label>
				</input>
            </td>
		</tr>

		<tr class ="el312">
			<td>EL312</td>
			<td>GE Elective(Probability and Statistics)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_el312_a"> 
					<label for="el312" id ="el312-a"></label>
				</input>
            </td>
		</tr>
        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>






	<div id="npup5" class="hidden">
      <h3>BSCS 3rd Year, Second Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs321">
			<td>CS321</td>
			<td>Thesis 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs321_a"> 
            	<label for="cs321" id ="cs321-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs322">
			<td>CS322</td>
			<td>Software Engineering</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs322_a"> 
            	<label for="cs322" id ="cs322-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs323">
			<td>CS323</td>
			<td>Programming Languages</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_cs323_a"> 
					<label for="cs323" id ="cs323-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs324">
			<td>CS324</td>
			<td>CS Elective 2(Project Management)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs324_a"> 
				<label for="cs324" id ="cs324-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="cs325">
			<td>CS325</td>
			<td>Free Elective 2(PC Troubleshooting)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs325_a"> 
					<label for="cs325" id ="cs325-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs326">
			<td>CS236</td>
			<td>Intelligent Systems</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs326_a"> 
					<label for="cs326" id ="cs326-a"></label>
				</input>
            </td>
		</tr>

		<tr class ="cs327">
			<td>CS327</td>
			<td>Computer Architecture + Organization</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs327_a"> 
					<label for="cs327" id ="cs327-a"></label>
				</input>
            </td>
		</tr>
        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>











	<div id="npup6" class="hidden">
      <h3>BSCS 4th Year, First Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs411">
			<td>CS411</td>
			<td>Thesis 2</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs411_a"> 
            	<label for="cs411" id ="cs411-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs412">
			<td>CS412</td>
			<td>Automata and Language Theory</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs412_a"> 
            	<label for="cs412" id ="cs412-a"></label>
            </input>
            </td>
		</tr>

        <tr class ="cs413">
			<td>CS413</td>
			<td>Operating Systems</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_cs413_a"> 
					<label for="cs413" id ="cs413-a"></label>
				</input>
			</td>
		</tr>

        <tr class ="cs414">
			<td>CS414</td>
			<td>Information Security</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs414_a"> 
				<label for="cs414" id ="cs414-a"></label>
			</input>		
            </td>
		</tr>

        <tr class ="cs415">
			<td>CS415</td>
			<td>Network and Communications</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs45_a"> 
					<label for="cs45" id ="cs415-a"></label>
				</input>
			</td>
		</tr>
        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>

	<div id="npup7" class="hidden">
      <h3>BSCS 4th Year, Second Sem</h3>
      <form name="form1" method="post" action="code_addsub_BSCS.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
		<center><!-- COPY HERE -->
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Add</th>
		</tr>
			<?php
			include('dbcon.php');
            if(isset($_GET['id']))
            {
				$key_child = $_GET['id'];
				$ref_table = "User";
				$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
					if($getdata > 0 )
					{
                        ?>
                    <input type="hidden" name= "key" value="<?=$key_child;?>">
                    <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                    <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                    <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                    <input type="hidden" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                    <input type="hidden" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">
					<input type="hidden" name="Grade" value="0" class="form-control">
					
		<tr class ="cs321">
			<td>CS421</td>
			<td>OJT/Internship/Practicum(300 Hours)</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs321_a"> 
            	<label for="cs321" id ="cs321-a"></label>
            </input>
            </td>
		</tr>
        

		<input type="submit" value="Submit" class = "btn btn-primary">


			<?php
				}
					else
					{
			?>
			<td colspan = "4"> No Record found </td> 
			<?php
			}
        }
			?>
		</table>
	</center>
	</form><!-- TO HERE -->
    </div>
























































	<p id="footer">All content copyright © 2022, PEGVA.</p>

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
</body>
</html>
