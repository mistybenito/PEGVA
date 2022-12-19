<?php
session_start();
include('dbcon.php');
//first year first sem
//CS111
if(isset($_POST['add_grades_cs111']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


//cs112
if(isset($_POST['add_grades_cs112']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }

//ge100

if(isset($_POST['add_grades_ge100']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


//ge101

if(isset($_POST['add_grades_ge101']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


//ge102

if(isset($_POST['add_grades_ge102']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }

//ge103

if(isset($_POST['add_grades_ge103']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


//fil111

if(isset($_POST['add_grades_fil111']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }

    //reed111

if(isset($_POST['add_grades_reed111']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }

        //pe111

if(isset($_POST['add_grades_pe111']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


      //NSTp1

if(isset($_POST['add_grades_nstp1']))
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

    $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1/'.$key;
    $ref_table2 = 'User/'.$key.'/Grades/first_year/first_sem';
    $postRef_result = $database->getReference($ref_table)->update($postGrade);
    $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: viewsub_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: viewsub_BSCS.php');
        }
    }


//first year second sem





?>