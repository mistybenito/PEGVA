<?php
session_start();
include('dbcon.php');
//first year first sem
//CS111
if(isset($_POST['add_grades_CS111']))
{
    $key = $_POST['id'];
    $grade = $_POST['grade1'];
    $status = $_POST['Grade'];


    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];


    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postStatus);
        $postRef_result = $database->getReference($ref_table2)->update($postGrade);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_CS111.php?id='.$key);
    }

}

//CS112
if(isset($_POST['add_grades_CS112']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade2' => $grade,
    ];
    $postStatus = [
        'grade2' =>$grade,
        'Grade' => $status,
    ];

   
    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_CS112.php?id='.$key);
    }
}


//GE100

if(isset($_POST['add_grades_GE100']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade3' => $grade,
    ];
    $postStatus = [
        'grade3' =>$grade,
        'Grade' => $status,
    ];

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_GE100.php?id='.$key);
    }
}


//GE101

if(isset($_POST['add_grades_GE101']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade4' => $grade,
    ];
    $postStatus = [
        'grade4' =>$grade,
        'Grade' => $status,
    ];

   

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_GE101.php?id='.$key);
    }
}

//GE102

if(isset($_POST['add_grades_GE102']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade5' => $grade,
    ];
    $postStatus = [
        'grade5' =>$grade,
        'Grade' => $status,
    ];

   
    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_GE102.php?id='.$key);
    }
    }

//GE103

if(isset($_POST['add_grades_GE103']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade6' => $grade,
    ];
    $postStatus = [
        'grade6' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_GE103.php?id='.$key);
    }
    }


//fil111

if(isset($_POST['add_grades_fil111']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade7' => $grade,
    ];
    $postStatus = [
        'grade7' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_FIL111.php?id='.$key);
    }
    }

    //reed111

if(isset($_POST['add_grades_REED111']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade8' => $grade,
    ];
    $postStatus = [
        'grade8' =>$grade,
        'Grade' => $status,
    ];

    
    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_REED111.php?id='.$key);
    }
    }

        //pe111

if(isset($_POST['add_grades_PE111']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade9' => $grade,
    ];
    $postStatus = [
        'grade9' =>$grade,
        'Grade' => $status,
    ];

    
    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);

        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_PE111.php?id='.$key);
    }
    }


      //NSTp1

if(isset($_POST['add_grades_NSTP1']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade10' => $grade,
    ];
    $postStatus = [
        'grade10' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: 11_addgrades_NSTP1.php?id='.$key);
    }
    }


//first year second sem



//CS121
if(isset($_POST['add_grades_CS121']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/CS121/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS122
if(isset($_POST['add_grades_CS122']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade2' => $grade,
    ];
    $postStatus = [
        'grade2' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/CS122/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //GE104
if(isset($_POST['add_grades_GE104']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade3' => $grade,
    ];
    $postStatus = [
        'grade3' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/GE104/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }



    //GE105
if(isset($_POST['add_grades_GE105']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade4' => $grade,
    ];
    $postStatus = [
        'grade4' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/GE105/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


//GE1046
if(isset($_POST['add_grades_GE106']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade5' => $grade,
    ];
    $postStatus = [
        'grade5' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/GE106/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


    //GE107
if(isset($_POST['add_grades_GE107']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade6' => $grade,
    ];
    $postStatus = [
        'grade6' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/GE107/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }



    //FIL121
if(isset($_POST['add_grades_fil121']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade7' => $grade,
    ];
    $postStatus = [
        'grade7' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/FIL121/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


     //REED121
if(isset($_POST['add_grades_REED121']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade8' => $grade,
    ];
    $postStatus = [
        'grade8' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/first_year/second_sem/REED121/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }




 //pe121
 if(isset($_POST['add_grades_PE121']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade9' => $grade,
    ];
    $postStatus = [
        'grade9' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/first_year/second_sem/PE121/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }



     //nstp2
 if(isset($_POST['add_grades_NSTP2']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade10' => $grade,
    ];
    $postStatus = [
        'grade10' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/first_year/second_sem/NSTP2/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/first_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }




     // second year 1st sem////////////////////////////////////

     //CS211
 if(isset($_POST['add_grades_CS211']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/CS211/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //CS212
 if(isset($_POST['add_grades_CS212']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade2' => $grade,
    ];
    $postStatus = [
        'grade2' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/CS212/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //CS213
 if(isset($_POST['add_grades_CS213']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade3' => $grade,
    ];
    $postStatus = [
        'grade3' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/CS213/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //CS214
 if(isset($_POST['add_grades_CS214']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade4' => $grade,
    ];
    $postStatus = [
        'grade4' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/CS214/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //GE108
 if(isset($_POST['add_grades_GE108']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade5' => $grade,
    ];
    $postStatus = [
        'grade5' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/GE108/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }



     //GE109
 if(isset($_POST['add_grades_GE109']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade6' => $grade,
    ];
    $postStatus = [
        'grade6' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/GE109/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //fil211
 if(isset($_POST['add_grades_fil211']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade7' => $grade,
    ];
    $postStatus = [
        'grade7' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/FIL211/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

//El211
 if(isset($_POST['add_grades_EL211']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade8' => $grade,
    ];
    $postStatus = [
        'grade8' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/EL211/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //REED211
 if(isset($_POST['add_grades_REED211']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade9' => $grade,
    ];
    $postStatus = [
        'grade9' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/REED211/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //pe211
 if(isset($_POST['add_grades_PE211']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade10' => $grade,
    ];
    $postStatus = [
        'grade10' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/first_sem/PE211/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     // SECOND YEAR 2ND SEM/////////////////////////////////////////////////////


      //CS221
 if(isset($_POST['add_grades_CS221']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/CS221/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //CS222
 if(isset($_POST['add_grades_CS222']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade2' => $grade,
    ];
    $postStatus = [
        'grade2' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/CS222/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //CS223
 if(isset($_POST['add_grades_CS223']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade3' => $grade,
    ];
    $postStatus = [
        'grade3' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/CS223/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

//CS224
if(isset($_POST['add_grades_CS224']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade4' => $grade,
    ];
    $postStatus = [
        'grade4' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/second_year/second_sem/CS224/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


    //GE110
 if(isset($_POST['add_grades_GE110']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade5' => $grade,
    ];
    $postStatus = [
        'grade5' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/GE110/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }



     //GE111
 if(isset($_POST['add_grades_GE111']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade6' => $grade,
    ];
    $postStatus = [
        'grade6' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/GE111/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //EL221
 if(isset($_POST['add_grades_EL221']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade7' => $grade,
    ];
    $postStatus = [
        'grade7' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/EL221/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //EL222
 if(isset($_POST['add_grades_EL222']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade8' => $grade,
    ];
    $postStatus = [
        'grade8' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/EL222/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //REED221
 if(isset($_POST['add_grades_REED221']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade9' => $grade,
    ];
    $postStatus = [
        'grade9' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/REED221/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //pe221
 if(isset($_POST['add_grades_PE221']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade10' => $grade,
    ];
    $postStatus = [
        'grade10' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/second_year/second_sem/PE221/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/second_year/second_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     // THIRD YEAR 1ST SEM

     //CS311
 if(isset($_POST['add_grades_CS311']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/third_year/first_sem/CS311/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //CS312
 if(isset($_POST['add_grades_CS312']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/third_year/first_sem/CS312/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }


     //CS313
 if(isset($_POST['add_grades_CS313']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/third_year/first_sem/CS313/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

     //CS314
 if(isset($_POST['add_grades_CS314']))
 {
     $key = $_POST['id'];
     $course = $_POST['Course'];
     $subject_code = $_POST['Subject_code'];
     $desc = $_POST['Desc_title'];
     $grade = $_POST['Grade'];
     $unit = $_POST['Unit'];
 
     $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];
 
     
 
     if($grade < "100")
     {
         $ref_table = 'Subjects/BSCS/third_year/first_sem/CS314/'.$key;
         $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
         $postRef_result = $database->getReference($ref_table)->update($postGrade);
         $postRef_result = $database->getReference($ref_table2)->push($postInfo);
         if($postRef_result)
         { 
             $_SESSION['status'] = "Grade Added Successfully";
             header('Location: ../viewsub_BSCS.php');
         }
         else
         {
            $_SESSION['status'] = "Grade Not Added Successfully";
            header('Location: ../viewsub_BSCS.php');
         }
     }
     elseif($grade > "100")
     {
         $_SESSION['status'] = "Invalid Grade";
         header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
     }
     }

//CS315
if(isset($_POST['add_grades_CS315']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/first_sem/CS315/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


    //el311
if(isset($_POST['add_grades_EL311']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/first_sem/EL311/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //el312
if(isset($_POST['add_grades_EL312']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/first_sem/EL312/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    

// THIRD YEAR SECOND SEM

//CS321
if(isset($_POST['add_grades_CS321']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS321/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS322
if(isset($_POST['add_grades_CS322']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS322/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS323
if(isset($_POST['add_grades_CS323']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS323/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS324
if(isset($_POST['add_grades_CS324']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS324/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS325
if(isset($_POST['add_grades_CS325']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS325/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS326
if(isset($_POST['add_grades_CS326']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS326/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS327
if(isset($_POST['add_grades_CS327']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/third_year/second_sem/CS327/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/third_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }


    // fourth year first sem

    //CS411
if(isset($_POST['add_grades_CS411']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS411/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS412
if(isset($_POST['add_grades_CS412']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS412/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS413
if(isset($_POST['add_grades_CS413']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS413/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS414
if(isset($_POST['add_grades_CS414']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS414/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    //CS415
if(isset($_POST['add_grades_CS415']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS415/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/first_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }

    // fourt year second sem

    //CS421
if(isset($_POST['add_grades_CS421']))
{
    $key = $_POST['id'];
    $course = $_POST['Course'];
    $subject_code = $_POST['Subject_code'];
    $desc = $_POST['Desc_title'];
    $grade = $_POST['Grade'];
    $unit = $_POST['Unit'];

    $postGrade = [
        'grade1' => $grade,
    ];
    $postStatus = [
        'grade1' =>$grade,
        'Grade' => $status,
    ];

    

    if($grade < "100")
    {
        $ref_table = 'Subjects/BSCS/fourth_year/second_sem/CS421/'.$key;
        $ref_table2 = 'User/'.$key.'/grades/fourth_year/second_sem';
        $postRef_result = $database->getReference($ref_table)->update($postGrade);
        $postRef_result = $database->getReference($ref_table2)->push($postInfo);
        if($postRef_result)
        { 
            $_SESSION['status'] = "Grade Added Successfully";
            header('Location: ../viewsub_BSCS.php');
        }
        else
        {
           $_SESSION['status'] = "Grade Not Added Successfully";
           header('Location: ../viewsub_BSCS.php');
        }
    }
    elseif($grade > "100")
    {
        $_SESSION['status'] = "Invalid Grade";
        header('Location: TEST_NEW_VIEWSUB.php?id='.$key);
    }
    }
?>