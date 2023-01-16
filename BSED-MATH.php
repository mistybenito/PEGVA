<?php
    include("authentication.php");
	include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BSED-MATH</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

	<h2>Curriculum</h2>
    <div class="curriculum">

	<form name="form1" method="post" action="code.php"  style="height:  fit-content;" class="curriculum-form">
		<p name="courses[]" id="courses">Course: Bachelor of Secondary Education, Major in Mathematics</p>
		<label>Year Level and Semester:</label>
			<select id="yearlevel" onchange="npup.doSelect(this);">
				<option><b>-- Year and Semester --</b></option>
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
    <h3>BSED-MATH 1st Year, 1st Sem</h3> 
    <form name="form1" method="post" action="code.php">
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/first_year/first_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

		<div id="btns">
			<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
		  
	</center>
    </div>

    <div id="npup1" class="hidden">
      <h3>BSED-MATH 1st Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php">	   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/first_year/second_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

<div id="btns">
	<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
</div>
  
</center>
    </div>


    <div id="npup2" class="hidden">
      <h3>BSED-MATH 2nd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php">   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/second_year/first_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

<div id="btns">
	<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
</div>
  
</center>
    </div>

	<div id="npup3" class="hidden">
      <h3>BSED-MATH 2nd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php">	   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/second_year/second_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

<div id="btns">
	<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
</div>
  
</center>
    </div>
	<div id="npup4" class="hidden">
      <h3>BSED-MATH 3rd Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php">	   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/third_year/first_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

<div id="btns">
	<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
</div>
  
</center>
    </div>

	<div id="npup5" class="hidden">
      <h3>BSED-MATH 3rd Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php">   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/third_year/second_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

		<div id="btns">
			<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
		</div>
		  
	</center>
    </div>

	<div id="npup6" class="hidden">
      <h3>BSED-MATH 4th Year, 1st Sem</h3>
      <form name="form1" method="post" action="code.php">	   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/fourth_year/first_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

<div id="btns">
	<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
</div>
  
</center>
    </div>

	<div id="npup7" class="hidden">
      <h3>BSED-MATH 4th Year, 2nd Sem</h3>
      <form name="form1" method="post" action="code.php"	   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Edit</th>
		</tr>
			<?php
			include('dbcon.php');
				
				$ref_table = "course_curriculum/bsed_m/fourth_year/second_sem";
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
			<td>
                <a href="editcurric.php?id=<?=$key;?>" id="btnView"> View </a>
            </td>
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
		</form>

		<div id="btns">
			<input type="button" onclick="window.location.href='subjects.php';" id="add_btn" value="Add Subjects"/>
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
