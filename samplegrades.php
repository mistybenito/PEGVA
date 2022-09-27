<?php
    include_once("dbcon.php");
	include("navbar.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="curriculum-style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<!-- Drop downn section and options -->
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
</div> <!-- end of content-selection -->
<!-- container for any elements that are to be in the game -->
<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
    <h3>BSCS 1st Year, 1st Sem</h3> 
    <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Pre-Requisite</th>
            <th>Grade</th>
		</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_POST['id']))
					{
						$key_child = $_POST['id'];
						$fetchdata = $database->getReference('User/'.$key_child.'/Grades/1st Year/1st Sem')->getValue();
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
							<td><?=$row['Grade']; ?> </td>
						</tr>

							<?php
				}
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
						<td colspan = "5"> Nothing found </td> 
					<?php
			}
			?>
		</table> 
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjectsamp.php">SUBJECT</a><center>
	</center>
	</form>
    </div>





    <div id="npup1" class="hidden">
      <h3>BSCS 1st Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
			?>
		</table> 
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
	</form>
    </div>


    <div id="npup2" class="hidden">
      <h3>BSCS 2nd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
			?>
		</table> 
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>

	<div id="npup3" class="hidden">
      <h3>BSCS 2nd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
			?>
		</table> 
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>
	<div id="npup4" class="hidden">
      <h3>BSCS 3rd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Third Year/1st Sem";
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
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>

	<div id="npup5" class="hidden">
      <h3>BSCS 3rd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Third Year/2nd Sem";
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
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>

	<div id="npup6" class="hidden">
      <h3>BSCS 4th Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Fourth Year/1st Sem";
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
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>

	<div id="npup7" class="hidden">
      <h3>BSCS 4th Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/Fourth Year/2nd Sem";
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
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
    </div>















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