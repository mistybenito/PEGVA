<?php
include('dbcon.php');

session_start();

// verify CONTACT CODE
if (isset($_POST['yes_verify'])) {


























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

    $studentData = [
        'Course' => $course,
        'Email' => $email,
        'Name' => $name,
        'Student_number' => $snumber,
        'Grade' => $grade,
    ];


    //1y1s 1y1s BSCS
    $cs111 = 'Subjects/BSCS/first_year/first_sem/CS111/' . $key;
    $cs112 = 'Subjects/BSCS/first_year/first_sem/CS112/' . $key;
    $BSCSge100 = 'Subjects/BSCS/first_year/first_sem/GE100/' . $key;
    $BSCSge101 = 'Subjects/BSCS/first_year/first_sem/GE101/' . $key;
    $BSCSge102 = 'Subjects/BSCS/first_year/first_sem/GE102/' . $key;
    $BSCSge103 = 'Subjects/BSCS/first_year/first_sem/GE103/' . $key;
    $BSCSfil111 = 'Subjects/BSCS/first_year/first_sem/FIL111/' . $key;
    $BSCSreed111 = 'Subjects/BSCS/first_year/first_sem/REED111/' . $key;
    $BSCSpe111 = 'Subjects/BSCS/first_year/first_sem/PE111/' . $key;
    $BSCSnstp1 = 'Subjects/BSCS/first_year/first_sem/NSTP1/' . $key;



    //1y2s 1y2s BSCS
    $cs121 = 'Subjects/BSCS/first_year/second_sem/CS111/' . $key;
    $cs122 = 'Subjects/BSCS/first_year/second_sem/CS112/' . $key;
    $BSCSge104 = 'Subjects/BSCS/first_year/second_sem/GE104/' . $key;
    $BSCSge105 = 'Subjects/BSCS/first_year/second_sem/GE105/' . $key;
    $BSCSge106 = 'Subjects/BSCS/first_year/second_sem/GE106/' . $key;
    $BSCSge107 = 'Subjects/BSCS/first_year/second_sem/GE107/' . $key;
    $BSCSfil121 = 'Subjects/BSCS/first_year/second_sem/FIL121/' . $key;
    $BSCSreed121 = 'Subjects/BSCS/first_year/second_sem/REED121/' . $key;
    $BSCSpe121 = 'Subjects/BSCS/first_year/second_sem/PE121/' . $key;
    $BSCSnstp2 = 'Subjects/BSCS/first_year/second_sem/NSTP2/' . $key;

    //2y1s 2y1s BSCS
    $cs211 = 'Subjects/BSCS/second_year/first_sem/CS211/' . $key;
    $cs212 = 'Subjects/BSCS/second_year/first_sem/CS212/' . $key;
    $cs213 = 'Subjects/BSCS/second_year/first_sem/CS213/' . $key;
    $cs214 = 'Subjects/BSCS/second_year/first_sem/CS214/' . $key;
    $BSCSge108 = 'Subjects/BSCS/second_year/first_sem/GE108/' . $key;
    $BSCSge109 = 'Subjects/BSCS/second_year/first_sem/GE109/' . $key;
    $BSCSel211 = 'Subjects/BSCS/second_year/first_sem/EL211/' . $key;
    $BSCSfil211 = 'Subjects/BSCS/second_year/first_sem/FIL111/' . $key;
    $BSCSreed211 = 'Subjects/BSCS/second_year/first_sem/REED211/' . $key;
    $BSCSpe211 = 'Subjects/BSCS/second_year/first_sem/PE211/' . $key;

    //2y2s 2y2s BSCS
    $cs221 = 'Subjects/BSCS/second_year/second_sem/CS221/' . $key;
    $cs222 = 'Subjects/BSCS/second_year/second_sem/CS222/' . $key;
    $cs223 = 'Subjects/BSCS/second_year/second_sem/CS223/' . $key;
    $cs224 = 'Subjects/BSCS/second_year/second_sem/CS224/' . $key;
    $BSCSge110 = 'Subjects/BSCS/second_year/second_sem/GE110/' . $key;
    $BSCSge111 = 'Subjects/BSCS/second_year/second_sem/GE111/' . $key;
    $BSCSel221 = 'Subjects/BSCS/second_year/second_sem/EL221/' . $key;
    $BSCSel221 = 'Subjects/BSCS/second_year/second_sem/EL222/' . $key;
    $BSCSreed221 = 'Subjects/BSCS/second_year/second_sem/REED221/' . $key;
    $BSCSpe221 = 'Subjects/BSCS/second_year/second_sem/PE221/' . $key;

    //3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s  BSCS

    $cs311 = 'Subjects/BSCS/third_year/first_sem/CS311/' . $key;
    $cs312 = 'Subjects/BSCS/third_year/first_sem/CS312/' . $key;
    $cs313 = 'Subjects/BSCS/third_year/first_sem/CS313/' . $key;
    $cs314 = 'Subjects/BSCS/third_year/first_sem/CS314/' . $key;
    $cs315 = 'Subjects/BSCS/third_year/first_sem/CS315/' . $key;
    $BSCSel311 = 'Subjects/BSCS/third_year/first_sem/EL311/' . $key;
    $BSCSel312 = 'Subjects/BSCS/third_year/first_sem/EL312/' . $key;





    // 3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  BSCS

    $cs321 = 'Subjects/BSCS/third_year/second_sem/CS321/' . $key;
    $cs322 = 'Subjects/BSCS/third_year/second_sem/CS322/' . $key;
    $cs323 = 'Subjects/BSCS/third_year/second_sem/CS323/' . $key;
    $cs324 = 'Subjects/BSCS/third_year/second_sem/CS324/' . $key;
    $cs325 = 'Subjects/BSCS/third_year/second_sem/CS325/' . $key;
    $cs326 = 'Subjects/BSCS/third_year/second_sem/CS326/' . $key;
    $cs317 = 'Subjects/BSCS/third_year/second_sem/CS327/' . $key;

    // 4y1s BSCS

    $cs411 = 'Subjects/BSCS/fourth_year/first_sem/CS411/' . $key;
    $cs412 = 'Subjects/BSCS/fourth_year/first_sem/CS412/' . $key;
    $cs413 = 'Subjects/BSCS/fourth_year/first_sem/CS413/' . $key;
    $cs414 = 'Subjects/BSCS/fourth_year/first_sem/CS414/' . $key;
    $cs415 = 'Subjects/BSCS/fourth_year/first_sem/CS415/' . $key;

    // 4y2sBSCS

    $cs421 = 'Subjects/BSCS/fourth_year/second_sem/CS421/' . $key;

     // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    //1y1s 1y1s BEED

    $BEEDge100 = 'Subjects/BEED/first_year/first_sem/GE100/' . $key;
    $BEEDge101 = 'Subjects/BEED/first_year/first_sem/GE101/' . $key;
    $BEEDge102 = 'Subjects/BEED/first_year/first_sem/GE102/' . $key;
    $BEEDge103 = 'Subjects/BEED/first_year/first_sem/GE103/' . $key;
    $BEEDeng111 = 'Subjects/BEED/first_year/first_sem/ENG111/' . $key;
    $BEEDreed111 = 'Subjects/BEED/first_year/first_sem/REED111/' . $key;
    $BEEDpe111 = 'Subjects/BEED/first_year/first_sem/PE111/' . $key;
    $BEEDnstp1 = 'Subjects/BEED/first_year/first_sem/NSTP1/' . $key;

     //1y2s 1y2s BEED

     $BEEDge104 = 'Subjects/BEED/first_year/second_sem/GE104/' . $key;
     $BEEDge105 = 'Subjects/BEED/first_year/second_sem/GE105/' . $key;
     $BEEDge106 = 'Subjects/BEED/first_year/second_sem/GE106/' . $key;
     $BEEDge107 = 'Subjects/BEED/first_year/second_sem/GE107/' . $key;
     $BEEDssg211 = 'Subjects/BEED/first_year/second_sem/ssg211/' . $key;
     $BEEDreed111 = 'Subjects/BEED/first_year/second_sem/REED121/' . $key;
     $BEEDpe121 = 'Subjects/BEED/first_year/second_sem/PE121/' . $key;
     $BEEDnstp2 = 'Subjects/BEED/first_year/second_sem/NSTP2/' . $key;
     $BEEDpeh121 = 'Subjects/BEED/first_year/second_sem/PEH121/' . $key;

     //2y1s 2y1s BEED

    $BEEDge108 = 'Subjects/BEED/second_year/first_sem/GE108/' . $key;
    $BEEDge109 = 'Subjects/BEED/second_year/first_sem/GE109/' . $key;
    $BEEDedu211 = 'Subjects/BEED/second_year/first_sem/EDU211/' . $key;
    $BEEDedu212 = 'Subjects/BEED/second_year/first_sem/EDU212/' . $key;
    $BEEDmat211 = 'Subjects/BEED/second_year/first_sem/MAT211/' . $key;
    $BEEDfil212 = 'Subjects/BEED/second_year/first_sem/FIL212/' . $key;
    $BEEDreed211 = 'Subjects/BEED/second_year/first_sem/REED111/' . $key;
    $BEEDpe211 = 'Subjects/BEED/second_year/first_sem/PE211/' . $key;


     //2y2s 2y2s BEED

     $BEEDge110 = 'Subjects/BEED/second_year/second_sem/GE110/' . $key;
     $BEEDge111 = 'Subjects/BEED/second_year/second_sem/GE111/' . $key;
     $BEEDedu221 = 'Subjects/BEED/second_year/second_sem/EDU221/' . $key;
     $BEEDedu222 = 'Subjects/BEED/second_year/second_sem/EDU222/' . $key;
     $BEEDedu223 = 'Subjects/BEED/second_year/second_sem/EDU223/' . $key;
     $BEEDved221 = 'Subjects/BEED/second_year/second_sem/VED211/' . $key;
     $BEEDsci221 = 'Subjects/BEED/second_year/second_sem/SCI212/' . $key;
     $BEEDmtb = 'Subjects/BEED/second_year/second_sem/MTB/' . $key;
     $BEEDreed221 = 'Subjects/BEED/second_year/second_sem/REED111/' . $key;
     $BEEDpe221 = 'Subjects/BEED/second_year/second_sem/PE211/' . $key;

     //3y1s 3y1s BEED

    $BEEDeng311 = 'Subjects/BEED/third_year/first_sem/ENG311/' . $key;
    $BEEDtle1 = 'Subjects/BEED/third_year/first_sem/TLE1/' . $key;
    $BEEDedu311 = 'Subjects/BEED/third_year/first_sem/EDU311/' . $key;
    $BEEDedu312 = 'Subjects/BEED/third_year/first_sem/EDU312/' . $key;
    $BEEDssc321 = 'Subjects/BEED/third_year/first_sem/SSC321/' . $key;
    $BEEDmusic311 = 'Subjects/BEED/third_year/first_sem/MUSIC311/' . $key;
    $BEEDart311 = 'Subjects/BEED/third_year/first_sem/ART311/' . $key;
    $BEEDres1 = 'Subjects/BEED/third_year/first_sem/RES1/' . $key;
    $BEEDfil311 = 'Subjects/BEED/third_year/first_sem/FIL311/' . $key;

    //3y2s 3y2s BEED

    $BEEDel321 = 'Subjects/BEED/third_year/second_sem/EL321/' . $key;
    $BEEDedu321 = 'Subjects/BEED/third_year/second_sem/EDU321/' . $key;
    $BEEDedu322 = 'Subjects/BEED/third_year/second_sem/EDU322/' . $key;
    $BEEDtle2 = 'Subjects/BEED/third_year/second_sem/TLE2/' . $key;
    $BEEDttl = 'Subjects/BEED/third_year/second_sem/TTL/' . $key;
    $BEEDres2 = 'Subjects/BEED/third_year/second_sem/RES2/' . $key;
    $BEEDmat321 = 'Subjects/BEED/third_year/second_sem/MAT321/' . $key;
    $BEEDeng321 = 'Subjects/BEED/third_year/second_sem/ENG321/' . $key;
    $BEEDeng322 = 'Subjects/BEED/third_year/second_sem/ENG322/' . $key;



    //4y1s 4y1s BEED
    $BEEDfs1 = 'Subjects/BEED/fourth_year/first_sem/FS1/' . $key;
    $BEEDfs2 = 'Subjects/BEED/fourth_year/first_sem/FS2/' . $key;
    $BEEDedu414 = 'Subjects/BEED/fourth_year/first_sem/edu414/' . $key;

    //4y2s 4y2s BEED

    $BEEDfs3 = 'Subjects/BEED/fourth_year/second_sem/FS3/' . $key;









    $ref_table = 'User/' . $key;
    $sub_table = 'User/' . $key . "/grades/first_year";

    if ($course == "Bachelor of Science in Computer Science") {
        if ($year == "First Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS111 = $database->getReference($cs111)->update($studentData);
            $addsubCS112 = $database->getReference($cs112)->update($studentData);
            $addsubGE100 = $database->getReference($BSCSge100)->update($studentData);
            $addsubGE101 = $database->getReference($BSCSge101)->update($studentData);
            $addsubGE102 = $database->getReference($BSCSge102)->update($studentData);
            $addsubGE103 = $database->getReference($BSCSge103)->update($studentData);
            $addsubFIL111 = $database->getReference($BSCSfil111)->update($studentData);
            $addsubREED111 = $database->getReference($BSCSreed111)->update($studentData);
            $addsubPE111 = $database->getReference($BSCSpe111)->update($studentData);
            $addsubNSTP1 = $database->getReference($BSCSnstp1)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "First Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS121 = $database->getReference($cs121)->update($studentData);
            $addsubCS122 = $database->getReference($cs122)->update($studentData);
            $addsubGE104 = $database->getReference($BSCSge104)->update($studentData);
            $addsubGE105 = $database->getReference($BSCSge105)->update($studentData);
            $addsubGE106 = $database->getReference($BSCSge106)->update($studentData);
            $addsubGE107 = $database->getReference($BSCSge107)->update($studentData);
            $addsubFIL121 = $database->getReference($BSCSfil121)->update($studentData);
            $addsubREED121 = $database->getReference($BSCSreed121)->update($studentData);
            $addsubPE121 = $database->getReference($BSCSpe121)->update($studentData);
            $addsubNSTP2 = $database->getReference($BSCSnstp2)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "Second Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS211 = $database->getReference($cs211)->update($studentData);
            $addsubCS212 = $database->getReference($cs212)->update($studentData);
            $addsubCS213 = $database->getReference($cs213)->update($studentData);
            $addsubCS214 = $database->getReference($cs214)->update($studentData);
            $addsubGE108 = $database->getReference($BSCSge108)->update($studentData);
            $addsubGE109 = $database->getReference($BSCSge109)->update($studentData);
            $addsubFIL211 = $database->getReference($BSCSfil211)->update($studentData);
            $addsubEL211 = $database->getReference($BSCSel211)->update($studentData);
            $addsubREED211 = $database->getReference($BSCSreed211)->update($studentData);
            $addsubPE211 = $database->getReference($BSCSpe211)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "Second Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS221 = $database->getReference($cs221)->update($studentData);
            $addsubCS222 = $database->getReference($cs222)->update($studentData);
            $addsubCS223 = $database->getReference($cs223)->update($studentData);
            $addsubCS224 = $database->getReference($cs224)->update($studentData);
            $addsubGE110 = $database->getReference($BSCSge110)->update($studentData);
            $addsubGE111 = $database->getReference($BSCSge111)->update($studentData);
            $addsubEL221 = $database->getReference($BSCSel221)->update($studentData);
            $addsubEL222 = $database->getReference($BSCSel222)->update($studentData);
            $addsubREED221 = $database->getReference($BSCSreed221)->update($studentData);
            $addsubPE221 = $database->getReference($BSCSpe221)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }
        // 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 
        elseif ($year == "Third Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS311 = $database->getReference($cs311)->update($studentData);
            $addsubCS312 = $database->getReference($cs312)->update($studentData);
            $addsubCS313 = $database->getReference($cs313)->update($studentData);
            $addsubCS314 = $database->getReference($cs314)->update($studentData);
            $addsubCS315 = $database->getReference($cs315)->update($studentData);
            $addsubEL311 = $database->getReference($BSCSel311)->update($studentData);
            $addsubEL312 = $database->getReference($BSCSel312)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }

        //3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 
        elseif ($year == "Third Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS321 = $database->getReference($cs321)->update($studentData);
            $addsubCS322 = $database->getReference($cs322)->update($studentData);
            $addsubCS323 = $database->getReference($cs323)->update($studentData);
            $addsubCS324 = $database->getReference($cs324)->update($studentData);
            $addsubCS325 = $database->getReference($cs325)->update($studentData);
            $addsubCS326 = $database->getReference($cs326)->update($studentData);
            $addsubCS327 = $database->getReference($cs327)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }

        //4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 
        elseif ($year == "Fourth Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS411 = $database->getReference($cs411)->update($studentData);
            $addsubCS412 = $database->getReference($cs412)->update($studentData);
            $addsubCS413 = $database->getReference($cs413)->update($studentData);
            $addsubCS414 = $database->getReference($cs414)->update($studentData);
            $addsubCS415 = $database->getReference($cs415)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }
        // 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 
        elseif ($year == "Fourth Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS421 = $database->getReference($cs421)->update($studentData);


            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }

        }
    }

    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 
    // BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED BEED 


    if ($course == "Bachelor of Elementary Education") {
        if ($year == "First Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubGE100 = $database->getReference($BEEDge100)->update($studentData);
            $addsubGE101 = $database->getReference($BEEDge101)->update($studentData);
            $addsubGE102 = $database->getReference($BEEDge102)->update($studentData);
            $addsubGE103 = $database->getReference($BEEDge103)->update($studentData);
            $addsubFIL111 = $database->getReference($BEEDfil111)->update($studentData);
            $addsubREED111 = $database->getReference($BEEDreed111)->update($studentData);
            $addsubPE111 = $database->getReference($BEEDpe111)->update($studentData);
            $addsubNSTP1 = $database->getReference($BEEDnstp1)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "First Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubGE104 = $database->getReference($BEEDge104)->update($studentData);
            $addsubGE105 = $database->getReference($BEEDge105)->update($studentData);
            $addsubGE106 = $database->getReference($BEEDge106)->update($studentData);
            $addsubGE107 = $database->getReference($BEEDge107)->update($studentData);
            $addsubSSG211 = $database->getReference($BEEDssg211)->update($studentData);
            $addsubREED121 = $database->getReference($BEEDreed121)->update($studentData);
            $addsubPE121 = $database->getReference($BEEDpe121)->update($studentData);
            $addsubNSTP2 = $database->getReference($BEEDnstp2)->update($studentData);
            $addsubPEH121 = $database->getReference($BEEDpeh121)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "Second Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubGE108 = $database->getReference($ge108)->update($studentData);
            $addsubGE109 = $database->getReference($ge109)->update($studentData);
            $addsubEDU211 = $database->getReference($BEEDedu211)->update($studentData);
            $addsubEDU212 = $database->getReference($BEEDedu212)->update($studentData);
            $addsubMAT211 = $database->getReference($BEEDmat211)->update($studentData);
            $addsubFIL212 = $database->getReference($BEEDfil212)->update($studentData);
            $addsubREED211 = $database->getReference($BEEDreed211)->update($studentData);
            $addsubPE211 = $database->getReference($BEEDpe211)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        } elseif ($year == "Second Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubGE110 = $database->getReference($BEEDge110)->update($studentData);
            $addsubGE111 = $database->getReference($BEEDge111)->update($studentData);
            $addsubEDU221 = $database->getReference($BEEDedu221)->update($studentData);
            $addsubEDU222 = $database->getReference($BEEDedu222)->update($studentData);
            $addsubEDU223 = $database->getReference($BEEDedu223)->update($studentData);
            $addsubVED221 = $database->getReference($BEEDved221)->update($studentData);
            $addsubSCI221 = $database->getReference($BEEDsci221)->update($studentData);
            $addsubREED221 = $database->getReference($BEEDreed221)->update($studentData);
            $addsubPE221 = $database->getReference($BEEDpe221)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }
        // 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 
        elseif ($year == "Third Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubENG311 = $database->getReference($BEEDeng311)->update($studentData);
            $addsubTLE1 = $database->getReference($BEEDtle1)->update($studentData);
            $addsubEDU311 = $database->getReference($BEEDedu311)->update($studentData);
            $addsubEDU312 = $database->getReference($BEEDedu312)->update($studentData);
            $addsubSSC321 = $database->getReference($BEEDssc321)->update($studentData);
            $addsubMUSIC311 = $database->getReference($BEEDmusic311)->update($studentData);
            $addsubART311 = $database->getReference($BEEDart311)->update($studentData);
            $addsubRES1 = $database->getReference($BEEDres1)->update($studentData);
            $addsubFIL311 = $database->getReference($BEEDfil311)->update($studentData);

            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }

        //3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 3y2s 
        elseif ($year == "Third Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubEL321 = $database->getReference($BEEDel321)->update($studentData);      
            $addsubEDU321 = $database->getReference($BEEDedu321)->update($studentData);
            $addsubEDU322 = $database->getReference($BEEDedu322)->update($studentData);
            $addsubTLE2 = $database->getReference($BEEDtle2)->update($studentData);
            $addsubTTL = $database->getReference($BEEDttl)->update($studentData);
            $addsubRES2 = $database->getReference($BEEDres2)->update($studentData);
            $addsubMAT321 = $database->getReference($BEEDmat321)->update($studentData);
            $addsubENG321 = $database->getReference($BEEDeng321)->update($studentData);
            $addsubENG322 = $database->getReference($BEEDeng322)->update($studentData);


            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }

        //4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 4y1s 
        elseif ($year == "Fourth Year" && $sem == "First") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubFS1 = $database->getReference($BEEDfs1)->update($studentData);
            $addsubFS2= $database->getReference($BEEDfs2)->update($studentData);
            $addsubEDU414 = $database->getReference($BEEDedu414)->update($studentData);
        
            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }
        }
        // 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 4y2s 
        elseif ($year == "Fourth Year" && $sem == "Second") {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubFS3 = $database->getReference($BEEDfs3)->update($studentData);


            if ($updatequery_result) {
                $_SESSION['status'] = "Contact Verified Successfully";
                header('Location: student_BSCS.php');
            } else {
                $_SESSION['status'] = "Contact Not Verified";
                header('Location: student_BSCS.php');
            }

        }
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