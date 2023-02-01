<?php
    include('authentication.php');
    include("nav-new.php");
?>

<head>
    <title>Edit</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center>
    <div id="role">
                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
            
                <a href="user-list.php" style="color:#0054c7; font-size:14px;"> BACK </a>
            
                        <h4 style="margin-top: 15px;">Edit and Update User Data</h4>
                  
                <form action="code.php" method="POST">

                       <?php
                       include('dbcon.php');

                       if(isset ($_GET['id']))
                       {
                        $uid = $_GET['id'];
                        try {
                            $user = $auth->getUser($uid);
                            ?>

                            <input type="hidden" name = "user_id" value  = "<?=$uid;?>">
                     
                            <label for="">Display Name</label>
                            <input type="text" name="display_name" value="<?=$user->displayName;?>"  id="role-name">
                            <br>
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" value="<?=$user->phoneNumber;?>"  id="role-num">
                    
                        <div>
                            <button type="submit" name="update_user_btn"  id="update_btn"> Update </button>
                        </div>
                            <?php
                        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                            echo $e->getMessage();
                        }
                       }
                       
                       ?>


                       </form> 
                        
                    <div class="user-claims">
                        <h4 style="margin-top: 15px;">Custom User Claims</h4>
                     
                            <form action="code_useredit.php" method = "POST">
                                <?php
                                if(isset($_GET['id']))
                                {
                                    $uid = $_GET['id'];
                                    ?>

                             
                                <input type="hidden" name = "claims_user_id" value = "<?=$uid?>">
                              
                                    <select name="role_as" id="" required>
                                        <option value="">Select Roles</option>
                                        <option value="registrar">Registrar</option>
                                        <option value="">--Course Chairman--</option>
                                        <option value="ch-bscs">BSCS Chairman</option>
                                        <option value="ch-abreed">ABREED Chairman</option>
                                        <option value="ch-beed">BEED Chairman</option>
                                        <option value="ch-bsoa">BSOA Chairman</option>
                                        <option value="ch-bsba">BSBA Chairman</option>
                                        <option value="ch-ed_eng">BSED-ENG Chairman</option>
                                        <option value="ch-ed_sci">BSED-SCI Chairman</option>
                                        <option value="ch-ed_math">BSED-MATH Chairman</option>
                                        <option value="">--Teacher--</option>
                                        <option value="bscs">BSCS Teacher</option>
                                        <option value="abreed">ABREED Teacher</option>
                                        <option value="beed">BEED Teacher</option>
                                        <option value="bsoa">BSOA Teacher</option>
                                        <option value="bsba">BSBA Teacher</option>
                                        <option value="ed_eng">BSED-ENG Teacher</option>
                                        <option value="ed_sci">BSED-SCI Teacher</option>
                                        <option value="ed_math">BSED-MATH Teacher</option>
                                        <option value="">--Others--</option>
                                        <option value="norole">Remove Role</option>
                                    </select>
                               <br>
                                <label>Current Role:</label>
                                <h4 class = "border bg-warning">
                                    <?php
                                    $claims = $auth->getUser($uid)->customClaims;

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


                                    
                                <div>
                                    <button type = "submit" name = "user_claims_btn" class ="submit_btn"> Submit </button>
                                </div
                                <?php
                                }
                                ?>
                        </form>
                
        
    </div>
    </center>
    
    </body>
</html>