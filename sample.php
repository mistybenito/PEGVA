<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>

</head>
<body>


<!-- Drop downn section and options -->
<div class="content-selection">
  <select id="mySelect" onchange="npup.doSelect(this);">
      <option value="">Curriculum</option>
      <!-- the option values are suffixes for the elements to show -->
      <option value="0">BSED-ENG</option>
      <option value="1">BSCS</option>
      <option value="2">two</option>
  </select>
</div> <!-- end of content-selection -->
<!-- container for any elements that are to be in the game -->
<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
    <h3>BSED-ENG</h3> 
    <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course:</p>
		<p name="courses[]" id="courses">BSED-ENG</p>
		<label>Year Level:</label>
			<select name="yearlevel[]" id="yearlevel">
				<option value="first">First Year</option>
				<option value="sec">Second Year</option>
				<option value="third">Third Year</option>
				<option value="fourth">Fourt Year</option>
			</select>
		<label>Semester:</label>
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
			<td><?=$row['Description']; ?></td>
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
    <div id="npup1" class="hidden">
      <h3>BSCS</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course:</p>
		<p name="courses[]" id="courses">BSCS</p>
		<label>Year Level:</label>
			<select name="yearlevel[]" id="yearlevel">
				<option value="first">First Year</option>
				<option value="sec">Second Year</option>
				<option value="third">Third Year</option>
				<option value="fourth">Fourt Year</option>
			</select>
		<label>Semester:</label>
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
			?>
		</table> 
		<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><a href="subjects.php">SUBJECT</a><center>
	</center>
	</form>
    </div>
    <div id="npup2" class="hidden">
      <h3>Div 2</h3>
      <p>This is Div 2 content.</p>
      <p>Continue the content here.....</p>
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