<?php
session_start();
include('dbcon.php');


if(isset($_POST['delete_btn']))
{
    $del_id = $_POST['delete_btn'];
    $course = $_POST['Course'];


    if($course == "Bachelor of Science in Computer Science")
    {
        $ref_table = 'User/'.$del_id;
        $delete = $database->getReference($ref_table)->remove();

        if($delete)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSCS.php');
        }
    }
    elseif($course == "Bachelor of Science in Business Administration")
    {
        $ref_table = 'User/'.$del_id;
        $delete = $database->getReference($ref_table)->remove();

        if($delete)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSBA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSBA.php');
        }
    }

    elseif($course == "Bachelor of Science in Office Administration")
    {
        $ref_table = 'User/'.$del_id;
        $delete = $database->getReference($ref_table)->remove();

        if($delete)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSOA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSOA.php');
        }
    }
}




?>
