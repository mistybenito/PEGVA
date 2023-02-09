
<?php
session_start();
include('dbcon.php');


if(isset($_POST['edit_curric']))
{
    $key = $_POST['id'];
    $code = $_POST['code'];
    $desc = $_POST['descriptive_title'];
    $unit = $_POST['units'];
    $course = $_POST['course'];
    

    $updateData = [
        'code'=> $code,
        'descriptive_title'=> $desc,
        'units'=> $unit,
    ];
    $ref_table = 'course_curriculum/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: view_curriculum.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: view_curriculum.php');
        }




}

?>