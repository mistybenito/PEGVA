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
			<th>Section - Add</th>
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



		<tr class ="cs111">
			<td>CS111</td>
			<td>Introduction to Computing</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs111_a"> 
            	<label for="cs111" id ="cs111-b">A</label>
            </input>
			<input type="checkbox" name="add_sub_cs111_b"> 
                <label for="cs111" id ="cs111-b">B</label>
            </input>
            </td>
		</tr>

        <tr class ="cs112">
			<td>CS112</td>
			<td>Computer Programming 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_cs112_a"> 
            	<label for="cs112" id ="cs112-a">A</label>
            </input>
			<input type="checkbox" name="add_sub_cs112_b"> 
                <label for="cs112" id ="cs112-b">B</label>
            </input>
            </td>
		</tr>

        <tr class ="ge100">
			<td>GE100</td>
			<td>Understanding the Self</td>
			<td>3</td>
			<td>
				<input type="checkbox" name="add_sub_ge100_a"> 
					<label for="ge100" id ="ge100-a">A</label>
				</input>
				<input type="checkbox" name="add_sub_ge100_b"> 
					<label for="ge100" id ="ge100-b">B</label>
				</input>
			</td>
		</tr>

        <tr class ="ge101">
			<td>GE101</td>
			<td>Contemporary World</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge101_a"> 
				<label for="ge101" id ="ge100-a">A</label>
			</input>
			<input type="checkbox" name="add_sub_ge101_b"> 
					<label for="ge101" id ="ge101-b">B</label>
				</input>		
            </td>
		</tr>

        <tr class ="ge102">
			<td>GE102</td>
			<td>Reading in the Philippine History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge102_a"> 
					<label for="ge102" id ="ge102-a">A</label>
				</input>
				<input type="checkbox" name="add_sub_ge102_b"> 
					<label for="ge102" id ="ge102-b">B</label>
				</input>
			</td>
		</tr>

        <tr class ="ge103">
			<td>GE103</td>
			<td>Reading in the Philippine History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge103_a"> 
					<label for="ge103" id ="ge103-a">A</label>
				</input>
				<input type="checkbox" name="add_sub_ge102_b"> 
					<label for="ge103" id ="ge103-b">B</label>
				</input>
            </td>
		</tr>

        <tr class ="ge104">
			<td>GE104</td>
			<td>Math in the Modern World</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_ge104_a"> 
					<label for="ge104" id ="ge102-a">A</label>
			</input>
			<input type="checkbox" name="add_sub_ge104_b"> 
					<label for="ge104" id ="ge104-b">B</label>
			</input>
			</td>
		</tr>

        <tr class ="fil111">
			<td>FIL111</td>
			<td>Malayuning Komunikasyon</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_fil111_a"> 
					<label for="fil111" id ="fil111-a">A</label>
			</input>
				<input type="checkbox" name="add_sub_fil111_b"> 
					<label for="fil111" id ="fil111-b">B</label>
			</input>
			</td>
		</tr>

        <tr class ="reed111">
			<td>REED111</td>
			<td>Salvation History</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_reed111_a"> 
					<label for="reed111" id ="fil111-a">A</label>
			</input>
				<input type="checkbox" name="add_sub_reed111_b"> 
					<label for="reed111" id ="reed111-b">B</label>
			</input>
            </td>
		</tr>

        <tr class ="pe111">
			<td>PE111</td>
			<td>Gymnastics</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_pe111_a"> 
					<label for="pe111" id ="fil111-a">A</label>
			</input>
			<input type="checkbox" name="add_sub_pe111_b"> 
					<label for="pe111" id ="pe111-b">B</label>
			</input>
            </td>
		</tr>

        <tr class ="nstp1">
			<td>NSTP1</td>
			<td>National Service Training Program 1</td>
			<td>3</td>
			<td>
			<input type="checkbox" name="add_sub_nstp1_a"> 
					<label for="nstp1" id ="fil111-a">A</label>
			</input>
				<input type="checkbox" name="add_sub_nstp1_b"> 
					<label for="nstp1" id ="nstp1-b">B</label>
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
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/first_year/second_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td>
                <a href="editcurric.php?id=<?=$key;?>" class = "btn btn btn-primary" style="color=black;"> View </a>
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
	</center>
	</form>
    </div>









    <div id="npup2" class="hidden">
      <h3>BSCS 2nd Year, First Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/second_year/first_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
	</center>
    </div>

	<div id="npup3" class="hidden">
      <h3>BSCS 2nd Year, Second Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/second_year/second_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
	</center>
    </div>











	<div id="npup4" class="hidden">
      <h3>BSCS 3rd Year, First Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/third_year/first_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
	</center>
    </div>

	<div id="npup5" class="hidden">
      <h3>BSCS 3rd Year, Second Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/third_year/second_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
	</center>
    </div>











	<div id="npup6" class="hidden">
      <h3>BSCS 4th Year, First Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/Fourth Year/first_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
	</center>
    </div>

	<div id="npup7" class="hidden">
      <h3>BSCS 4th Year, Second Sem</h3>
      <form name="form1" method="post" action="code.php"  style="height:550px;">
		<p name="courses[]" id="courses">Course: BSCS</p>		   
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
				
				$ref_table = "course_curriculum/bscs/Fourth Year/second_sem";
				$fetchdata = $database->getReference($ref_table)->getValue();
					if($fetchdata > 0 )
					{
						$i = 0;
					foreach($fetchdata as $key => $row)
					{
			?>
		<tr>
			<td><?=$row['code']; ?></td>
			<td><?=$row['descriptive_title']; ?></td>
			<td><?=$row['units']; ?></td>
			<td><?=$row['pre_req']; ?></td>
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
