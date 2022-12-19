<?php
include('dbcon.php');

session_start();

// cs111
if(isset($_POST['add_sub_cs111_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111/'.$key;



    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully to CS111";
            header('Location: addsub_bscs.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


    // cs112
if(isset($_POST['add_sub_cs112_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS112";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


    //ge100
if(isset($_POST['add_sub_ge100_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE100";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }





    //GE101
if(isset($_POST['add_sub_ge101_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE101";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }  
            


// GE102


if(isset($_POST['add_sub_ge102_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE101";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            
        }



//ge 103
if(isset($_POST['add_sub_ge103_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE103";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }
            

//ge104

if(isset($_POST['add_sub_ge104_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE104/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE104";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }
            
//fil111
if(isset($_POST['add_sub_fil111_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to FIL111";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }
            
            


//reed111

if(isset($_POST['add_sub_reed111_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to REED111";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            
        }
            
//pe111


if(isset($_POST['add_sub_pe111_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to PE111";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            }
        }  
            


//nstp1 NSTP1

if(isset($_POST['add_sub_nstp1_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to NSTP1";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            } 
        }
//1ST YEAR 2ND SEM///////////////////////////////////////////////////////////////////////////////////////////////////


// cs121
if(isset($_POST['add_sub_cs121_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/CS121/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }

    // cs122
if(isset($_POST['add_sub_cs122_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/CS122/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }

     // ge104
if(isset($_POST['add_sub_ge104_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/GE104/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


     // ge105
if(isset($_POST['add_sub_ge105_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/GE105/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }

     // ge106
if(isset($_POST['add_sub_ge106_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/GE106/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }

     // ge107
if(isset($_POST['add_sub_ge107_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/GE107/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


     // fil121
if(isset($_POST['add_sub_fil121_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/FIL121/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


    
     // reed121
if(isset($_POST['add_sub_reed121_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/REED121/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


    // PE121
if(isset($_POST['add_sub_pe121_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/PE121/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }


    // nstp2
if(isset($_POST['add_sub_nstp2_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_post['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' => $grade,
    ];

    $ref_table = 'Subjects/BSCS/first_year/second_sem/NSTP2/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        }
    }
        

// SECOND YEAR SECOND YEAR SECOND YEAR///////////////////////////////////////////////////////////////////////////////////////////////////

// 2nd year 1st sem///////////////////////////////////////////////////////////////////////////////////////////////////
//CS211
if(isset($_POST['add_sub_cs211_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/second_year/first_sem/CS211/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to CS211";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            } 
        }
//CS212
if(isset($_POST['add_sub_cs212_a']))
    {
        $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    
        $ref_table = 'Subjects/BSCS/second_year/first_sem/CS212/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to CS212";
                header('Location: addsub_BSCS.php?id='.$key);
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: addsub_BSCS.php?id='.$key);
            } 
        }

        //CS213
if(isset($_POST['add_sub_cs213_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/CS213/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS213";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }

    //CS214
if(isset($_POST['add_sub_cs214_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/CS214/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS212";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }

    //ge108
if(isset($_POST['add_sub_ge108_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/GE108/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS212";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }

    //GE109
    if(isset($_POST['add_sub_ge109_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/GE109/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }



    //fil211
    if(isset($_POST['add_sub_fil211_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/FIL211/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }


    //EL211
    if(isset($_POST['add_sub_el211_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/EL211/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }


    //reed211
    if(isset($_POST['add_sub_reed211_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/REED211/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }



    //pe211
    if(isset($_POST['add_sub_pe211_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/first_sem/PE211/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }


    // 2ND YEAR 2ND SEM///////////////////////////////////////////////////////////////////////////////////////////////////

    //CS221
if(isset($_POST['add_sub_cs221_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/second_sem/CS221/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }
//CS222
if(isset($_POST['add_sub_cs222_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
    $ref_table = 'Subjects/BSCS/second_year/second_sem/CS222/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully";
            header('Location: addsub_BSCS.php?id='.$key);
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: addsub_BSCS.php?id='.$key);
        } 
    }

    //CS223
if(isset($_POST['add_sub_cs223_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/CS223/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully to CS223";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//CS224
if(isset($_POST['add_sub_cs224_a']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];
$ref_table = 'Subjects/BSCS/second_year/second_sem/CS224/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//ge110
if(isset($_POST['add_sub_ge110_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/GE110/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//GE111
if(isset($_POST['add_sub_ge111_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/GE111/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}



//el221
if(isset($_POST['add_sub_el221_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/EL221/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//EL222
if(isset($_POST['add_sub_el222_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/EL222/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//reed221
if(isset($_POST['add_sub_reed211_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/REED211/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//pe221
if(isset($_POST['add_sub_pe211_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/second_year/second_sem/PE211/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}




// THIRD YEAR THIRD YEAR THIRD YEAR/////////////////////////////////////////////////////////////////////////////////////////////////////

// third year 1st sem/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//cs311
if(isset($_POST['add_sub_cs311_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/CS311/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//cs312
if(isset($_POST['add_sub_cs312_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/CS312/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//cs313
if(isset($_POST['add_sub_cs313_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/CS313/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//cs314
if(isset($_POST['add_sub_cs314_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/CS314/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}



//cs315
if(isset($_POST['add_sub_cs315_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/CS315/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//el311
if(isset($_POST['add_sub_el311_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/EL311/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//el312
if(isset($_POST['add_sub_el312_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/first_sem/EL312/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


// 3RD YEAR 2ND SEM//////////////////////////////////////////////////////////////////////////////////////////////////////////


//CS321
if(isset($_POST['add_sub_cs321_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS321/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//CS322
if(isset($_POST['add_sub_cs322_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS322/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//CS323
if(isset($_POST['add_sub_cs323_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS323/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//CS324
if(isset($_POST['add_sub_cs324_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS324/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//CS325
if(isset($_POST['add_sub_cs325_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS325/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//CS326
if(isset($_POST['add_sub_cs326_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS326/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//CS327
if(isset($_POST['add_sub_cs327_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/third_year/second_sem/CS327/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}
//FOURTH YEAR //////////////FOURTH YEAR //////////////FOURTH YEAR //////////////FOURTH YEAR //////////////FOURTH YEAR //////////////


// 4th year first semFOURTH YEAR //////////////FOURTH YEAR //////////////

//cs412
if(isset($_POST['add_sub_cs412_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS412/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}

//cs413
if(isset($_POST['add_sub_cs413_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS413/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//cs414
if(isset($_POST['add_sub_cs414_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS414/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


//cs415
if(isset($_POST['add_sub_cs415_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/fourth_year/first_sem/CS415/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}


// 4TH YEAR 2ND SEM//////////////////////////////////////////////////

//cs421
if(isset($_POST['add_sub_cs421_a']))
{
$key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];
    $grade = $_POST['Grade'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
        'Grade' =>$grade,
    ];

$ref_table = 'Subjects/BSCS/fourth_year/second_sem/CS421/'.$key;

$updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {

        $_SESSION['status'] = "Contact Added Successfully";
        header('Location: addsub_BSCS.php?id='.$key);
    }
    else
    {
        $_SESSION['status'] = "Contact Not Added";
        header('Location: addsub_BSCS.php?id='.$key);
    } 
}



?>

