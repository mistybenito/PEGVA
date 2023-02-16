<?// CONTENT SELECTION FOR GRADES?>
            <div id ="one-one">
                        <div id ="oneone0" class = "hidden">
                            <table>
                            <form name="form1" method="post" id = "addgrade_form">
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
                                    $reference = 'course_curriculum/bscs/first_year/first_sem/subject01'; //HERE
                                    $fetch = $database->getReference($reference)->getValue();
                                    if ($fetch > 0) {
                                        ?>
                                        
                                        <input type="hidden" name = "Course" value ="Bachelor of Science in Computer Science">
                                        <input type="text" name = "Subject_code" value ="<?= $scode = $fetch['code']; ?>">
                                        <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title']; ?>">
                                        <input type="text" name = "Unit" value ="<?= $units = $fetch['units']; ?>"> 
                                        <input type="hidden" name = "gradevalue" value ="<?= $grade = $fetch['grade']; ?>">  
                                                                    
                                        <?php
                                    }//to HERE
                                   $ref_table = 'Subjects/BSCS/first_year/first_sem/'.$scode;
                                    $sub_table = 'first_year/first_sem';
                                    $fetchdata = $database->getReference($ref_table)->getValue();
                                    if ($fetchdata > 0) {
                                        $i = 0;
                                        
                                        foreach ($fetchdata as $key_child => $row) {
                                            $keys[] = array($key_child);
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
                                                        
                                                        <input type="hidden" name = "id" value = "<?= $key_child; ?>">
                                                        <input type="hidden" name = "Grade" value = "1">  </input>
                                                        <input type="hidden" name = "reference" value ="<?= $reference; ?>"> </input>
                                                        <input type="hidden" name = "sub" value ="<?= $ref_table;?>"></input>
                                                        <input type="hidden" name = "where" value ="<?=$sub_table;?>"></input>
                                                        <input type="text" type ="submit" name = "<?=$grade?>" id = "<?=$grade?>" ></input>
                                                        <center><button type="button" name = "addgrade" id="addgrade"> Save </button></center>
                                                            
                                                        
                                                        </td>
                                                        <td> N/A </td>
                                                    </tr>
                                                    
                                                    <?php
                                            } else {
                                                    ?>
                                                        <td> <?= $row['grade01']; ?></td>
                                                        <?php
                                                if ($row['grade01'] <= "3.0") 
                                                {
                                                        ?>
                                                            <td> Passed </td>
                                                            <?php
                                                } 
                                                elseif ($row['grade01'] > "3.0") 
                                                {
                                                            ?>
                                                            <td> Failed </td>
                                                            <?php
                                                }
                                                            ?>
                                                        <td> 
                                                        <a href="addgrades/BSCS_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&ref=<?= $reference; ?>&sub=<?= $ref_table; ?>&where=<?= $sub_table;?>" class = "btn btn btn-primary" style="color=black"> Edit  </a>
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
                                    <center><button type="button" name = "addgrade" id="addgrade"> Save <?=  print_r($keys)?> </button></center>

                                    </form>
                                    <div id ="result"></div>

  <script type="text/javascript">
    $('document').ready(function(){
        $('form1').on('addgrade',function(event){

            event.preventDefault();//prevent the form from reloading the page when submit

            var formData = $('form1').serialize(); // reading form input

            $.ajax({

                type :'POST',
                data : formData,
                url  : 'addgrades/code_addgradestest.php', 
                dataType : 'json',
                encode : true,
                success : function(response){

                    //response = JSON.parse(response);

                    if(response == "ok"){
                        $('#success').html('profile updated success');
                         setTimeout(' window.location.href = "add_grade_test.php"; ', 6000); // redirecting
                    }else{
                        //could not update

                        $('#error').html(response);

                    }
                },
                error : function(e){

                    console.log(e); // debugging puporse only
                }

            });
        });
    });
</script>
                                
                        </div>