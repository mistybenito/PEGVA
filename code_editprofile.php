<?php
session_start();
include('dbcon.php');


if(isset($_POST['update_contact']))
{
    $key = $_POST['id'];
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $phone = $_POST['Contact_Number'];
    $bday = $_POST['Birthday'];
    $mother = $_POST['Mother'];
    $mothernum = $_POST['Mother_number'];
    $father = $_POST['Father'];
    $fathernum = $_POST['Father_Number'];
    $course = $_POST['Course'];
    

    $updateData = [
        'Name'=>$name,
        'Address'=>$address,
        'Contact_Number'=>$phone,
        'Birthday'=>$bday,
        'Mother' =>$mother,
        'Mother_number' =>$mothernum,
        'Father' => $father,
        'Father_number' => $fathernum,
    ];

    if($course == "Bachelor of Science in Computer Science")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSCS.php');
        }
    }

    elseif($course == "Bachelor of Science in Office Administration")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSOA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSOA.php');
        }
    }

    elseif($course == "Bachelor of Science in Business Administration")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSBA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSBA.php');
        }
    }

    elseif($course == "Bachelor of Elementary Education")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BEED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BEED.php');
        }
    }

    elseif($course == "Bachelor of Arts in Religious Education")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_ABREED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_ABREED.php');
        }
    }
    

    elseif($course == "Bachelor of Secondary Education, Major in English")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSED-ENG.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSED-ENG.php');
        }
    }

    elseif($course == "Bachelor of Secondary Education, Major in Science")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSED-SCI.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSED-SCI.php');
        }
    }

    elseif($course == "Bachelor of Secondary Education, Major in Math")
    {
        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
        if($updatequery_result)
        {
            $_SESSION['status'] = "Contact Updated Successfully";
            header('Location: student_BSED-MATH.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Updated Successfully";
            header('Location: student_BSED-MATH.php');
        }
    }
}

?>