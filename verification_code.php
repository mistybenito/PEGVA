<?php
include('dbcon.php');

session_start();

// verify CONTACT CODE
if(isset($_POST['yes_verify']))
{
    $key = $_POST['id'];
    $verify = $_POST['verify'];

    $updateData = [
        'verify' => $verify,
    ];

        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);


        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: student_BSCS.php');
        }
    }

    elseif(isset($_POST['no_verify']))
{
    $key = $_POST['id'];
    $not_verify = $_POST['not_verify'];

    $updateData = [
        'verify' => $not_verify,
    ];

        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);


        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: student_BSCS.php');
        }
    }

?>