<?php
session_start();
include('dbcon.php');


// TEST CODE
if (isset($_POST['TEST']))

{
    $key = $_POST['key'];
    $key_child = $_POST['key_child'];
    $ccode= $_POST['Course_Code'];
    $desc= $_POST['Desc_title'];
    $unit= $_POST['Unit'];
    $prereq= $_POST['Pre-Req'];
    $grade= $_POST['Grade'];

    $addData = [
        'Course_Code' => $ccode,
        'Desc_title' => $desc,
        'Unit' => $unit,    
        'Pre-Req'=> $prereq,
        'Grade' => $grade,
    ];


    $addData_result = $database->getReference('User/'.$key.'/Grades/1st Year/1st Sem')->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: samplegrades.php?=id'.$key);
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: samplegrades.php');
    }
}
// ADD SUBJECT CODE BSCS 1ST SEM 1ST YEAR

if (isset($_POST['add_subject_bscs_1y_2s']))
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

    $ref_table = "Course&Curriculum/Bachelor of Science in Computer Science/First Year/2nd Sem";

    $addData_result = $database->getReference($ref_table)->push($addData);

    if($addData_result)
    {
        $_SESSION['status'] = "Subject Added Successfully";
        header('Location: sample.php');
    }
    else
    {
        $_SESSION['status'] = "Subject not addded";
        header('Location: sample.php');
    }
}

// UPDATE CODE


if(isset($_POST['update_registrar']))
{
    $key = $_POST['key'];
    $fullname = $_POST['Name'];
    $phone = $_POST['Contact_number'];
    $address = $_POST['Address'];
    $birthdate = $_POST['Birthday'];
    $mother = $_POST['Mother'];
    $mcon = $_POST['Mother_number'];
    $father = $_POST['Father'];
    $fcon = $_POST['Father_number'];

    $updateData = [
        'Name' =>$fullname,
        'Contact_number'=> $phone,
        'Address'=> $address,
        'Birthday'=> $birthdate,
        'Mother'=> $mother,
        'Mother_number'=> $mcon,
        'Father'=> $father,
        'Father_number'=> $fcon,
    ];

    $ref_table = 'User/'.$key;
    $updateQuery_result = $database->getReference($ref_table)->update($updateData);

    if($updateQuery_result)
    {
        $_SESSION['status'] = "Contact updated successfully";
        header('Location: registrar1.php');
    }
    else
    {
        $_SESSION['status'] = "Contact not updated successfully";
        header('Location: registrar1.php');
    }
}
else
{

}

// REGISTER CODE

if(isset($_POST['register_btn']))
{
    $fullname = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+63'.$phone,
        'password' => $password,
        'displayName' => $fullname,
    ];
    $createdUser = $auth->createUser($userProperties);

    if($createdUser)
    {
        $_SESSION['status'] = "User created successfully.";
        header('Location: register.php');
        exit();
    }
}
?>