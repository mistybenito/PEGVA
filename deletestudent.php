<?php
session_start();
include('dbcon.php');


if (isset($_POST['delete_btn'])) {
    $del_id = $_POST['delete_btn'];
    $course = $_POST['Course'];


    if ($course == "Bachelor of Science in Computer Science") 
    {


        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bscs/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSCS/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bscs/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSCS/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bscs/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSCS/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bscs/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSCS/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bscs/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSCS/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bscs/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSCS/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bscs/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSCS/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bscs/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSCS/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bscs/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSCS/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        }
        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSCS.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSCS.php');
        }
        
    } 

elseif ($course == "Bachelor of Elementary Education") 
    {


        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/beed/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BEED/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/beed/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BEED/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/beed/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BEED/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/beed/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BEED/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/beed/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BEED/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/beed/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BEED/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/beed/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BEED/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/beed/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BEED/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/beed/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BEED/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 



        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BEED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BEED.php');
        }
    } 

    elseif ($course == "Bachelor of Arts of Religious Education") 
    {


        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/abreed/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/ABREED/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/abreed/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/ABREED/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/abreed/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/ABREED/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/abreed/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/ABREED/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/abreed/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/ABREED/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/abreed/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/ABREED/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/abreed/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/ABREED/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/abreed/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/ABREED/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/abreed/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/ABREED/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_ABREED.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_ABREED.php');
        }
    }

    elseif ($course == "Bachelor of Science in Business Administration") 
    {

        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bsba/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSBA/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bsba/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSBA/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bsba/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSBA/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bsba/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSBA/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bsba/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSBA/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bsba/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSBA/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bsba/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSBA/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bsba/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSBA/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bsba/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSBA/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSBA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSBA.php');
        }
    }

    elseif ($course == "Bachelor of Science in Office Administration") 
    {

        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bsoa/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSOA/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bsoa/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSOA/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bsoa/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSOA/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bsoa/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSOA/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bsoa/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSOA/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bsoa/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSOA/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bsoa/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSOA/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bsoa/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSOA/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bsoa/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSOA/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSOA.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSOA.php');
        }
    }
    

    elseif ($course == "Bachelor of Secondary Education, Major in English") 
    {

        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bsed_e/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSED_E/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bsed_e/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSED_E/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bsed_e/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSED_E/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bsed_e/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSED_E/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bsed_e/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSED_E/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bsed_e/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSED_E/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bsed_e/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSED_E/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bsed_e/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSED_E/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bsed_e/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSED_E/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSED-ENG.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSED-ENG.php');
        }
    }

    elseif ($course == "Bachelor of Secondary Education, Major in Science") 
    {

        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bsed_s/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSED_S/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bsed_s/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSED_S/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bsed_s/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSED_S/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bsed_s/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSED_S/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bsed_s/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSED_S/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bsed_s/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSED_S/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bsed_s/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSED_S/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bsed_s/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSED_S/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bsed_s/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSED_S/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSED-SCI.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSED-SCI.php');
        }
    }

    elseif ($course == "Bachelor of Secondary Education, Major in Math") 
    {

        $ref_table = 'User/' . $del_id;
        //1st year 1st sem
        $curric1 = 'course_curriculum/bsed_m/first_year/first_sem';
        $fetch_curric1 = $database->getReference($curric1)->getValue();
        if ($fetch_curric1 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric1 as $key => $row) 
            {
                $subject_code1 = $row['code'];
                $sub_table1 = 'Subjects/BSED_M/first_year/first_sem/' . $subject_code1 . '/' . $del_id;
                $delete1 = $database->getReference($sub_table1)->remove();
            }
        }
        //1st year 2nd sem
        $curric2 = 'course_curriculum/bsed_m/first_year/second_sem';
        $fetch_curric2 = $database->getReference($curric2)->getValue();
        if ($fetch_curric2 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric2 as $key => $row) 
            {
                $subject_code2 = $row['code'];
                $sub_table2 = 'Subjects/BSED_M/first_year/second_sem/' . $subject_code2 . '/' . $del_id;
                $delete2 = $database->getReference($sub_table2)->remove();
                
            }
        }
        //2nd year 1st sem
        $curric3 = 'course_curriculum/bsed_m/second_year/first_sem';
        $fetch_curric3 = $database->getReference($curric3)->getValue();
        if ($fetch_curric3 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric3 as $key => $row) 
            {
                $subject_code3 = $row['code'];
                $sub_table3 = 'Subjects/BSED_M/second_year/first_sem/' . $subject_code3 . '/' . $del_id;
                $delete3 = $database->getReference($sub_table3)->remove();
            }
        } 
        $curric4 = 'course_curriculum/bsed_m/second_year/second_sem';
        $fetch_curric4 = $database->getReference($curric4)->getValue();
        if ($fetch_curric4 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric4 as $key => $row) 
            {
                $subject_code4 = $row['code'];
                $sub_table4 = 'Subjects/BSED_M/second_year/second_sem/' . $subject_code4 . '/' . $del_id;
                $delete4 = $database->getReference($sub_table4)->remove();
            }
        } 
        $curric5 = 'course_curriculum/bsed_m/third_year/first_sem';
        $fetch_curric5 = $database->getReference($curric5)->getValue();
        if ($fetch_curric5 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric5 as $key => $row) 
            {
                $subject_code5 = $row['code'];
                $sub_table5 = 'Subjects/BSED_M/third_year/first_sem/' . $subject_code5 . '/' . $del_id;
                $delete5 = $database->getReference($sub_table5)->remove();
            }
        } 

        $curric6 = 'course_curriculum/bsed_m/third_year/second_sem';
        $fetch_curric6 = $database->getReference($curric6)->getValue();
        if ($fetch_curric6 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric6 as $key => $row) 
            {
                $subject_code6 = $row['code'];
                $sub_table6 = 'Subjects/BSED_M/third_year/second_sem/' . $subject_code6 . '/' . $del_id;
                $delete6 = $database->getReference($sub_table6)->remove();
            }
        } 

        $curric7 = 'course_curriculum/bsed_m/third_year/second_sem';
        $fetch_curric7 = $database->getReference($curric7)->getValue();
        if ($fetch_curric7 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric7 as $key => $row) 
            {
                $subject_code7 = $row['code'];
                $sub_table7 = 'Subjects/BSED_M/third_year/second_sem/' . $subject_code7 . '/' . $del_id;
                $delete7 = $database->getReference($sub_table7)->remove();
            }
        } 

        $curric8 = 'course_curriculum/bsed_m/fourth_year/first_sem';
        $fetch_curric8 = $database->getReference($curric8)->getValue();
        if ($fetch_curric8 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric8 as $key => $row) 
            {
                $subject_code8 = $row['code'];
                $sub_table8 = 'Subjects/BSED_M/fourth_year/first_sem/' . $subject_code8 . '/' . $del_id;
                $delete8 = $database->getReference($sub_table8)->remove();
            }
        }
        
        $curric9 = 'course_curriculum/bsed_m/fourth_year/second_sem';
        $fetch_curric9 = $database->getReference($curric9)->getValue();
        if ($fetch_curric9 > 0) 
        {
            $i = 0;
            foreach ($fetch_curric9 as $key => $row) 
            {
                $subject_code9 = $row['code'];
                $sub_table9 = 'Subjects/BSED_M/fourth_year/second_sem/' . $subject_code9 . '/' . $del_id;
                $delete9 = $database->getReference($sub_table9)->remove();
            }
        } 


        //boundary
        $deleteacc = $database->getReference($ref_table)->remove();
        if($deleteacc)
        {
            $_SESSION['status'] = "Contact deleted.";
            header('Location: student_BSED-MATH.php');
        }
        else
        {
            $_SESSION['status'] = "Contact not deleted.";
            header('Location: student_BSED-MATH.php');
        }
    }
    












































    
}

    


























    ?>


