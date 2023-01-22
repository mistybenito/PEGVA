<?php
session_start();
include('dbcon.php');


if(isset($_POST['add_grades']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'Grade' => $grade,
    ];

    $postInfo = [
        'Desc_title' =>$desc,
        'Course' => $course,
        'Subject_code' => $subject_code,
        'Grade' => $grade,
        'Unit' => $unit,
    ];

    $ref_table = 'Subjects/bscs/1ST YEAR/1ST SEM/CS111/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: TEST_CS111.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: TEST_CS111.php');
        }
    }

?>