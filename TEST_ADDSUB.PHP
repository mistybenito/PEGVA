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
                <form name="form1" method="post" action="code_addsub_bscs.php"  style="height:550px;">
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
                                        <th>Add</th>
                                    </tr>
                                    <input type="submit" value="Submit" class = "btn btn-primary">
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'User';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if($fetchdata > 0)
                                                    {
                                                ?>
                                    
                                                <tr>
                                                    <input type="hidden" name = "id" value = "<?=$key_child;?>">
                                                    <td> <input type = "hidden" value = "<?= $fetchdata['Student_number'];?>"></input><?= $fetchdata['Student_number'];?> </td>
                                                    <td> <input type = "hidden" value = "<?= $fetchdata['Course'];?>"> </input><?= $fetchdata['Course'];?></td>
                                                    <td> <input type = "hidden" value = "<?= $fetchdata['Email'];?>"> </input> <?= $fetchdata['Email'];?></td>
                                                    <td> <input type = "hidden" value = "<?= $fetchdata['Name'];?>"> </input><?= $fetchdata['Name'];?></td>
                                                    <td>
                                                    <input type="checkbox" name="add_sub_cs111_a"> 
                                                        <label for="cs111" id ="cs111-a"></label>
                                                    </input>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                    <?php
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
                                
                            </form>
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
                            </form>
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
                        <div id ="oneone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                        <div id ="oneone5" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                        <div id ="oneone6" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                        <div id ="oneone7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                        <div id ="oneone8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                        <div id ="oneone9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Grade</th>
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
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL121';
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
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/REED121';
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
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/PE121';
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
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP2';
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
</center><!-- TO HERE -->


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
		   
		</form>
    </div>

	</center>


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






















<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
</body>
</html>