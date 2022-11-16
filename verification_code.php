<?php
include('dbcon.php');

session_start();

// verify CONTACT CODE
if(isset($_POST['verify_contact']))
{
    $key = $_POST['id'];
    $student_code = $_POST['Student_number'];
    $email = $_POST['Email'];
    $course = $_POST['Course'];
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $phone = $_POST['Contact_Number'];
    $bday = $_POST['Birthday'];
    $mother = $_POST['Mother'];
    $mothernum = $_POST['Mother_number'];
    $father = $_POST['Father'];
    $fathernum = $_POST['Father_Number'];

    $updateData = [
        'Student_number' => $student_code,
        'Email' => $email,
        'Course' => $course,
        'Name'=>$name,
        'Address'=>$address,
        'Contact_Number'=>$phone,
        'Birthday'=>$bday,
        'Mother' =>$mother,
        'Mother_number' =>$mothernum,
        'Father' => $father,
        'Father_number' => $fathernum,
    ];



    if($student_code > "20180000")
    {
        $ref_table = 'User/'.$key;
        $del_table = 'verify/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $deletequery_result = $database->getReference($del_table)->remove();

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully";
            header('Location: students.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: invalid_students.php');
        }
    }
    elseif($student_code < "20180000")
    {
        $_SESSION['status'] = "Code still invalid.";
        header('Location: invalid_students.php');


    }elseif($student_code > "20200000")
    {
        $_SESSION['status'] = "Code still invalid.";
        header('Location: invalid_students.php');
    }


}