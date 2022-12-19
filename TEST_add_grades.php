<?php
include('auth/bscs_auth.php');
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
                            Add Grades
                        </h4>
                    </div>
                    <div class="card-body">
                       <form action="TEST_code_add_grades.php" method="POST">
                       <?php
                        include('dbcon.php');
                        if(isset($_GET['id']))
                        {
                            $key_child = $_GET['id'];
                            $ref_table = 'Subjects/bscs/1ST YEAR/1ST SEM/CS111';
                            $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
                            if($getdata > 0)
		                    {
			                ?>



                        <input type="hidden" name= "id" value="<?=$key_child;?>">


                       <div class="form-group mb-3">
                        <label for="">Course</label>
                        <input type="text" name="Course" value = "BSCS" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Subject Code</label>
                        <input type="text" name="Subject_code" value = "CS111" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Description Title</label>
                        <input type="text" name="Desc_title" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                        <label for="">Unit</label>
                        <input type="text" name="Unit" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <label for="">Grade</label>
                        <input type="text" name="Grade" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                        <button type="submit" name="add_grades" class="btn btn-primary"> Save Contact </button>
                        </div>

                       </form> 
                       <?php
                            }
                            else
                            {
                                $_SESSION['status'] = "No record found.";
                                header('Location: index.php');
                                exit();
                            }
                        }
                        else
                            {
                                $_SESSION['status'] = "Not found.";
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
    