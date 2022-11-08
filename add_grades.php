<?php
    include("authentication.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Subject and Grades </title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="grades.css" rel="stylesheet" type="text/css">
		<link href="curriculum-style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<h2>Add Student Grades</h2>
<center>
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
</div>
</center><!-- end of content-selection -->
<!-- container for any elements that are to be in the game -->
<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
     
    <div>
        
<div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:550px;">
<fieldset>
    <legend>Subject Description</legend>
    <center>1st Year, 2nd Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="1y1s" id="update"  value = "1y1s"> Add Subject and Grade </button></center></div>
</fieldset>
</div>
    </div>


















    <div id="npup1" class="hidden">
    <div>
    <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
<center>1st Year, 2nd Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="1y2s" id="update"  value = "1y2s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div>
    </div>


    <?php // 2nd sem 1st year ?>


















    <div id="npup2" class="hidden">
      
      <div> <? // FROM HERE ?>
        
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
    <center>2nd Year, 1st Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="2y1s" id="update"  value = "2y1s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
      
    </div>









    <? // 2ND YEAR 2ND SEM ?>

	<div id="npup3" class="hidden">
      
      <div> <? // FROM HERE ?>
       
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
    <center>2nd Year, 2nd Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="2y2s" id="update"  value = "2y2s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>











	<div id="npup4" class="hidden">
      <div> <? // FROM HERE ?>
      
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
    <center>3rd Year, 1st Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="3y1s" id="update"  value = "3y1s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>















	<div id="npup5" class="hidden">
      <div> <? // FROM HERE ?>
       
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
    <center>3rd Year, 2nd Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="3y2s" id="update"  value = "3y2s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>













	<div id="npup6" class="hidden">
      <div> <? // FROM HERE ?>
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
    <center>4th Year, 1st Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="4y1s" id="update"  value = "4y1s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>













	<div id="npup7" class="hidden">
      <div> <? // FROM HERE ?>
        
        <div id="div1">
	<form name="form1" method="post" action="add_grade_code.php"  style="height:400px;">
	
<fieldset>
<legend>Subject Description</legend>
    <center>4th Year, 2nd Sem</center>
	<table>
	<?php
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
			?>
			<input type="hidden" name = "key" value = "<?=$key_child;?>">
		<tr> 
			<td>Course(Acronym)</td>
			<td><input type="text" name = "Course" ></td>
		</tr>
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name = "Course_Code" ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name = "Desc_title" ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name = "Unit" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name=  "Pre-Req"></td>
		</tr>
        <tr> 
			<td>Grade</td>
			<td><input type="text" name=  "Grade"></td>
		</tr>
		</table> 
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: reg.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: reg.php');
			exit();
		}
	?>
	<center><button type="submit" name="4y2s" id="update"  value = "4y2s"> Add Subject and Grade </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
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
<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
</body>
</html>