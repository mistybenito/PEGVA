<?php
session_start();
include('dbcon.php');
//first year first sem
//CS111
if(isset($_POST['add_grades_cs111']))
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

//cs112
if(isset($_POST['add_grades_cs112']))
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


//ge100

if(isset($_POST['add_grades_ge100']))
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


//ge101

if(isset($_POST['add_grades_ge101']))
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

//ge102

if(isset($_POST['add_grades_ge102']))
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

//ge103

if(isset($_POST['add_grades_ge103']))
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

if(isset($_POST['add_grades_reed111']))
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

if(isset($_POST['add_grades_pe111']))
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

if(isset($_POST['add_grades_nstp1']))
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



//cs121
if(isset($_POST['add_grades_cs121']))
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

    //cs122
if(isset($_POST['add_grades_cs122']))
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

    //ge104
if(isset($_POST['add_grades_ge104']))
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



    //ge105
if(isset($_POST['add_grades_ge105']))
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


//ge1046
if(isset($_POST['add_grades_ge106']))
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


    //ge107
if(isset($_POST['add_grades_ge107']))
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
if(isset($_POST['add_grades_reed121']))
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
 if(isset($_POST['add_grades_pe121']))
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
 if(isset($_POST['add_grades_nstp2']))
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
 if(isset($_POST['add_grades_cs211']))
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
 if(isset($_POST['add_grades_cs212']))
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
 if(isset($_POST['add_grades_cs213']))
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
 if(isset($_POST['add_grades_cs214']))
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


     //ge108
 if(isset($_POST['add_grades_ge108']))
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



     //ge109
 if(isset($_POST['add_grades_ge109']))
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
 if(isset($_POST['add_grades_el211']))
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
 if(isset($_POST['add_grades_reed211']))
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
 if(isset($_POST['add_grades_pe211']))
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


      //cs221
 if(isset($_POST['add_grades_cs221']))
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

     //cs222
 if(isset($_POST['add_grades_cs222']))
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


     //cs223
 if(isset($_POST['add_grades_cs223']))
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

//cs224
if(isset($_POST['add_grades_cs224']))
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


    //ge110
 if(isset($_POST['add_grades_ge110']))
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



     //ge111
 if(isset($_POST['add_grades_ge111']))
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
 if(isset($_POST['add_grades_el221']))
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
 if(isset($_POST['add_grades_el222']))
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
 if(isset($_POST['add_grades_reed221']))
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
 if(isset($_POST['add_grades_pe221']))
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
 if(isset($_POST['add_grades_cs311']))
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
 if(isset($_POST['add_grades_cs312']))
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
 if(isset($_POST['add_grades_cs313']))
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
 if(isset($_POST['add_grades_cs314']))
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
if(isset($_POST['add_grades_cs315']))
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
if(isset($_POST['add_grades_el311']))
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
if(isset($_POST['add_grades_el312']))
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

//cs321
if(isset($_POST['add_grades_cs321']))
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

    //cs322
if(isset($_POST['add_grades_cs322']))
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

    //cs323
if(isset($_POST['add_grades_cs323']))
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

    //cs324
if(isset($_POST['add_grades_cs324']))
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

    //cs325
if(isset($_POST['add_grades_cs325']))
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

    //cs326
if(isset($_POST['add_grades_cs326']))
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

    //cs327
if(isset($_POST['add_grades_cs327']))
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

    //cs411
if(isset($_POST['add_grades_cs411']))
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

    //cs412
if(isset($_POST['add_grades_cs412']))
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

    //cs413
if(isset($_POST['add_grades_cs413']))
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

    //cs414
if(isset($_POST['add_grades_cs414']))
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

    //cs415
if(isset($_POST['add_grades_cs415']))
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

    //cs421
if(isset($_POST['add_grades_cs421']))
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