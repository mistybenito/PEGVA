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
                <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/first_year/first_sem';
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Remark</th>
                                        <th>Add/Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?= $scode = $fetch['code']; ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title']; ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units']; ?>">                              
                                        <?php
                                    }//to HERE
                                    $ref_table = 'Subjects/BSBA/first_year/first_sem/'.$scode;
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
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                        <td> N/A </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] >= "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
                                                        <td> Delete </td>
                                                        
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

                        <div id ="oneone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php 
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem//'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
                                                        <td> Delete </td>
                                                            
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
                        <div id ="oneone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/GE100';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/GE101';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/GE102';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/GE103';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/FIL111';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="oneone7" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/REED111';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade08']; ?></td>
                                                        <?php
                                                if ($row['grade08'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade08'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="oneone8" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/PE111';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade09']; ?></td>
                                                        <?php
                                                if ($row['grade09'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade09'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="oneone9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/first_sem/'.$scode; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/first_sem/NSTP1';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>              
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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





    <div id="npup1" class="hidden">
      <h3>1st Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
                <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="onetwo.doSelect(this);">
                <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/first_year/second_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="one-two">
                        <div id ="onetwo0" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject6'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject7'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject8'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade08']; ?></td>
                                                        <?php
                                                if ($row['grade08'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade08'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject9'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade09']; ?></td>
                                                        <?php
                                                if ($row['grade09'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade09'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="onetwo9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/first_year/second_sem/subject10'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/first_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
    <div id="npup2" class="hidden">
      <h3>2nd Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twoone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/second_year/first_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="two-one">
                    <div id ="twoone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') 
                                            {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            }
                                             else 
                                             {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject6'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    < <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject7'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject8'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade08']; ?></td>
                                                        <?php
                                                if ($row['grade08'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade08'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject9'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade09']; ?></td>
                                                        <?php
                                                if ($row['grade09'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade09'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="twoone9" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/first_sem/subject10'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
	<div id="npup3" class="hidden">
      <h3>2nd Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="twotwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/second_year/second_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="two-two">
                    <div id ="twotwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/CS223';
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject6'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject7'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject8'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade08']; ?></td>
                                                        <?php
                                                if ($row['grade08'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade08'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject9'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a><a href="addgrades/22_addgrades_REED221.php?id=<?= $key_child; ?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade09']; ?></td>
                                                        <?php
                                                if ($row['grade09'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade09'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/second_year/second_sem/subject10'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/second_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
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
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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






	<div id="npup4" class="hidden">
      <h3>3rd Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threeone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/third_year/first_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="three-one">
                    <div id ="threeone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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

                        <div id ="threeone1" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="threeone2" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <<?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="threeone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject6'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/first_sem/subject7'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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



<!-- asdsadjiowqdjasd boundaryboundaryboundaryboundaryboundaryboundaryboundaryboundaryboundaryboundaryboundaryboundaryboundary -->

	<div id="npup5" class="hidden">
      <h3>3rd Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="threetwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/third_year/second_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="three-two">
                    <div id ="threetwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject6'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade06']; ?></td>
                                                        <?php
                                                if ($row['grade06'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade06'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/third_year/second_sem/subject7'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/third_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade07']; ?></td>
                                                        <?php
                                                if ($row['grade07'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade07'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
	<div id="npup6" class="hidden">
      <h3>4th Year, 1st Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourone.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/fourth_year/first_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="four-one">
                    <div id ="fourone0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/first_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/first_sem/subject2'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade02']; ?></td>
                                                        <?php
                                                if ($row['grade02'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade02'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/first_sem/subject3'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade03']; ?></td>
                                                        <?php
                                                if ($row['grade03'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade03'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="fourone3" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/first_sem/subject4'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade04']; ?></td>
                                                        <?php
                                                if ($row['grade04'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade04'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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
                        <div id ="fourone4" class = "hidden">
                            <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/first_sem/subject5'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/first_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade05']; ?></td>
                                                        <?php
                                                if ($row['grade05'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade05'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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

	<div id="npup7" class="hidden">
      <h3>4th Year, 2nd Sem</h3>
      <center><!-- COPY FROM HERE -->    
        <form name="form1" method="post" action="code.php"  style="height:550px;">
            <?// CONTENT SELECTION FOR GRADES?>
            <div class="content-selection">
            <select id="mySelect" onchange="fourtwo.doSelect(this);">
            <option value="">Subject Code</option><!-- here -->
                <?php
                include('dbcon.php');
                $ref_table = 'course_curriculum/bsba/fourth_year/second_sem';
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
            </select><!-- to here -->
            </div>
            <?// CONTENT SELECTION FOR GRADES?>
            <div id ="four-two">
                    <div id ="fourtwo0" class = "hidden">
                        <table>
                                    <tr> 
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Add</th>
                                        <th>Delete </th>
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $reference = 'course_curriculum/bsba/fourth_year/second_sem/subject1'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        <input type="text" name = "Subject_code" value ="<?=$scode = $fetch['code'] ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title'] ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units'] ?>">                              
                                        <?php
                                    }//to HERE
                                                $ref_table = 'Subjects/BSBA/fourth_year/second_sem/'.$scode;
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
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <?php // here
                                            if ($row['Grade'] == '0') {
                                                    ?>
                                                        <td> No Grades yet.</td>
                                                        <td> N/A </td>
                                                         <td> 
                                                         <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Add </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                            } else {
                                                    ?>
                                                       <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] > "75") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] < "75") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSBA_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&Desc_title=<?= $desc; ?>&Unit=<?= $units;?>" class = "btn btn btn-primary" style="color=black"> Edit </a>
                                                        </td>
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