<?php
    include("authentication.php");
	include("navbar.php");
?>
<!DOCTYPE html>
<html>
<title> Remarks </title>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="grades.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Student Remarks</h2>

<!-- Drop downn section and options -->
<center>
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
</center>
<!-- end of content-selection -->


<!-- container for any elements that are to be in the game -->
<div id="mySpecialElements">
    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
    <div id="npup0" class="hidden">
    <h3>1st Year, 1st Sem</h3> 
 <center>    
	<form name="form1" method="post" action="code.php"  style="height:550px;">

	 <table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
				<th>Pre-Requisite</th>
				<th>Grade</th>
			</tr>
			<?php
			include('dbcon.php');
			
				if(isset($_GET['id']))
					{
						$key_child = $_GET['id'];
						$ref_table = 'User/'.$key_child.'/Grades/first_year/first_sem';
						$fetchdata = $database->getReference($ref_table)->getValue();
							if($fetchdata > 0)
							{
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?id=<?=$key_child?>';" id="add_btn" value="Add Grade"/>
		</div>
	</form>
  </div>
 </center>





    <div id="npup1" class="hidden">
      <h3>1st Year, 2nd Sem</h3>
<center>
 <form name="form1" method="post" action="code.php"  style="height:550px;">	   

	<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
	</form>
    </div>
	</center>


    <div id="npup2" class="hidden">
      <h3>2nd Year, 1st Sem</h3>
<center>
	<form name="form1" method="post" action="code.php"  style="height:550px;">	   
	<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
    </div>
	
</center>

	<div id="npup3" class="hidden">
      <h3>2nd Year, 2nd Sem</h3>
<center>      
	<form name="form1" method="post" action="code.php"  style="height:550px;">		   

<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
    </div>
	
	</center>







	<div id="npup4" class="hidden">
      <h3>3rd Year, 1st Sem</h3>
<center>      
	<form name="form1" method="post" action="code.php"  style="height:550px;">   

<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
    </div>

	</center>


	<div id="npup5" class="hidden">
      <h3>3rd Year, 2nd Sem</h3>
<center>      
	<form name="form1" method="post" action="code.php"  style="height:550px;">	   

<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
    </div>
</center>



	<div id="npup6" class="hidden">
      <h3>4th Year, 1st Sem</h3>
<center>      
	<form name="form1" method="post" action="code.php"  style="height:550px;">	   

	<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
    </div>
	</center>

	<div id="npup7" class="hidden">
      <h3>4th Year, 2nd Sem</h3>
<center>      
	<form name="form1" method="post" action="code.php"  style="height:550px;">	   

<table>
			<tr> 
				<th>Course</th>
				<th>Course Code</th>
				<th>Discriptive Title</th>
				<th>Unit</th>
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
							$i = 0;
							foreach($fetchdata as $key_child => $row)
							{
						?>
						<input type="hidden" name = "id" value = "<?=$key_child;?>">
						<tr>
							<td> <?= $row['Course'];?> </td>
							<td> <?= $row['Course_Code'];?> </td>
							<td> <?= $row['Desc_title'];?> </td>
							<td> <?= $row['Unit'];?> </td>
							<td> <?= $row['Pre-Req'];?> </td>
							<td> <?= $row['Grade'];?> </td>
							</td>
						</tr>
							<?php
				}
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
		<div id="btns">
			<button type="submit" name="update_registrar" id="update_btn" value="Update"> Update </button>
			<input type="button" onclick="window.location.href='add_grades.php?';" id="add_btn" value="Add Grade"/>
		</div>
		</form>
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


<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
</body>
</html>