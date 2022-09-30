<?php
session_start();
include('dbcon.php');

// ADD SUBJECT CODE bsba 1ST SEM 1ST YEAR

if (isset($_POST['add_subject_bsed-eng_1y_1s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/First Year/1st Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// ADD SUBJECT 1ST YEAR 2ND SEM

if (isset($_POST['add_subject_bsed-eng_1y_2s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/First Year/2nd Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}


// 2ND YEAR 1ST SEM

if (isset($_POST['add_subject_bsed-eng_2y_1s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Second Year/1st Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// 2nd year 2nd sem

if (isset($_POST['add_subject_bsed-eng_2y_2s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Second Year/2nd Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// 3rd year 1st sem

if (isset($_POST['add_subject_bsed-eng_3y_1s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Third Year/1st Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// 3rd year 2nd sem

if (isset($_POST['add_subject_bsed-eng_3y_2s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Third Year/2nd Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// 4th year 1st sem

if (isset($_POST['add_subject_bsed-eng_4y_1s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Fourth Year/1st Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}

// 4th year 2nd sem

if (isset($_POST['add_subject_bsed-eng_4y_2s']))
{
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
    ];

    $ref_table = "Course&Curriculum/Bachelor of Secondary Education, Major in English/Fourth Year/2nd Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: BSED-ENG.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: BSED-ENG.php');
    }
}



?>