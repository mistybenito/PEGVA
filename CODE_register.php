<?php
session_start();
include('dbcon.php');

// REGISTER CODE

if (isset($_POST['register_btn'])) {
    $fullname = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $secret = $_POST['seccode'];


    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+63' . $phone,
        'password' => $password,
        'displayName' => $fullname,
    ];


    $ref = 'passcode';
    $getdata = $database->getReference($ref)->getValue();

    if ($getdata > 0) 
    {
        $secretcode = $getdata['seccode'];
        if ($secret == $secretcode) 
        {
            $createdUser = $auth->createUser($userProperties);

            if ($createdUser) 
            {
                $_SESSION['status'] = "User created successfully.";
                header("Location: setrole.php?name=$fullname");
                exit();
            } 
            else 
            {
                $_SESSION['status'] = "User creation failed.";
                header('Location: register.php');
                exit();
            }
        }
        else
        {
            $_SESSION['status'] = "Wrong secret code.";
                header("Location: register.php");
                exit();
        }
    }
}
?>
