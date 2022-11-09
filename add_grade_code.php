<?php
session_start();
include('dbcon.php');

//1y1s
if (isset($_POST['1y1s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/first_year/first_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}


//1y2s
if (isset($_POST['1y2s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/first_year/second_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}

//2y1s
if (isset($_POST['2y1s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/second_year/first_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}

//2y2s
if (isset($_POST['2y2s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/second_year/second_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}





//3y1s
if (isset($_POST['3y1s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/third_year/first_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}


//3y2s
if (isset($_POST['3y2s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/third_year/second_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}






//4y1s
if (isset($_POST['4y1s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/fourth_year/first_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}




//4y2s
if (isset($_POST['4y2s']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $course= $_POST['Course'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course' => $course,
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/fourth_year/second_sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: view_grades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: view_grades.php'.$key);
    }
}













?>