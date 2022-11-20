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

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111/A/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Student added successfully to CS111 Section A";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
        }
    }

if(isset($_POST['add_sub_cs111_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS111 Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];


    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112/A/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS112 - Section A";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
        }
    }

if(isset($_POST['add_sub_cs112_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];


    $ref_table = 'Subjects/BSCS/first_year/first_sem/CS112/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to CS112 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE100 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }


if(isset($_POST['add_sub_ge100_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE100/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to GE100 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE101 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }  
            
if(isset($_POST['add_sub_ge101_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE101/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to GE101 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE101 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
            
        }

if(isset($_POST['add_sub_ge102_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE102/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to GE101 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE103 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }
            
            
if(isset($_POST['add_sub_ge103_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE103/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to GE103 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/GE104/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to GE104 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }
            
if(isset($_POST['add_sub_ge104_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/GE104/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to GE104 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to FIL111 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }
            
            
if(isset($_POST['add_sub_fil111_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/FIL111/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to FIL111 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to REED111 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
            
        }
            
if(isset($_POST['add_sub_reed111_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/REED111/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

       if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to REED111 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to PE111 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            }
        }  
            
if(isset($_POST['add_sub_pe111_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/PE111/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to PE111 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
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
    
        $updateData = [
            'Student_number'=>$student_code,
            'Name'=>$name,
            'Course'=>$course,
            'Email'=>$email,
            'Contact_number'=>$phone,
        ];
    
        $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1/A/'.$key;
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Contact Added Successfully to NSTP1 - Section A";
                header('Location: reg.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Added";
                header('Location: reg.php');
            } 
        }

if(isset($_POST['add_sub_nstp1_b']))
{
    $key = $_POST['key'];
    $student_code = $_POST['Student_number'];
    $name = $_POST['Name'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $phone = $_POST['Contact_number'];

    $updateData = [
        'Student_number'=>$student_code,
        'Name'=>$name,
        'Course'=>$course,
        'Email'=>$email,
        'Contact_number'=>$phone,
    ];

    $ref_table = 'Subjects/BSCS/first_year/first_sem/NSTP1/B/'.$key;

    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Added Successfully to NSTP1 - Section B";
            header('Location: reg.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Added";
            header('Location: reg.php');
        }
    }



// SECOND YEAR SECOND YEAR SECOND YEAR






?>

