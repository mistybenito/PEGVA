<?php
include('authentication.php');
include('dbcon.php');

session_start();

// cs111
if(isset($_POST['add_sub_cs111']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/bscs/1ST YEAR/1ST SEM/CS111/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully to BSCS/1STYEAR/1STSEM/CS111";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: reg.php');
        }





    }


    // cs112
    if(isset($_POST['add_sub_cs112']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/bscs/1ST YEAR/1ST SEM/CS112/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully to BSCS/1STYEAR/1STSEM/CS112";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: reg.php');
        }





    }
    ?>

