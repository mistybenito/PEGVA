<?php
include('includes/header.php');

?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class= 'alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }

                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit and Update Contacts
                            <a href="index.php" class="btn btn-danger float-end"> BACK </a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                       include('dbcon.php');

                       if(isset($_GET['id']))
                       {
                        $key_child = $_GET['id'];

                        $ref_table = 'User';
                        $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                        if($getdata > 0)
                        {
                            ?>

                            
                       <form action="TEST_code_addsub.php" method="POST">

                            <input type="hidden" name= "key" value="<?=$key_child;?>">
                            <input type="text" name="Student_number" value="<?=$getdata['Student_number']?>" class="form-control">
                            <input type="text" name="Name" value="<?=$getdata['Name']?>" class="form-control">
                            <input type="text" name="Course" value="<?=$getdata['Course']?>"class="form-control">
                            <input type="email" name="Email" value="<?=$getdata['Email']?>"class="form-control">
                            <input type="number" name="Contact_Number" value="<?=$getdata['Contact_Number']?>" class="form-control">

                            <div class="form-group mb-3">
                            <button type="submit" name="add_sub_cs111" class="btn btn-primary"> Add to CS111 </button>
                            <button type="submit" name="add_sub_cs112" class="btn btn-primary"> Add to CS112 </button>
 


                            


                       </form> 
                       <?php
                        }
                        else
                        {
                            $_SESSION['status'] = "Invalid ID";
                            header('Location: index.php');
                            exit();
                        }
                       }
                       else
                       {
                           $_SESSION['status'] = "Not Found";
                           header('Location: index.php');
                           exit();
                       }
                       ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    

 
    <?php
include('includes/footer.php');

?>
    