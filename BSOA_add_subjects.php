<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> BSOA ADD SUBJECT</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="curriculum-style.css" rel="stylesheet" type="text/css">
        <link href="add_subject.css" rel="stylesheet" type="text/css">
        
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
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 1st Year, 1st Sem</h3></center>
	<table>
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_1y_1s" id="update"  value = "add_subject"> Add Subject </button></center></div>
</fieldset>
</div>
    </div>




    <div id="npup1" class="hidden">
    <div>
    <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 1st Year, 2nd Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_1y_2s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div>
    </div>


    <?php // 2nd sem 1st year ?>


    <div id="npup2" class="hidden">
      
      <div> <? // FROM HERE ?>
        
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 2nd Year, 1st Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_2y_1s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
      
    </div>









    <? // 2ND YEAR 2ND SEM ?>

	<div id="npup3" class="hidden">
      
      <div> <? // FROM HERE ?>
       
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 2nd Year, 2nd Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_2y_2s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>











	<div id="npup4" class="hidden">
      <div> <? // FROM HERE ?>
      
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 3rd Year, 1st Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_3y_1s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>















	<div id="npup5" class="hidden">
      <div> <? // FROM HERE ?>
       
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 3rd Year, 2nd Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_3y_2s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>













	<div id="npup6" class="hidden">
      <div> <? // FROM HERE ?>
       
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 4th Year, 1st Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_4y_1s" id="update"  value = "add_subject"> Add Subject </button></center></div>
    </fieldset>
</div> <? //TO HERE ?>
    </div>













	<div id="npup7" class="hidden">
      <div> <? // FROM HERE ?>
        
        <div id="div1">
	<form name="form1" method="post" action="bsoa-code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
	<center><h3>BSOA 4th Year, 2nd Sem</h3></center>
	<table>
		
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
		</table> 
	</form>
	<center><button type="submit" name="add_subject_bsoa_4y_2s" id="update"  value = "add_subject"> Add Subject </button></center></div>
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