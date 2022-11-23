<?php
    include("authentication.php");
	include("navbar.php");
?>
<!DOCTYPE html>
<html>
<title> Student List </title>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="grades.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Students per Subject</h2>

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
        <?//FIRST YEAR FIRST SEM GRADES?>
            <center>    
    <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="oneone.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS111</option>
                <option value="1">CS112</option>
                <option value="2">GE100</option>
                <option value="3">GE101</option>
                <option value="4">GE102</option>
                <option value="5">GE103</option>
                <option value="6">FIL111</option>
                <option value="7">REED111</option>
                <option value="8">PE111</option>
                <option value="9">NSTP1</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="one-one">
                        <div id ="oneone0" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="addgrades_BSCS/CS_addgrades_CS111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
                        </div>
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="oneone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS112.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                        </div>

                        <?//boundary?>
                        <div id ="oneone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE100.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="oneone3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE101.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="oneone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    td> 
                                                        <a href="CS_addgrades_GE102.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE103.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_FIL111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_REED111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_PE111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        </div>


                        <?//boundary for subject?>
                        <div id ="oneone9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_NSTP1.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                          
                        </div>
                </form>








































































                                </div>
                                </div>
</center>





    <div id="npup1" class="hidden">
      <h3>1st Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
                <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="onetwo.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS121</option>
                <option value="1">CS122</option>
                <option value="2">GE104</option>
                <option value="3">GE105</option>
                <option value="4">GE106</option>
                <option value="5">GE107</option>
                <option value="6">FIL121</option>
                <option value="7">REED121</option>
                <option value="8">PE121</option>
                <option value="9">NSTP2</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="one-two">
                        <div id ="onetwo0" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/CS121';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="onetwo1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/CS122';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS112.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="onetwo2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/GE104';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE100.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="onetwo3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/GE105';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE105.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="onetwo4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/GE106';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE106.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="onetwo5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/GE107';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_GE107.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="onetwo6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/FIL121';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_FIL121.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="onetwo7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/REED121';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_REED121.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="onetwo8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/PE121';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_PE121.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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


                        <?//boundary for subject?>
                        <div id ="onetwo9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/second_sem/NSTP2';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_NSTP2.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
    </div>
</center><!-- TO HERE -->

<!-- BOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARY-->
    <div id="npup2" class="hidden">
      <h3>2nd Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twoone.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS211</option>
                <option value="1">CS212</option>
                <option value="2">CS213</option>
                <option value="3">CS214</option>
                <option value="4">GE108</option>
                <option value="5">GE109</option>
                <option value="6">FIL211</option>
                <option value="7">EL211</option>
                <option value="8">REED211</option>
                <option value="9">PE211</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="two-one">
                    <div id ="twoone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/CS211';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS211.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="twoone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/CS212';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS212.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="twoone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/CS213';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS213.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="twoone3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/CS214';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS214.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="twoone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/GE108';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_GE108.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twoone5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/GE109';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_GE109.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twoone6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/FIL211';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_FIL211.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twoone7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/EL211';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_EL211.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twoone8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/REED211';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_REED211.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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


                        <?//boundary for subject?>
                        <div id ="twoone9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/first_sem/PE211';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_PE211.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        </center><!-- TO HERE -->
    </div>



<!-- BOUNDARY BETWEEN SEMS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div id="npup3" class="hidden">
      <h3>2nd Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twotwo.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS221</option>
                <option value="1">CS222</option>
                <option value="2">CS223</option>
                <option value="3">CS224</option>
                <option value="4">GE110</option>
                <option value="5">GE111</option>
                <option value="6">EL221</option>
                <option value="7">EL222</option>
                <option value="8">REED221</option>
                <option value="9">PE221</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="two-two">
                    <div id ="twotwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/CS221';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS221.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="twotwo1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/CS222';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS222.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="twotwo2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/CS223';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS223.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="twotwo3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/CS224';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS224.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="twotwo4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/GE110';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_GE110.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twotwo5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/GE111';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_GE111.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twotwo6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/EL221';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_EL221.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twotwo7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/EL222';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_EL222.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="twotwo8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/REED221';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_REED221.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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


                        <?//boundary for subject?>
                        <div id ="twotwo9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/second_year/second_sem/PE221';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_PE221.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                              
            </center>
            </div><!-- TO HERE -->






	<div id="npup4" class="hidden">
      <h3>3rd Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threeone.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS311</option>
                <option value="1">CS312</option>
                <option value="2">CS313</option>
                <option value="3">CS314</option>
                <option value="4">CS315</option>
                <option value="5">EL311</option>
                <option value="6">EL312</option>

            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="three-one">
                    <div id ="threeone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/CS311';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS311.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="threeone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/CS312';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS312.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="threeone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/CS313';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS313.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="threeone3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/CS314';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS314.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="threeone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/CS315';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_CS315.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="threeone5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/EL311';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_EL311.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="threeone6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/first_sem/EL312';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_EL312.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                                </DIV>
            </center><!-- TO HERE -->
    </div>


	<div id="npup5" class="hidden">
      <h3>3rd Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threetwo.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS321</option>
                <option value="1">CS322</option>
                <option value="2">CS323</option>
                <option value="3">CS324</option>
                <option value="4">CS325</option>
                <option value="5">CS326</option>
                <option value="6">CS327</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="three-two">
                    <div id ="threetwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS321';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS321.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="threetwo1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS322';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS322.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="threetwo2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS323';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS323.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="threetwo3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS324';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS324.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="threetwo4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS325';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_CS325.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="threetwo5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS326';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_CS326.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

                        <?//boundary for subject?>
                        <div id ="threetwo6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/third_year/second_sem/CS327';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS327.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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

            </center>
        </div><!-- TO HERE -->
    



<!-- 4TH YEAR year 4th year 4yearsad asdsaddwqeqeasdsa qfwqd asdwqdq safsadqwe asd  -->
	<div id="npup6" class="hidden">
      <h3>4th Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourone.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS411</option>
                <option value="1">CS412</option>
                <option value="2">CS413</option>
                <option value="3">CS414</option>
                <option value="4">CS415</option>
            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="four-one">
                    <div id ="fourone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS411';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS411.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="fourone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS412';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS412.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                    ?>
                                </table>
                                
                            </form>
                        </div>

                        <?//boundary?>
                        <div id ="fourone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS413';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS413.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary?>
                        <div id ="fourone3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS414';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS414.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
                        
                        <?//boundary for subject?>
                        <div id ="fourone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS415';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td>
                                                        <a href="CS_addgrades_CS415.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                </tr>
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
            </center>
        </div><!-- TO HERE -->

	<div id="npup7" class="hidden">
      <h3>4th Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourtwo.doSelect(this);">
                <option value="">Subject Code</option>
                <!-- the option values are suffixes for the elements to show -->
                <option value="0">CS421</option>

            </select>
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="four-two">
                    <div id ="fourtwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/fourth_year/second_sem/CS421';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                    $i = 0;
                                                    foreach($fetchdata as $key_child => $row)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td> 
                                                        <a href="CS_addgrades_CS421.php?id=<?=$key_child;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </td>
                                                    </td>
                                                </tr>
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
            </center>
        </div><!-- TO HERE -->
</div>














<!--SEM AND YEAR SCRIPT -->
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
<!--/SEM AND YEAR SCRIPT -->






<!--subject code 1ST YEAR 1ST SEM script -->
<script>
window.oneone = (function (containerId, baseId) {
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
})('one-one', 'oneone'); // give the routine a container id of your special elements, and the base id of those elements
</script>


<!--subject code 1ST YEAR 2nd SEM script -->
<script>
window.onetwo = (function (containerId, baseId) {
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
})('one-two', 'onetwo'); // give the routine a container id of your special elements, and the base id of those elements
</script>



<!-- SCRIPT FOR 2ND YEAR 1ST SEM -->
<script>
window.twoone = (function (containerId, baseId) {
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
})('two-one', 'twoone'); // give the routine a container id of your special elements, and the base id of those elements
</script>


<!-- SCRIPT FOR 2ND YEAR 2nd SEM -->
<script>
window.twotwo = (function (containerId, baseId) {
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
})('two-two', 'twotwo'); // give the routine a container id of your special elements, and the base id of those elements
</script>




<!-- script for 3rd year 1st sem -->
<script>
window.threeone = (function (containerId, baseId) {
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
})('three-one', 'threeone'); // give the routine a container id of your special elements, and the base id of those elements
</script>


<!-- script for 3rd year 2nd sem -->
<script>
window.threetwo = (function (containerId, baseId) {
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
})('three-two', 'threetwo'); // give the routine a container id of your special elements, and the base id of those elements
</script>

<!-- script for 4th year 1st sem -->
<script>
window.fourone = (function (containerId, baseId) {
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
})('four-one', 'fourone'); // give the routine a container id of your special elements, and the base id of those elements
</script>



<!-- script for 4th year 2nd sem -->
<script>
window.fourtwo = (function (containerId, baseId) {
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
})('four-two', 'fourtwo'); // give the routine a container id of your special elements, and the base id of those elements
</script>
























<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
</body>
</html>