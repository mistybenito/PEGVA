<?php
session_start();
include('dbcon.php');


$table = $_POST['reference'];
$subtable = $_POST['sub'];
$where = $_POST['where'];
$course = $_POST['Course'];
$id = $_POST['uid'];
$key_child = $_POST['addgrades'];


$getdata = $database->getReference($table)->getValue();
if ($getdata > 0) {
    foreach ($getdata as $key => $row) {
        $s = $getdata['code'];
        $g = $getdata['grade'];

        
        $grade = $_POST[$g];
        $status = $_POST['Grade'];  
            
        
            $postGrade = [
                $g => $grade,
            ];
            $postStatus = [
                $g => $grade,
                'Grade' => $status,
            ];


            $ref_table = $subtable .'/'. $key_child;
            $ref_table2 = 'User/' . $key_child . '/grades/' . $where;
            $postRef_result = $database->getReference($ref_table)->update($postStatus);
            $postRef_result = $database->getReference($ref_table2)->update($postGrade);
        }
    }

?>