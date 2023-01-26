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
    $year = $_POST['year'];
    $sem = $_POST['sem'];
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

    if ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science") 
    {
    $reference = 'course_curriculum/bscs/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BSCS/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
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

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science") 
    {
        $reference = 'course_curriculum/bscs/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSCS/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
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

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science") 
    {
        $reference = 'course_curriculum/bscs/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSCS/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
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
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science") 
    {
        $reference = 'course_curriculum/bscs/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSCS/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
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

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science") 
    {
        $reference = 'course_curriculum/bscs/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSCS/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
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

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science") 
        {
            $reference = 'course_curriculum/bscs/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BSCS/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
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

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science") 
            {
                $reference = 'course_curriculum/bscs/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BSCS/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
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

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science") 
                {
                    $reference = 'course_curriculum/bscs/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BSCS/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
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

                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Elementary Education") 
    {
    $reference = 'course_curriculum/beed/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BEED/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BEED.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BEED.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Elementary Education") 
    {
        $reference = 'course_curriculum/beed/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BEED/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BEED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BEED.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Elementary Education") 
    {
        $reference = 'course_curriculum/beed/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BEED/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BEED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BEED.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Elementary Education") 
    {
        $reference = 'course_curriculum/beed/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BEED/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BEED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BEED.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Elementary Education") 
    {
        $reference = 'course_curriculum/beed/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BEED/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BEED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BEED.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Elementary Education") 
        {
            $reference = 'course_curriculum/beed/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BEED/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_BEED.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_BEED.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Elementary Education") 
            {
                $reference = 'course_curriculum/beed/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BEED/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_BEED.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_BEED.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Elementary Education") 
                {
                    $reference = 'course_curriculum/beed/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BEED/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_BEED.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_BEED.php');
                                }
                            }
                        }
                    }

                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Office Administration") 
    {
    $reference = 'course_curriculum/bsoa/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BSOA/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSOA.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSOA.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Office Administration") 
    {
        $reference = 'course_curriculum/bsoa/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSOA/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSOA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSOA.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Office Administration") 
    {
        $reference = 'course_curriculum/bsoa/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSOA/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSOA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSOA.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Office Administration") 
    {
        $reference = 'course_curriculum/bsoa/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSOA/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSOA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSOA.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Office Administration") 
    {
        $reference = 'course_curriculum/bsoa/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSOA/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSOA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSOA.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Office Administration") 
        {
            $reference = 'course_curriculum/bsoa/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BSOA/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_BSOA.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_BSOA.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Office Administration") 
            {
                $reference = 'course_curriculum/bsoa/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BSOA/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_BSOA.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_BSOA.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Office Administration") 
                {
                    $reference = 'course_curriculum/bsoa/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BSOA/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_BSOA.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_BSOA.php');
                                }
                            }
                        }
                    }

                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Business Administration") 
    {
    $reference = 'course_curriculum/bsba/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BSBA/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSBA.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSBA.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Business Administration") 
    {
        $reference = 'course_curriculum/bsba/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSBA/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSBA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSBA.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Business Administration") 
    {
        $reference = 'course_curriculum/bsba/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSBA/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSBA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSBA.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Business Administration") 
    {
        $reference = 'course_curriculum/bsba/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSBA/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSBA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSBA.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Business Administration") 
    {
        $reference = 'course_curriculum/bsba/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSBA/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSBA.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSBA.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Business Administration") 
        {
            $reference = 'course_curriculum/bsba/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BSBA/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_BSBA.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_BSBA.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Business Administration") 
            {
                $reference = 'course_curriculum/bsba/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BSBA/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_BSBA.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_BSBA.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Business Administration") 
                {
                    $reference = 'course_curriculum/bsba/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BSBA/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_BSBA.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_BSBA.php');
                                }
                            }
                        }
                    }

                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Arts in Religious Education") 
    {
    $reference = 'course_curriculum/abreed/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/ABREED/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_ABREED.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_ABREED.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Arts in Religious Education") 
    {
        $reference = 'course_curriculum/abreed/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/ABREED/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_ABREED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_ABREED.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Arts in Religious Education") 
    {
        $reference = 'course_curriculum/abreed/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/ABREED/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_ABREED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_ABREED.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Arts in Religious Education") 
    {
        $reference = 'course_curriculum/abreed/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/ABREED/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_ABREED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_ABREED.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Arts in Religious Education") 
    {
        $reference = 'course_curriculum/abreed/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/ABREED/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_ABREED.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_ABREED.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Arts in Religious Education") 
        {
            $reference = 'course_curriculum/abreed/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/ABREED/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_ABREED.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_ABREED.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Arts in Religious Education") 
            {
                $reference = 'course_curriculum/abreed/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/ABREED/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_ABREED.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_ABREED.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Arts in Religious Education") 
                {
                    $reference = 'course_curriculum/abreed/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/ABREED/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_ABREED.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_ABREED.php');
                                }
                            }
                        }
                    }
                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in English") 
    {
    $reference = 'course_curriculum/bsed_e/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BSED_E/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSED_E.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSED_E.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in English") 
    {
        $reference = 'course_curriculum/bsed_e/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_E/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_E.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_E.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in English") 
    {
        $reference = 'course_curriculum/bsed_e/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_E/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_E.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_E.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in English") 
    {
        $reference = 'course_curriculum/bsed_e/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_E/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_E.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_E.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in English") 
    {
        $reference = 'course_curriculum/bsed_e/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_E/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_E.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_E.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in English") 
        {
            $reference = 'course_curriculum/bsed_e/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BSED_E/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_BSED_E.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_BSED_E.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in English") 
            {
                $reference = 'course_curriculum/bsed_e/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BSED_E/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_BSED_E.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_BSED_E.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in English") 
                {
                    $reference = 'course_curriculum/bsed_e/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BSED_E/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_BSED_E.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_BSED_E.php');
                                }
                            }
                        }
                    }

                    elseif ($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
    {
    $reference = 'course_curriculum/bsed_s/first_year/first_sem';
    $fetch = $database->getReference($reference)->getValue();
    if ($fetch > 0) {
        $i = 0;
        foreach ($fetch as $key_child => $row) {
            //1y1s 1y1s
            $subject = $row['code'];
            $ref_table = 'User/' . $key;
            $oneone = 'Subjects/BSED_S/first_year/first_sem/' . $subject . '/' . $key;
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsub = $database->getReference($oneone)->update($studentData);
                if ($updatequery_result) {
                    $_SESSION['status'] = "Contact Verified Successfully";
                    header('Location: student_BSED_S.php');
                } else {
                    $_SESSION['status'] = "Contact Not Verified";
                    header('Location: student_BSED_S.php');
                }
            }
        }
    }

    elseif ($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
    {
        $reference = 'course_curriculum/bsed_s/first_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_S/first_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_S.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_S.php');
                    }
                }
            }
        }

        elseif ($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
    {
        $reference = 'course_curriculum/bsed_s/second_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_S/second_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_S.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_S.php');
                    }
                }
            }
        }
        elseif ($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
    {
        $reference = 'course_curriculum/bsed_s/second_year/second_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_S/second_year/second_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_S.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_S.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
    {
        $reference = 'course_curriculum/bsed_s/third_year/first_sem';
        $fetch = $database->getReference($reference)->getValue();
        if ($fetch > 0) {
            $i = 0;
            foreach ($fetch as $key_child => $row) {
                //1y1s 1y1s
                $subject = $row['code'];
                $ref_table = 'User/' . $key;
                $oneone = 'Subjects/BSED_S/third_year/first_sem/' . $subject . '/' . $key;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsub = $database->getReference($oneone)->update($studentData);
                    if ($updatequery_result) {
                        $_SESSION['status'] = "Contact Verified Successfully";
                        header('Location: student_BSED_S.php');
                    } else {
                        $_SESSION['status'] = "Contact Not Verified";
                        header('Location: student_BSED_S.php');
                    }
                }
            }
        }

        elseif ($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
        {
            $reference = 'course_curriculum/bsed_s/third_year/second_sem';
            $fetch = $database->getReference($reference)->getValue();
            if ($fetch > 0) {
                $i = 0;
                foreach ($fetch as $key_child => $row) {
                    //1y1s 1y1s
                    $subject = $row['code'];
                    $ref_table = 'User/' . $key;
                    $oneone = 'Subjects/BSED_S/third_year/second_sem/' . $subject . '/' . $key;
                    $updatequery_result = $database->getReference($ref_table)->update($updateData);
                    $addsub = $database->getReference($oneone)->update($studentData);
                        if ($updatequery_result) {
                            $_SESSION['status'] = "Contact Verified Successfully";
                            header('Location: student_BSED_S.php');
                        } else {
                            $_SESSION['status'] = "Contact Not Verified";
                            header('Location: student_BSED_S.php');
                        }
                    }
                }
            }

            elseif ($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
            {
                $reference = 'course_curriculum/bsed_s/fourth_year/first_sem';
                $fetch = $database->getReference($reference)->getValue();
                if ($fetch > 0) {
                    $i = 0;
                    foreach ($fetch as $key_child => $row) {
                        //1y1s 1y1s
                        $subject = $row['code'];
                        $ref_table = 'User/' . $key;
                        $oneone = 'Subjects/BSED_S/fourth_year/first_sem/' . $subject . '/' . $key;
                        $updatequery_result = $database->getReference($ref_table)->update($updateData);
                        $addsub = $database->getReference($oneone)->update($studentData);
                            if ($updatequery_result) {
                                $_SESSION['status'] = "Contact Verified Successfully";
                                header('Location: student_BSED_S.php');
                            } else {
                                $_SESSION['status'] = "Contact Not Verified";
                                header('Location: student_BSED_S.php');
                            }
                        }
                    }
                }

                elseif ($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Secondary Education, Major in Science") 
                {
                    $reference = 'course_curriculum/bsed_s/fourth_year/second_sem';
                    $fetch = $database->getReference($reference)->getValue();
                    if ($fetch > 0) {
                        $i = 0;
                        foreach ($fetch as $key_child => $row) {
                            //1y1s 1y1s
                            $subject = $row['code'];
                            $ref_table = 'User/' . $key;
                            $oneone = 'Subjects/BSED_S/fourth_year/second_sem/' . $subject . '/' . $key;
                            $updatequery_result = $database->getReference($ref_table)->update($updateData);
                            $addsub = $database->getReference($oneone)->update($studentData);
                                if ($updatequery_result) {
                                    $_SESSION['status'] = "Contact Verified Successfully";
                                    header('Location: student_BSED_S.php');
                                } else {
                                    $_SESSION['status'] = "Contact Not Verified";
                                    header('Location: student_BSED_S.php');
                                }
                            }
                        }
                    }




   
}

?>
<!--
     $BSCScs111 = 'Subjects/BSCS/first_year/first_sem/CS111/'.$key;
        $BSCScs112 = 'Subjects/BSCS/first_year/first_sem/CS112/'.$key;
        $BSCSge100 = 'Subjects/BSCS/first_year/first_sem/GE100/'.$key;
        $BSCSge101 = 'Subjects/BSCS/first_year/first_sem/GE101/'.$key;
        $BSCSge102 = 'Subjects/BSCS/first_year/first_sem/GE102/'.$key;
        $BSCSge103 = 'Subjects/BSCS/first_year/first_sem/GE103/'.$key;
        $BSCSfil111 = 'Subjects/BSCS/first_year/first_sem/FIL111/'.$key;
        $BSCSreed111 = 'Subjects/BSCS/first_year/first_sem/REED111/'.$key;
        $BSCSpe111 = 'Subjects/BSCS/first_year/first_sem/PE111/'.$key;
        $BSCSnstp1 = 'Subjects/BSCS/first_year/first_sem/NSTP1/'.$key;
        //1y2s 1y2s
        $BSCScs121 = 'Subjects/BSCS/first_year/second_sem/CS111/'.$key;
        $BSCScs122 = 'Subjects/BSCS/first_year/second_sem/CS112/'.$key;
        $BSCSge104 = 'Subjects/BSCS/first_year/second_sem/GE104/'.$key;
        $BSCSge105 = 'Subjects/BSCS/first_year/second_sem/GE105/'.$key;
        $BSCSge106 = 'Subjects/BSCS/first_year/second_sem/GE106/'.$key;
        $BSCSge107 = 'Subjects/BSCS/first_year/second_sem/GE107/'.$key;
        $BSCSfil121 = 'Subjects/BSCS/first_year/second_sem/FIL121/'.$key;
        $BSCSreed121 = 'Subjects/BSCS/first_year/second_sem/REED121/'.$key;
        $BSCSpe121 = 'Subjects/BSCS/first_year/second_sem/PE121/'.$key;
        $BSCSnstp2 = 'Subjects/BSCS/first_year/second_sem/NSTP2/'.$key;

        //2y1s 2y1s
        $BSCScs211 = 'Subjects/BSCS/second_year/first_sem/CS211/'.$key;
        $BSCScs212 = 'Subjects/BSCS/second_year/first_sem/CS212/'.$key;
        $BSCScs213 = 'Subjects/BSCS/second_year/first_sem/CS213/'.$key;
        $BSCScs214 = 'Subjects/BSCS/second_year/first_sem/CS214/'.$key;
        $BSCSge108 = 'Subjects/BSCS/second_year/first_sem/GE108/'.$key;
        $BSCSge109 = 'Subjects/BSCS/second_year/first_sem/GE109/'.$key;
        $BSCSel211 = 'Subjects/BSCS/second_year/first_sem/EL211/'.$key;
        $BSCSfil211 = 'Subjects/BSCS/second_year/first_sem/FIL111/'.$key;
        $BSCSreed211 = 'Subjects/BSCS/second_year/first_sem/REED211/'.$key;
        $BSCSpe211 = 'Subjects/BSCS/second_year/first_sem/PE211/'.$key;

        //2y2s 2y2s
        $BSCScs221 = 'Subjects/BSCS/second_year/second_sem/CS221/'.$key;
        $BSCScs222 = 'Subjects/BSCS/second_year/second_sem/CS222/'.$key;
        $BSCScs223 = 'Subjects/BSCS/second_year/second_sem/CS223/'.$key;
        $BSCScs224 = 'Subjects/BSCS/second_year/second_sem/CS224/'.$key;
        $BSCSge110 = 'Subjects/BSCS/second_year/second_sem/GE110/'.$key;
        $BSCSge111 = 'Subjects/BSCS/second_year/second_sem/GE111/'.$key;
        $BSCSel221 = 'Subjects/BSCS/second_year/second_sem/EL221/'.$key;
        $BSCSel221 = 'Subjects/BSCS/second_year/second_sem/EL222/'.$key;
        $BSCSreed221 = 'Subjects/BSCS/second_year/second_sem/REED221/'.$key;
        $BSCSpe221 = 'Subjects/BSCS/second_year/second_sem/PE221/'.$key;

        //3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 3y1s 

        $BSCScs311 = 'Subjects/BSCS/third_year/first_sem/CS311/'.$key;
        $BSCScs312 = 'Subjects/BSCS/third_year/first_sem/CS312/'.$key;
        $BSCScs313 = 'Subjects/BSCS/third_year/first_sem/CS313/'.$key;
        $BSCScs314 = 'Subjects/BSCS/third_year/first_sem/CS314/'.$key;
        $BSCScs315 = 'Subjects/BSCS/third_year/first_sem/CS315/'.$key;
        $BSCSel311 = 'Subjects/BSCS/third_year/first_sem/EL311/'.$key;
        $BSCSel312 = 'Subjects/BSCS/third_year/first_sem/EL312/'.$key;
      // 3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s  3y2s 
        $BSCScs321 = 'Subjects/BSCS/third_year/second_sem/CS321/'.$key;
        $BSCScs322 = 'Subjects/BSCS/third_year/second_sem/CS322/'.$key;
        $BSCScs323 = 'Subjects/BSCS/third_year/second_sem/CS323/'.$key;
        $BSCScs324 = 'Subjects/BSCS/third_year/second_sem/CS324/'.$key;
        $BSCScs325 = 'Subjects/BSCS/third_year/second_sem/CS325/'.$key;
        $BSCScs326 = 'Subjects/BSCS/third_year/second_sem/CS326/'.$key;
        $BSCScs317 = 'Subjects/BSCS/third_year/second_sem/CS327/'.$key;

    // 4y1s 

        $BSCScs411 = 'Subjects/BSCS/fourth_year/first_sem/CS411/'.$key;
        $BSCScs412 = 'Subjects/BSCS/fourth_year/first_sem/CS412/'.$key;
        $BSCScs413 = 'Subjects/BSCS/fourth_year/first_sem/CS413/'.$key;
        $BSCScs414 = 'Subjects/BSCS/fourth_year/first_sem/CS414/'.$key;
        $BSCScs415 = 'Subjects/BSCS/fourth_year/first_sem/CS415/'.$key;

    // 4y2s

        $BSCScs421 = 'Subjects/BSCS/fourth_year/second_sem/CS421/'.$key;

        


        
        







        $ref_table = 'User/'.$key;
        $sub_table = 'User/'.$key."/grades/first_year";
        
        
        if($year == "1st Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science")
        {
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsubCS111 = $database->getReference($BSCScs111)->update($studentData);
                $addsubCS112 = $database->getReference($BSCScs112)->update($studentData);
                $addsubGE100 = $database->getReference($BSCSge100)->update($studentData);
                $addsubGE101 = $database->getReference($BSCSge101)->update($studentData);
                $addsubGE102 = $database->getReference($BSCSge102)->update($studentData);
                $addsubGE103 = $database->getReference($BSCSge103)->update($studentData);
                $addsubFIL111 = $database->getReference($BSCSfil111)->update($studentData);
                $addsubREED111 = $database->getReference($BSCSreed111)->update($studentData);
                $addsubPE111 = $database->getReference($BSCSpe111)->update($studentData);
                $addsubNSTP1 = $database->getReference($BSCSnstp1)->update($studentData);

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
        elseif($year == "1st Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science")
            {
                $updatequery_result = $database->getReference($ref_table)->update($updateData);
                $addsubCS121 = $database->getReference($BSCScs121)->update($studentData);
                $addsubCS122 = $database->getReference($BSCScs122)->update($studentData);
                $addsubGE104 = $database->getReference($BSCSge104)->update($studentData);
                $addsubGE105 = $database->getReference($BSCSge105)->update($studentData);
                $addsubGE106 = $database->getReference($BSCSge106)->update($studentData);
                $addsubGE107 = $database->getReference($BSCSge107)->update($studentData);
                $addsubFIL121 = $database->getReference($BSCSfil121)->update($studentData);
                $addsubREED121 = $database->getReference($BSCSreed121)->update($studentData);
                $addsubPE121 = $database->getReference($BSCSpe121)->update($studentData);
                $addsubNSTP2 = $database->getReference($BSCSnstp2)->update($studentData);

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
        elseif($year == "2nd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science") 
        {
            $updatequery_result = $database->getReference($ref_table)->update($updateData);
            $addsubCS211 = $database->getReference($BSCScs211)->update($studentData);
            $addsubCS212 = $database->getReference($BSCScs212)->update($studentData);
            $addsubCS213 = $database->getReference($BSCScs213)->update($studentData);
            $addsubCS214 = $database->getReference($BSCScs214)->update($studentData);
            $addsubGE108 = $database->getReference($BSCSge108)->update($studentData);
            $addsubGE109 = $database->getReference($BSCSge109)->update($studentData);
            $addsubFIL211 = $database->getReference($BSCSfil211)->update($studentData);
            $addsubEL211 = $database->getReference($BSCSel211)->update($studentData);
            $addsubREED211 = $database->getReference($BSCSreed211)->update($studentData);
            $addsubPE211 = $database->getReference($BSCSpe211)->update($studentData);

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
    elseif($year == "2nd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS221 = $database->getReference($BSCScs221)->update($studentData);
        $addsubCS222 = $database->getReference($BSCScs222)->update($studentData);
        $addsubCS223 = $database->getReference($BSCScs223)->update($studentData);
        $addsubCS224 = $database->getReference($BSCScs224)->update($studentData);
        $addsubGE110 = $database->getReference($BSCSge110)->update($studentData);
        $addsubGE111 = $database->getReference($BSCSge111)->update($studentData);
        $addsubEL221 = $database->getReference($BSCSel221)->update($studentData);
        $addsubEL222 = $database->getReference($BSCSel222)->update($studentData);
        $addsubREED221 = $database->getReference($BSCSreed221)->update($studentData);
        $addsubPE221 = $database->getReference($BSCSpe221)->update($studentData);

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
    elseif($year == "3rd Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS311 = $database->getReference($BSCScs311)->update($studentData);
        $addsubCS312 = $database->getReference($BSCScs312)->update($studentData);
        $addsubCS313 = $database->getReference($BSCScs313)->update($studentData);
        $addsubCS314 = $database->getReference($BSCScs314)->update($studentData);
        $addsubCS315 = $database->getReference($BSCScs315)->update($studentData);
        $addsubEL311 = $database->getReference($BSCSel311)->update($studentData);
        $addsubEL312 = $database->getReference($BSCSel312)->update($studentData);

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

    elseif($year == "3rd Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS321 = $database->getReference($BSCScs321)->update($studentData);
        $addsubCS322 = $database->getReference($BSCScs322)->update($studentData);
        $addsubCS323 = $database->getReference($BSCScs323)->update($studentData);
        $addsubCS324 = $database->getReference($BSCScs324)->update($studentData);
        $addsubCS325 = $database->getReference($BSCScs325)->update($studentData);
        $addsubCS326 = $database->getReference($BSCScs326)->update($studentData);
        $addsubCS327 = $database->getReference($BSCScs327)->update($studentData);

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

    elseif($year == "4th Year" && $sem == "1st Sem" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS411 = $database->getReference($BSCScs411)->update($studentData);
        $addsubCS412 = $database->getReference($BSCScs412)->update($studentData);
        $addsubCS413 = $database->getReference($BSCScs413)->update($studentData);
        $addsubCS414 = $database->getReference($BSCScs414)->update($studentData);
        $addsubCS415 = $database->getReference($BSCScs415)->update($studentData);

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

    elseif($year == "4th Year" && $sem == "2nd Sem" && $course == "Bachelor of Science in Computer Science")
    {
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
        $addsubCS421 = $database->getReference($BSCScs421)->update($studentData);


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
-->