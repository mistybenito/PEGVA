<?php
    include("authentication.php");
    include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    
        <div id="user-list">
            <table class="user-list-content" style="width:100%;">
                <tr>
                                    <th>Display</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                </tr>
                <?php
                            include('dbcon.php');

                            $users = $auth->listUsers();
                            $i = 1;
                                foreach ($users as $user) 
                                {
                                    $claims = $auth->getUser($user->uid)->customClaims;
                                    if(!$claims == null)
                                    {
                                    ?>
                                    <tr>    
                                        <td><?=$user->displayName?></td>
                                        <td><?=$user->phoneNumber?></td>
                                        <td><?=$user->email?></td>
                                        <td>
                                        <h4 class = "border bg-warning">
                                        <?php
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
                                        ?>
                                    </h4>
    
                                        </td>
                                        <td>
                                            <a href="user-edit.php?id=<?=$user->uid;?>" class = "btn btn-primary btn-sm" style="color:#0054c7">Edit</a>
                                        </td>
                                    <?php
                                }
                                                                    
                            }
                            ?>
            </table>
            </div>

            <p id="footer">All content copyright © 2022, PEGVA.</p>
    </body>
</html>