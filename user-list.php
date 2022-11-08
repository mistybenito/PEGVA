<?php
include('authentication.php');
include('navbar.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                if(isset($_SESSION['status'])) 
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Display</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('dbcon.php');

                            $users = $auth->listUsers();
                            $i = 1;
                            foreach ($users as $user) 
                            {
                                ?>
                                <tr>
                                    <td><?=$i++;?></td>
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
                                    elseif(isset($claims['bscs']) == true)
                                    {
                                        echo "Role: BSCS Teacher";
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
                                        <a href="user-edit.php?id=<?=$user->uid;?>" class = "btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="user-delete.php" class = "btn btn-danger btn-sm">Delete</a>
                                    </td>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


 