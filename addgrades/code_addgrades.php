<?php
session_start();
include('dbcon.php');



$table = $_POST['reference'];
$subtable = $_POST['sub'];
$where = $_POST['where'];
$course = $_POST['Course'];
$getdata = $database->getReference($table)->getValue();
if ($getdata > 0) {


    foreach ($getdata as $key => $row) {


        $s = $getdata['code'];
        $g = $getdata['grade'];


        if (isset($_POST['add_grades_' . $s])) {
            $key = $_POST['id'];
            $grade = $_POST[$g];
            $status = $_POST['Grade'];


            $postGrade = [
                $g => $grade,
            ];
            $postStatus = [
                $g => $grade,
                'Grade' => $status,
            ];


            $ref_table = $subtable .'/'. $key;
            $ref_table2 = 'User/' . $key . '/grades/' . $where;
            $postRef_result = $database->getReference($ref_table)->update($postStatus);
            $postRef_result = $database->getReference($ref_table2)->update($postGrade);
            
            if($course == "Bachelor of Elementary Education")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BEED.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BEED.php');
                }
            }
            elseif($course == "Bachelor of Science in Computer Science")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSCS.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSCS.php');
                }
            }
            elseif($course == "Bachelor of Science in Office Administration")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSOA.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSOA.php');
                }
            }
            elseif($course == "Bachelor of Arts in Religious Education")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_ABREED.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_ABREED.php');
                }
            }

            elseif($course == "Bachelor of Science in Business Administration")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSBA.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSBA.php');
                }
            }
            elseif($course == "Bachelor of Secondary Education Major in English")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSED-ENG.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSED_ENGphp');
                }
            }
            elseif($course == "Bachelor of Secondary Education Major in Science")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSED-SCI.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSED_SCI.php');
                }
            }
            elseif($course == "Bachelor of Secondary Education Major in Mathematics")
            {
                if ($postRef_result) 
                {
                    $_SESSION['status'] = "Grade Added Successfully";
                    header('Location: ../viewsub_BSED-MATH.php');
                } 
                else 
                {
                    $_SESSION['status'] = "Grade Not Added Successfully";
                    header('Location: ../viewsub_BSED_MATH.php');
                }
            }
           





        }
    }
}
?>