<?php
    include("auth/ch-bsba_auth.php");
    include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BSBA Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div id="student-list">
        <p class="course-student-list">BSBA Student List</p>



        
   
            <div class="input-group mb-3">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            </div>

            <table id="myTable" class="student-list-content" style="width:100%;" >
                <tr>
                    <th>Student #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Verification</th>
                    <th>Verify</th>
                    <th>Profile</th>
                    
                </tr>
            <?php
                include('dbcon.php');
                $ref_table = 'User';
                $fetchdata = $database->getReference($ref_table)->getValue();
                if($fetchdata > 0)
                {
                $i = 0;
                foreach($fetchdata as $key => $row)
                {
            ?>
            <tr>
            <?php
                    if ($row['Course'] == "Bachelor of Science in Business Administration")
                     {
                ?>
                    <td> <?= $row['Student_number']; ?> </td>
                    <td> <?= $row['Name']; ?> </td>
                    <td> <?= $row['Email']; ?> </td>
                    <td> <?= $row['Course']; ?> </td>
                    <td> 
                    <a href="verify_page.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color:#0054c7"> Verify </a>
                    </td>
                    <td>    
                    <a href="profile.php?id=<?= $key;?>" class = "btn btn btn-primary" style="color:#0054c7"> View </a>
                    </td>
                </tr>                
            <?php
                    }
                }
                }
                else
                {
            ?>
            <tr>
                <td > No Record Found </td>
            </tr>
            <?php
                }
            ?>
         </tbody>
            </table>


            <script>
        function myFunction() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
            </div>
            <p id="footer">All content copyright © 2022, PEGVA.</p>
            
    </body>
    
</html>