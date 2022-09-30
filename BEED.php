<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BEED</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="curriculum-style.css" rel="stylesheet" type="text/css">
        
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
                    <li><a href="BEED.php">BEED</a></li>
                    <li><a href="BSED-ENG.php">BSED-ENG</a></li>
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


	<h2>Curriculum</h2>
    <div class="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: Bachelor of Elementary Education</p>
		<label>Year Level and Semester:</label>
			<select id="yearlevel" onchange="npup.doSelect(this);">
				<option>-- Year and Semester --</option>
				<option value="0">1st Year, 1st Sem</option>
      			<option value="1">1st Year, 2nd Sem</option>
      			<option value="2">2nd Year, 1st Sem</option>
	  			<option value="3">2nd Year, 2nd Sem</option>
	  			<option value="4">3rd Year, 1st Sem</option>
	  			<option value="5">3rd Year, 2nd Sem</option>
	  			<option value="6">4th Year, 1st Sem</option>
	  			<option value="7">4th Year, 2nd Sem</option>
			</select>		   
<center>
	<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
    <h3>BEED 1st Year, 1st Sem</h3> 
    <form name="form1" method="post" action="code.php"  style="height:550px;">
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/First Year/1st Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
	</form>
    </div>
    <div id="npup1" class="hidden">
      <h3>BEED 1st Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">	   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/First Year/2nd Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
	</form>
    </div>


    <div id="npup2" class="hidden">
      <h3>BEED 2nd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Second Year/1st Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>

	<div id="npup3" class="hidden">
      <h3>BEED 2nd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">	   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Second Year/2nd Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>
	<div id="npup4" class="hidden">
      <h3>BEED 3rd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">	   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Third Year/1st Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>

	<div id="npup5" class="hidden">
      <h3>BEED 3rd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Third Year/2nd Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>

	<div id="npup6" class="hidden">
      <h3>BEED 4th Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">	   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Fourth Year/1st Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>

	<div id="npup7" class="hidden">
      <h3>BEED 4th Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">	   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Elementary Education/Fourth Year/2nd Sem";
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
			?>
		</table> 
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
		<div id="btns">
		<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update</button>
		<input type="button" onclick="window.location.href='BEED_add_subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
	</center>
    </div>
























































<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
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
</body>
</html>