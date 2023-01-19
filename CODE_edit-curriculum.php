
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


    if($course == "BSCS")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSCS.php');
        }
    }

    elseif($course == "BSED-ENG")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSED-ENG.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSED-ENG.php');
        }
    }

    elseif($course == "BSED-SCI")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSED-SCI.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSED-SCI.php');
        }
    }

    elseif($course == "BSED-MATH")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSED-MATH.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSED-MATH.php');

            
        }
    }

    elseif($course == "ABREED")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: ABREED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: ABREED.php');
        }
    }


    elseif($course == "BEED")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BEED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BEED.php');
        }
    }

    elseif($course == "BSOA")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSOA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSOA.php');
        }
    }

    elseif($course == "BSBA")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: BSBA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: BSBA.php');
        }
    }






}

?>