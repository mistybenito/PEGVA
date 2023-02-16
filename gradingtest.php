<? // CONTENT SELECTION FOR GRADES?>
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<div id ="one-one">
    <div id ="oneone0" class = "hidden">
        <form name="form1" method="POST">
            <table>
                <tr> 
                    <th>Student Number</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Remark</th>
                    <th>Add/Edit</th>
                </tr>
                <?php
                    include('dbcon.php');
                    $reference = 'course_curriculum/bscs/first_year/first_sem/subject01'; //HERE
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                ?>
                    <input type="hidden" name = "Course" id = "Course" value ="Bachelor of Science in Computer Science">           
                    <input type="hidden" name = "Course" value ="Bachelor of Science in Computer Science">
                    <input type="text" name = "Subject_code" value ="<?= $scode = $fetch['code']; ?>">
                    <input type="text" name = "Desc_title" value = "<?= $desc = $fetch['descriptive_title']; ?>">
                    <input type="text" name = "Unit" value ="<?= $units = $fetch['units']; ?>"> 
                    <input type="text" name = "grade" value ="<?= $grade = $fetch['grade']; ?>">  
                                            
                <?php
                    } //to HERE
                    $ref_table = 'Subjects/BSCS/first_year/first_sem/' . $scode;
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
                                    if ($row['Grade'] == "0")
                                    {
                                ?>
                                    <td> No Grades yet.</td>
                                    <td> N/A </td>
                                    <td> 
                                    <!-- important inputs-->
                                    
                                        <input type="hidden" name = "uid" id = "uid" value = "<?= $key_child; ?>">
                                        <input type="hidden" name = "Grade" id = "Grade" value = "1">  
                                        <input type="hidden" name = "reference" id ="reference" value ="<?= $reference; ?>">
                                        <input type="hidden" name = "sub" id ="sub" value ="<?= $ref_table; ?>">
                                        <input type="hidden" name = "where" id = "where" value ="<?= $sub_table; ?>">
                                    <!-- important inputs-->
                                    </td>
                    
                                    <td>
                                        <input type="text" type ="submit" name = "<?= $grade ?>" id = "<?= $grade ?>" ></input>
                                        <button type="submit" name="addgrades" id="addgrades_<?= $key_child; ?>" value="<?= $key_child ?>"> Save </button>
                                    </td>
                                </tr>           
                        
                                <?php
                                    } else {
                                ?>
                                        <td> <?= $row['grade01']; ?></td>

                                        <?php
                                            if ($row['grade01'] <= "3.0") {
                                        ?>
                                            <td> Passed </td>

                                        <?php
                                            } elseif ($row['grade01'] > "3.0") {
                                        ?>
                                            <td> Failed </td>

                                        <?php
                                            }
                                        ?>
                                        <td> 
                                            <a href="addgrades/BSCS_addgrades.php?id=<?= $key_child; ?>&Subject_code=<?= $scode; ?>&ref=<?= $reference; ?>&sub=<?= $ref_table; ?>&where=<?= $sub_table; ?>" class = "btn btn btn-primary" style="color=black"> Edit  </a>
                                        </td>
                                        <td> Delete </td>

                                <?php
                                    }
                        }
                    } else {
                ?>
                    <td colspan = "7"> No Record found </td> 
                <?php
                    }
                ?>
            </table>
        </form>           
    </div>
</div>

<script>
    $(document).ready(function() {
        $("form").submit(function(e) {
            e.preventDefault();
        });


        $('[name="addgrades"]').click(function(e){
            e.preventDefault();

            console.log("test");

            var data = {
                "uid": $("#uid").val(),
                "Course": $("#Course").val(),
                "Grade": $("#Grade").val(),
                "reference": $("#reference").val(),              
                "sub": $("#sub").val(),
                "where": $("#where").val(),
                "<?=$grade;?>": $("#<?=$grade;?>").val(),
                "addgrades_<?=$key_child;?>":  $("#addgrades_<?=$key_child;?>").val(),
            };
            
            $.ajax({
                url: "addgrades/code_addgradestest.php",
                type: "POST",
                data: data,	 
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                }
            });
        });
                    
    });
</script>
