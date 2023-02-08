<?php
    include("authentication.php");
    include("nav-new.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Curriculum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
<h2>Curriculum</h2>

<!-- Drop downn section and options -->
<center>
<div class="sched">
    <div class="content-selection">
        <select id="mySelect" onchange="npup.doSelect(this);">
            <option value="">--Course--</option>
            <!-- the option values are suffixes for the elements to show -->
            <option value="0">BSCS</option>
            <option value="1">ABREED</option>
            <option value="2">BEED</option>
            <option value="3">BSBA</option>
            <option value="4">BSOA</option>
            <option value="5">BSED-ENG</option>
            <option value="6">BSED-SCI</option>
            <option value="7">BSED-MATH</option>
        </select>
        </div>
</div>
        </center>
        <!-- end of content-selection -->


                <!-- container for any elements that are to be in the game -->
        <div id="mySpecialElements">
                    <!--  these have ids that end with and index  for easy retrieval in "findeElement" function  below-->
                <div id="npup0" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSCS</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="oneone.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="one-one">
                                        <div id ="oneone0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bscs/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/first_year/first_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="oneone1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/first_year/second_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="oneone2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/second_year/first_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="oneone3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/second_year/second_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="oneone4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/third_year/first_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="oneone5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/third_year/second_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/fourth_year/first_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="oneone7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bscs/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bscs/fourth_year/second_sem/<?=$key;?>&course=BSCS" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>


<div id="npup1" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>ABREED</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="onetwo.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="one-two">
                                        <div id ="onetwo0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/abreed/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/first_year/first_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="onetwo1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/first_year/second_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="onetwo2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/second_year/first_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="onetwo3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/second_year/second_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="onetwo4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/third_year/first_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="onetwo5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/third_year/second_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="onetwo6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/fourth_year/first_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="onetwo7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/abreed/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=abreed/fourth_year/second_sem/<?=$key;?>&course=ABREED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>


<div id="npup2" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BEED</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="twoone.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="two-one">
                                        <div id ="twoone0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/beed/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/first_year/first_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="twoone1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/first_year/second_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="twoone2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/second_year/first_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="twoone3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/second_year/second_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="twoone4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/third_year/first_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="twoone5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/third_year/second_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="twoone6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/fourth_year/first_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="twoone7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/beed/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=beed/fourth_year/second_sem/<?=$key;?>&course=BEED" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>

<div id="npup3" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSBA</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="twotwo.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="two-two">
                                        <div id ="twotwo0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bsba/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/first_year/first_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="twotwo1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/first_year/second_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="twotwo2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/second_year/first_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="twotwo3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/second_year/second_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="twotwo4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/third_year/first_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="twotwo5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/third_year/second_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="twotwo6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/fourth_year/first_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="twotwo7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsba/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsba/fourth_year/second_sem/<?=$key;?>&course=BSBA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>



<div id="npup4" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSOA</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="threeone.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="three-one">
                                        <div id ="threeone0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bsoa/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/first_year/first_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="threeone1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/first_year/second_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="threeone2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/second_year/first_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="threeone3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/second_year/second_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="threeone4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/third_year/first_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="threeone5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/third_year/second_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="threeone6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/fourth_year/first_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="threeone7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsoa/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsoa/fourth_year/second_sem/<?=$key;?>&course=BSOA" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>



<div id="npup5" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSED-ENG</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="threetwo.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="three-two">
                                        <div id ="threetwo0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bsed_e/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/first_year/first_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="threetwo1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/first_year/second_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="threetwo2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/second_year/first_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="threetwo3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/second_year/second_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="threetwo4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/third_year/first_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="threetwo5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/third_year/second_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="threetwo6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/fourth_year/first_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="threetwo7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_e/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_e/fourth_year/second_sem/<?=$key;?>&course=BSED_E" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>


<div id="npup6" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSED-SCI</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="fourone.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="four-one">
                                        <div id ="fourone0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bsed_s/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/first_year/first_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="fourone1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/first_year/second_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="fourone2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/second_year/first_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="fourone3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/second_year/second_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="fourone4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/third_year/first_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="fourone5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/third_year/second_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="fourone6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/fourth_year/first_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="fourone7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_s/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_s/fourth_year/second_sem/<?=$key;?>&course=BSED_S" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>



<div id="npup7" class="hidden" style="margin-left:300px">
                <center>       
                    <h3>BSED-MATH</h3> 
                        <?//FIRST YEAR FIRST SEM GRADES?>
                            
                    <form name="form1" method="post" action="code.php"  style="height:fit-content;" class="sched-form">
                            <?// CONTENT SELECTION FOR GRADES?>
                            <div class="content-selection">
                            <select id="mySelect" onchange="fourtwo.doSelect(this);">
                                <option value="">Year and Sem</option><!-- here -->
                                <option value="0">1st Year, 1st Sem</option>
                                <option value="1">1st Year, 2nd Sem</option>
                                <option value="2">2nd Year, 1st Sem</option>
                                <option value="3">2nd Year, 2nd Sem</option>
                                <option value="4">3rd Year, 1st Sem</option>
                                <option value="5">3rd Year, 2nd Sem</option>
                                <option value="6">4th Year, 1st Sem</option>
                                <option value="7">4th Year, 2nd Sem</option>
                            </select><!-- to here here -->
                            </div>

                            <?// CONTENT SELECTION FOR GRADES?>
                            <div id ="four-two">
                                        <div id ="fourtwo0" class = "hidden">
                                            <table>
                                                    <tr> 
                                                        <th>Course Code</th>
                                                        <th>Descriptive Title</th>
                                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                                        
                                                    </tr>
                                                    <?php
                                                    include('dbcon.php');
                                                    $ref_table = 'course_curriculum/bsed_m/first_year/first_sem';
                                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                                    if ($fetchdata > 0) {
                                                        $i = 0;
                                                        foreach ($fetchdata as $key => $row) {
                                                            ?>
                                                        <tr>	
                                                            <td> <?= $row['code']; ?> </td>
                                                            <td> <?= $row['descriptive_title']; ?> </td>
                                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/first_year/first_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                                            
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
                                        </div>
                        

                <?//boundary/////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                        <div id ="fourtwo1" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/first_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/first_year/second_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary?>
                        <div id ="fourtwo2" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/second_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/second_year/first_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

						<div id ="fourtwo3" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/second_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/second_year/second_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary?>
                        <div id ="fourtwo4" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/third_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/third_year/first_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>
                        
                        <?//boundary for subject?>
                        <div id ="fourtwo5" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/third_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/third_year/second_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
                        </div>

                        <?//boundary for subject?>
                        <div id ="fourtwo6" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/fourth_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/fourth_year/first_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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

                        </div>

                        <?//boundary for subject?>
                        <div id ="fourtwo7" class = "hidden">
						<table>
                                    <tr> 
                                        <th>Course Code</th>
                                        <th>Descriptive Title</th>
                                         <th>Units</th>
                                                        <?php if(isset($_SESSION['verified_registrar'])):?>
                                                        <th>Edit</th>
                                                        <?php endif; ?>
                                        
                                    </tr>
                                    <?php
                                    include('dbcon.php');
                                    $ref_table = 'course_curriculum/bsed_m/fourth_year/second_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
									if ($fetchdata > 0) {
										$i = 0;
										foreach ($fetchdata as $key => $row) {
											?>
										<tr>	
											<td> <?= $row['code']; ?> </td>
                                            <td> <?= $row['descriptive_title']; ?> </td>
                                            <td> <?= $row['units']; ?> </td>
                                                            <?php if(isset($_SESSION['verified_registrar'])):?>
                                                            <td>
                                                                <a href="editcurric.php?id=bsed_m/fourth_year/second_sem/<?=$key;?>&course=BSED_M" id="btnView"> View </a>
                                                            </td>
                                                            <?php endif; ?>
                                            
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
								</div>

                    
                </form>



                                </div>
                                </div>
</center>






                







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


</body>
</html>