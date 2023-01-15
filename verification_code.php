<?php
include('dbcon.php');

session_start();

// verify CONTACT CODE
if(isset($_POST['yes_verify']))
{
    $key = $_POST['id'];
    $verify = $_POST['verify'];
    $course = $_POST['Course'];
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $snumber = $_POST['Student_number'];
    $year = $_POST['Year'];
    $sem = $_POST['Semester'];
    $grade = $_POST['Grade'];

    $updateData = [
        'verify' => $verify,
    ];

    $studentData =[
        'Course' => $course,
        'Email' =>$email,
        'Name' => $name,
        'Student_number' => $snumber,
        'Grade' => $grade,
    ];

        
    //1y1s 1y1s
        $cs111 = 'Subjects/BSCS/first_year/first_sem/CS111/'.$key;
        $cs112 = 'Subjects/BSCS/first_year/first_sem/CS112/'.$key;
        $ge100 = 'Subjects/BSCS/first_year/first_sem/GE100/'.$key;
        $ge101 = 'Subjects/BSCS/first_year/first_sem/GE101/'.$key;
        $ge102 = 'Subjects/BSCS/first_year/first_sem/GE102/'.$key;
        $ge103 = 'Subjects/BSCS/first_year/first_sem/GE103/'.$key;
        $fil111 = 'Subjects/BSCS/first_year/first_sem/FIL111/'.$key;
        $reed111 = 'Subjects/BSCS/first_year/first_sem/REED111/'.$key;
        $pe111 = 'Subjects/BSCS/first_year/first_sem/PE111/'.$key;
        $nstp1 = 'Subjects/BSCS/first_year/first_sem/NSTP1/'.$key;



        //1y2s 1y2s
        $cs121 = 'Subjects/BSCS/first_year/second_sem/CS111/'.$key;
        $cs122 = 'Subjects/BSCS/first_year/second_sem/CS112/'.$key;
        $ge104 = 'Subjects/BSCS/first_year/second_sem/GE104/'.$key;
        $ge105 = 'Subjects/BSCS/first_year/second_sem/GE105/'.$key;
        $ge106 = 'Subjects/BSCS/first_year/second_sem/GE106/'.$key;
        $ge107 = 'Subjects/BSCS/first_year/second_sem/GE107/'.$key;
        $fil121 = 'Subjects/BSCS/first_year/second_sem/FIL121/'.$key;
        $reed121 = 'Subjects/BSCS/first_year/second_sem/REED121/'.$key;
        $pe121 = 'Subjects/BSCS/first_year/second_sem/PE121/'.$key;
        $nstp2 = 'Subjects/BSCS/first_year/second_sem/NSTP2/'.$key;

        //2y1s 2y1s
        $cs211 = 'Subjects/BSCS/second_year/first_sem/CS211/'.$key;
        $cs212 = 'Subjects/BSCS/second_year/first_sem/CS212/'.$key;
        $cs213 = 'Subjects/BSCS/second_year/first_sem/CS213/'.$key;
        $cs214 = 'Subjects/BSCS/second_year/first_sem/CS214/'.$key;
        $ge108 = 'Subjects/BSCS/second_year/first_sem/GE108/'.$key;
        $ge109 = 'Subjects/BSCS/second_year/first_sem/GE109/'.$key;
        $el211 = 'Subjects/BSCS/second_year/first_sem/EL211/'.$key;
        $fil211 = 'Subjects/BSCS/second_year/first_sem/FIL111/'.$key;
        $reed211 = 'Subjects/BSCS/second_year/first_sem/REED211/'.$key;
        $pe211 = 'Subjects/BSCS/second_year/first_sem/PE211/'.$key;

        //2y2s 2y2s
        $cs221 = 'Subjects/BSCS/second_year/second_sem/CS221/'.$key;
        $cs222 = 'Subjects/BSCS/second_year/second_sem/CS222/'.$key;
        $cs223 = 'Subjects/BSCS/second_year/second_sem/CS223/'.$key;
        $cs224 = 'Subjects/BSCS/second_year/second_sem/CS224/'.$key;
        $ge110 = 'Subjects/BSCS/second_year/second_sem/GE110/'.$key;
        $ge111 = 'Subjects/BSCS/second_year/second_sem/GE111/'.$key;
        $el221 = 'Subjects/BSCS/second_year/second_sem/EL221/'.$key;
        $el221 = 'Subjects/BSCS/second_year/second_sem/EL222/'.$key;
        $reed221 = 'Subjects/BSCS/second_year/second_sem/REED221/'.$key;
        $pe221 = 'Subjects/BSCS/second_year/second_sem/PE221/'.$key;

        //3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 

        $cs311 = 'Subjects/BSCS/third_year/first_sem/CS311/'.$key;
        $cs312 = 'Subjects/BSCS/third_year/first_sem/CS312/'.$key;
        $cs313 = 'Subjects/BSCS/third_year/first_sem/CS313/'.$key;
        $cs314 = 'Subjects/BSCS/third_year/first_sem/CS314/'.$key;
        $cs315 = 'Subjects/BSCS/third_year/first_sem/CS315/'.$key;
        $el311 = 'Subjects/BSCS/third_year/first_sem/EL311/'.$key;
        $el312 = 'Subjects/BSCS/third_year/first_sem/EL312/'.$key;
      // 3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s 
        $cs321 = 'Subjects/BSCS/third_year/second_sem/CS321/'.$key;
        $cs322 = 'Subjects/BSCS/third_year/second_sem/CS322/'.$key;
        $cs323 = 'Subjects/BSCS/third_year/second_sem/CS323/'.$key;
        $cs324 = 'Subjects/BSCS/third_year/second_sem/CS324/'.$key;
        $cs325 = 'Subjects/BSCS/third_year/second_sem/CS325/'.$key;
        $cs326 = 'Subjects/BSCS/third_year/second_sem/CS326/'.$key;
        $cs317 = 'Subjects/BSCS/third_year/second_sem/CS327/'.$key;

    // 4y1s 

        $cs411 = 'Subjects/BSCS/fourth_year/first_sem/CS411/'.$key;
        $cs412 = 'Subjects/BSCS/fourth_year/first_sem/CS412/'.$key;
        $cs413 = 'Subjects/BSCS/fourth_year/first_sem/CS413/'.$key;
        $cs414 = 'Subjects/BSCS/fourth_year/first_sem/CS414/'.$key;
        $cs415 = 'Subjects/BSCS/fourth_year/first_sem/CS415/'.$key;

    // 4y2s

        $cs421 = 'Subjects/BSCS/fourth_year/second_sem/CS421/'.$key;

        


        
        







        $ref_table = 'User/'.$key;
        $sub_table = 'User/'.$key."/grades/first_year";
        
        
        if($year == "First Year" && $sem == "First" && $course == "Bachelor of Science in Computer Science")
        {
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsubCS111 = $database->getReference($cs111)->update($studentData);
                $addsubCS112 = $database->getReference($cs112)->update($studentData);
                $addsubGE100 = $database->getReference($ge100)->update($studentData);
                $addsubGE101 = $database->getReference($ge101)->update($studentData);
                $addsubGE102 = $database->getReference($ge102)->update($studentData);
                $addsubGE103 = $database->getReference($ge103)->update($studentData);
                $addsubFIL111 = $database->getReference($fil111)->update($studentData);
                $addsubREED111 = $database->getReference($reed111)->update($studentData);
                $addsubPE111 = $database->getReference($pe111)->update($studentData);
                $addsubNSTP1 = $database->getReference($nstp1)->update($studentData);

                if($updatequery_result)
                {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSCS.php');
                }
                else
                {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSCS.php');
                }
        }
        elseif($year == "First Year" && $sem == "Second" && $course == "Bachelor of Science in Computer Science")
            {
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsubCS121 = $database->getReference($cs121)->update($studentData);
                $addsubCS122 = $database->getReference($cs122)->update($studentData);
                $addsubGE104 = $database->getReference($ge104)->update($studentData);
                $addsubGE105 = $database->getReference($ge105)->update($studentData);
                $addsubGE106 = $database->getReference($ge106)->update($studentData);
                $addsubGE107 = $database->getReference($ge107)->update($studentData);
                $addsubFIL121 = $database->getReference($fil121)->update($studentData);
                $addsubREED121 = $database->getReference($reed121)->update($studentData);
                $addsubPE121 = $database->getReference($pe121)->update($studentData);
                $addsubNSTP2 = $database->getReference($nstp2)->update($studentData);

                if($updatequery_result)
                {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSCS.php');
                }
                else
                {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSCS.php');
                }
            }
        elseif($year == "Second Year" && $sem == "First" && $course == "Bachelor of Science in Computer Science") 
        {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS211 = $database->getReference($cs211)->update($studentData);
            $addsubCS212 = $database->getReference($cs212)->update($studentData);
            $addsubCS213 = $database->getReference($cs213)->update($studentData);
            $addsubCS214 = $database->getReference($cs214)->update($studentData);
            $addsubGE108 = $database->getReference($ge108)->update($studentData);
            $addsubGE109 = $database->getReference($ge109)->update($studentData);
            $addsubFIL211 = $database->getReference($fil211)->update($studentData);
            $addsubEL211 = $database->getReference($el211)->update($studentData);
            $addsubREED211 = $database->getReference($reed211)->update($studentData);
            $addsubPE211 = $database->getReference($pe211)->update($studentData);

            if($updatequery_result)
                {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSCS.php');
                }
                else
                {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSCS.php');
                }
        }

    }
    elseif($year == "Second Year" && $sem == "Second" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS221 = $database->getReference($cs221)->update($studentData);
        $addsubCS222 = $database->getReference($cs222)->update($studentData);
        $addsubCS223 = $database->getReference($cs223)->update($studentData);
        $addsubCS224 = $database->getReference($cs224)->update($studentData);
        $addsubGE110 = $database->getReference($ge110)->update($studentData);
        $addsubGE111 = $database->getReference($ge111)->update($studentData);
        $addsubEL221 = $database->getReference($el221)->update($studentData);
        $addsubEL222 = $database->getReference($el222)->update($studentData);
        $addsubREED221 = $database->getReference($reed221)->update($studentData);
        $addsubPE221 = $database->getReference($pe221)->update($studentData);

        if($updatequery_result)
            {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
    }
    // 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 
    elseif($year == "Third Year" && $sem == "First" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS311 = $database->getReference($cs311)->update($studentData);
        $addsubCS312 = $database->getReference($cs312)->update($studentData);
        $addsubCS313 = $database->getReference($cs313)->update($studentData);
        $addsubCS314 = $database->getReference($cs314)->update($studentData);
        $addsubCS315 = $database->getReference($cs315)->update($studentData);
        $addsubEL311 = $database->getReference($el311)->update($studentData);
        $addsubEL312 = $database->getReference($el312)->update($studentData);

        if($updatequery_result)
            {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
    }

    //3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 

    elseif($year == "Third Year" && $sem == "Second" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS321 = $database->getReference($cs321)->update($studentData);
        $addsubCS322 = $database->getReference($cs322)->update($studentData);
        $addsubCS323 = $database->getReference($cs323)->update($studentData);
        $addsubCS324 = $database->getReference($cs324)->update($studentData);
        $addsubCS325 = $database->getReference($cs325)->update($studentData);
        $addsubCS326 = $database->getReference($cs326)->update($studentData);
        $addsubCS327 = $database->getReference($cs327)->update($studentData);

        if($updatequery_result)
            {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
    }

    //4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 

    elseif($year == "Fourth Year" && $sem == "First" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS411 = $database->getReference($cs411)->update($studentData);
        $addsubCS412 = $database->getReference($cs412)->update($studentData);
        $addsubCS413 = $database->getReference($cs413)->update($studentData);
        $addsubCS414 = $database->getReference($cs414)->update($studentData);
        $addsubCS415 = $database->getReference($cs415)->update($studentData);

        if($updatequery_result)
            {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
    }
    // 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 

    elseif($year == "Fourth Year" && $sem == "Second" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS421 = $database->getReference($cs421)->update($studentData);


        if($updatequery_result)
            {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            }
            else
            {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
    }















    










    elseif(isset($_POST['no_verify']))
{
    $key = $_POST['id'];
    $not_verify = $_POST['not_verify'];

    $updateData = [
        'verify' => $not_verify,
    ];

        $ref_table = 'User/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);


        if($updatequery_result)
        {

            $_SESSION['status'] = "Contact Verified Successfully";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact Not Verified";
            header('Location: student_BSCS.php');
        }
    }

?>