
<!DOCTYPE html>
<html>
    <head>
        <title>Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="students.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <h1>Student List</h1>
        <div id="div1">  
            <input type="text" placeholder="Search.." class="text-search" >
            <label for="search" type="submit" class="searchbtn">
                <i class="fa fa-search"></i>
            </label>
        </div>
        <div id="div2">
            <tbody>
            <table class="student-list-content" width="80%" border="0">
                <tr>
                                    <th>Display</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                </tr>
                <?php
                            include('dbcon.php');

                            if(isset($_GET['name']))
                            {
                                $name = $_GET['name'];
                                $users = $auth->listUsers();
                                $i = 1;
                                foreach ($users as $user) 
                                {
                                    ?>
                                    <tr>    
                                        <?php   
                                        if($user->displayName == $name)
                                        {
                                            ?>
                                            <td><?=$user->displayName?></td>
                                            <td><?=$user->phoneNumber?></td>
                                            <td><?=$user->email?></td>
                                            <td>
                                            <h4 class = "border bg-warning">
                                            <?php
                                            $claims = $auth->getUser($user->uid)->customClaims;
        
                                            if(isset($claims['registrar']) == true)
                                            {
                                                echo "Role: Registrar";
                                            }
                                            elseif(isset($claims['ch-bscs']) == true)
                                            {
                                                echo "Role: BSCS Chairman";
                                            }
                                            elseif(isset($claims['ch-abreed']) == true)
                                            {
                                                echo "Role: ABREED Chairman";
                                            }
                                            elseif(isset($claims['ch-bsba']) == true)
                                            {
                                                echo "Role: BSBA Chairman";
                                            }
                                            elseif(isset($claims['ch-bsoa']) == true)
                                            {
                                                echo "Role: BSOA Chairman";
                                            }
                                            elseif(isset($claims['ch-beed']) == true)
                                            {
                                                echo "Role: BEED Chairman";
                                            }
                                            elseif(isset($claims['ch-ed_eng']) == true)
                                            {
                                                echo "Role: BSED-ENG Chairman";
                                            }
                                            elseif(isset($claims['ch-ed_sci']) == true)
                                            {
                                                echo "Role: BSED-SCI Chairman";
                                            }

                                            elseif(isset($claims['ch-ed_math']) == true)
                                            {
                                                echo "Role: BSED-MATH Chairman";
                                            }
                                            elseif(isset($claims['abreed']) == true)
                                            {
                                                echo "Role: ABREED Teacher";
                                            }
                                            elseif(isset($claims['beed']) == true)
                                            {
                                                echo "Role: BEED Teacher";
                                            }
                                            elseif(isset($claims['bsoa']) == true)
                                            {
                                                echo "Role: BSOA Teacher";
                                            }
                                            elseif(isset($claims['bsba']) == true)
                                            {
                                                echo "Role: BSBA Teacher";
                                            }
                                            elseif(isset($claims['ed_eng']) == true)
                                            {
                                                echo "Role: BSED-ENG Teacher";
                                            }
                                            elseif(isset($claims['ed_sci']) == true)
                                            {
                                                echo "Role: BSED-SCI Teacher";
                                            }
                                            elseif(isset($claims['ed_math']) == true)
                                            {
                                                echo "Role: BSED-MATH Teacher";
                                            }
                                            elseif($claims == null)
                                            {
                                                echo "Role: No Role";
                                            }
                                            ?>
                                        </h4>
        
                                            </td>
                                            <td>
                                                <a href="setrole2.php?id=<?= $user->uid;?>" class = "btn btn-primary btn-sm">Edit</a>
                                            </td>
                                        <?php
                                        }
                                        
                            }


                            }
                            ?>
            <tr>
                <td > No Record Found </td>
            </tr>
         </tbody>
            </table>
            </div>
        <div  id="footer">
        <p>All content copyright © 2022, PEGVA.</p>
        </div>
    </body>
</html>