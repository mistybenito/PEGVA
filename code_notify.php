<?php
include('dbcon.php');

session_start();


if(isset($_POST['open']))
{
    
    $open_status = $_POST['open_status'];

    $updateData = [
        'status'=>$open_status,
        
    ];

    $ref_table = 'pre_enrollment';



    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Updated Status";
            header('Location: notify.php');
        }
        else
        {
            $_SESSION['status'] = "Status not updated.";
            header('Location: notify.php');
        }
    }


elseif(isset($_POST['close']))
{
    
    $close_status = $_POST['close_status'];

    $updateData = [
        'status'=>$close_status,
        
    ];

    $ref_table = 'pre_enrollment';



    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Updated Status";
            header('Location: notify.php');
        }
        else
        {
            $_SESSION['status'] = "Status not updated.";
            header('Location: notify.php');
        }
    }
?>