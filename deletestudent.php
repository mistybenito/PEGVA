<?php
include('dbcon.php');


if(isset($_POST['delete_btn']))
{
    $del_id = $_POST['delete_btn'];

    $ref_table = 'User/'.$del_id;
    $delete = $database->getReference($ref_table)->remove();

    if($delete)
    {
        $_SESSION['status'] = "Contact deleted.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['status'] = "Contact not deleted.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}




?>
