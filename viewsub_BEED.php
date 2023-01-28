<?php
    include("authentication.php");
    include("nav-new.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Student List </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Students per Subject</h2>

<!-- Drop downn section and options -->
<center>
<div class="viewsub">
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
    <div id="npup0" class="hidden" style="margin-left:300px">
<center> 
        <h3>1st Year, 1st Sem</h3> 
        <?//FIRST YEAR FIRST SEM GRADES?>
             
    <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="oneone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/first_year/first_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                        <th>Remark</th>
                                        <th>Add</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/GE100';
                                                $fetchdata = $database->getReference($ref_table)->getValue();
                                    if ($fetchdata > 0) {
                                        $i = 0;
                                        foreach ($fetchdata as $key_child => $row) {
                                    ?>
                                    
                                                <tr>
                                                    <td> <?= $row['Student_number']; ?> </td>
                                                    <td> <?= $row['Course']; ?> </td>
                                                    <td> <?= $row['Email']; ?> </td>
                                                    <td> <?= $row['Name']; ?> </td>
                                                    <?php
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_GE100.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] >= "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
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

                        <div id ="oneone1" class = "hidden"> <!--div class here-->
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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/GE101';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_GE101.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                        </div> <!--div class here-->

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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/GE102';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_GE102.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/GE103';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_GE103.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/ENG111';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_ENG111.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/REED111';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_REED111.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/first_sem/PE111';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/11_addgrades_PE111.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                                </div>
                </form>








































































                                </div>
                                </div>
</center>





<div id="npup1" class="hidden" style="margin-left:300px">
    <center> 
      <h3>1st Year, 2nd Sem</h3>
    <!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="onetwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/first_year/second_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/GE104';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_GE104.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/GE105';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_GE105.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/GE106';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_GE106.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/GE107';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_GE107.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/SSG211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_SSG211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/REED121';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_REED121.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/PE121';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_PE121.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/NSTP2';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_NSTP2.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade8']; ?></td>
                                                        <?php
                                                if ($row['grade8'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade8'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/first_year/second_sem/PEH121';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/12_addgrades_PEH121.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade9']; ?></td>
                                                        <?php
                                                if ($row['grade9'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade9'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>


















            </div>
    </div>
</center><!-- TO HERE -->













































<!-- BOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARYBOUNDARY-->
<div id="npup2" class="hidden" style="margin-left:300px">
    <center>
      <h3>2nd Year, 1st Sem</h3>
<!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twoone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/second_year/first_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/GE108';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') 
                                            {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_GE108.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            }
                                             else 
                                             {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/GE109';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_GE109.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/EDU211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_EDU211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/EDU212';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_EDU212.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/MAT211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_MAT211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/FIL212';
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
                                                    < <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_FIL212.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/SSC211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_GSG211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/REED211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_REED211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade8']; ?></td>
                                                        <?php
                                                if ($row['grade8'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade8'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/first_sem/PE211';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/21_addgrades_PE211.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade9']; ?></td>
                                                        <?php
                                                if ($row['grade9'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade9'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

                        </center><!-- TO HERE -->
    </div>








































<!-- BOUNDARY BETWEEN SEMS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div id="npup3" class="hidden" style="margin-left:300px">
    <center>
      <h3>2nd Year, 2nd Sem</h3>
<!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twotwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/second_year/second_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/GE110';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_GE110.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/GE111';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_GE111.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/EDU221';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_EDU221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/EDU222';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_EDU222.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/EDU223';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_EDU223.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/VED221';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_VED221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/SCI221';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_SCI221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/MTB';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_MTB.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade8']; ?></td>
                                                        <?php
                                                if ($row['grade8'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade8'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/REED221';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_REED221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade9']; ?></td>
                                                        <?php
                                                if ($row['grade9'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade9'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/second_year/second_sem/PE221';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/22_addgrades_PE221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade10']; ?></td>
                                                        <?php
                                                if ($row['grade10'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade10'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>
                              
            </center>
            </div><!-- TO HERE -->









































	<div id="npup4" class="hidden" style="margin-left:300px">
    <center>
      <h3>3rd Year, 1st Sem</h3>
<!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threeone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/third_year/first_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/ENG311';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_ENG311.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>
           

<?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

<?//boundary for subject?>
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/RES1';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_RES1.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

                        <!-- SADSAJDIOWQJDIOASJDISAD -->
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/EDU311';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_EDU311.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/EDU312';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_EDU312.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>
                        
                        <?//boundary?>
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/SSC321';
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
                                                    <<?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_SSC321.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/MUSIC311';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_MUSIC311.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/ART311';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_ART311.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

                        <?//boundary for subject?>
                        <div id ="threeone7" class = "hidden">
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/RES1';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_RES1.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade8']; ?></td>
                                                        <?php
                                                if ($row['grade8'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade8'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

                        <?//boundary for subject?>
                        <div id ="threeone8" class = "hidden">
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
                                                $ref_table = 'Subjects/BEED/third_year/first_sem/FIL311';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/31_addgrades_FIL311.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade9']; ?></td>
                                                        <?php
                                                if ($row['grade9'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade9'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>
                                </DIV>
            </center><!-- TO HERE -->
    </div>


































	<div id="npup5" class="hidden" style="margin-left:300px">
    <center>
      <h3>3rd Year, 2nd Sem</h3>
 
      <!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threetwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/third_year/second_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/EL321';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_EL321.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/EDU321';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_EDU321.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/EDU322';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_EDU322.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/TLE2';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_TLE2.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade4']; ?></td>
                                                        <?php
                                                if ($row['grade4'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade4'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/TTL';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_TTL.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade5']; ?></td>
                                                        <?php
                                                if ($row['grade5'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade5'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/RES2';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_RES2.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade6']; ?></td>
                                                        <?php
                                                if ($row['grade6'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade6'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/MAT321';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_MAT321.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade7']; ?></td>
                                                        <?php
                                                if ($row['grade7'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade7'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>


                        <?//boundary for subject?>
                        <div id ="threetwo7" class = "hidden">
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/ENG321';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_ENG321.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade8']; ?></td>
                                                        <?php
                                                if ($row['grade8'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade8'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

                        <?//boundary for subject?>
                        <div id ="threetwo8" class = "hidden">
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
                                                $ref_table = 'Subjects/BEED/third_year/second_sem/ENG322';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/32_addgrades_ENG322.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade9']; ?></td>
                                                        <?php
                                                if ($row['grade9'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade9'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

            </center>
        </div><!-- TO HERE -->
    




































<!-- 4TH YEAR year 4th year 4yearsad asdsaddwqeqeasdsa qfwqd asdwqdq safsadqwe asd  -->
	<div id="npup6" class="hidden" style="margin-left:300px">
    <center>
      <h3>4th Year, 1st Sem</h3>
<!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php" style="height:fit-content;"  class="viewsub-form">

            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/fourth_year/first_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/fourth_year/first_sem/FS1';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/41_addgrades_FS1.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/fourth_year/first_sem/FS2';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/41_addgrades_FS2.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade2']; ?></td>
                                                        <?php
                                                if ($row['grade2'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade2'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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
                                                $ref_table = 'Subjects/BEED/fourth_year/first_sem/EDU414';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/41_addgrades_EDU414.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade3']; ?></td>
                                                        <?php
                                                if ($row['grade3'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade3'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
                                </table>
                            </form>
                        </div>

            </center>
        </div><!-- TO HERE -->





























	<div id="npup7" class="hidden" style="margin-left:300px">
    <center>
      <h3>4th Year, 2nd Sem</h3>

      <!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"   style="height:fit-content;"  class="viewsub-form">
 
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourtwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/beed/fourth_year/fourth_sem';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    $i = 0;
                    foreach ($fetchdata as $key_child => $row) {
                ?>
                <option value="<?= $i++; ?>"><?= $row['code'] ?></option>
                <?php
                    }
                }
                ?>
            </select><!-- to here here -->
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
                                                $ref_table = 'Subjects/BEED/fourth_year/second_sem/FS3';
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
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades_BEED/42_addgrades_FS3.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade1']; ?></td>
                                                        <?php
                                                if ($row['grade1'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade1'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> Edit </td>
                                                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                            ?>
                                                <td colspan = "7"> No Record found </td> 
                                            <?php
                                    }
                                    ?> <!-- to here -->
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