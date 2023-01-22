<?php
include('includes/header.php');

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
                    <div class="card-header">
                        <h4>
                            CS111
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>St. No</th>
                                    <th>First Name</th>
                                    <th>Course</th>
                                    <th>Email</th>
                                    <th>Grade</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                        include('dbcon.php');
                                        $ref_table = 'Subjects/BSCS/first_year/first_sem/CS111';
                                        $fetchdata = $database->getReference($ref_table)->getValue();
                                        if($fetchdata > 0)
                                        {
                                            $i = 0;
                                            foreach($fetchdata as $key => $row)
                                            {
                                                ?>
                                                     <tr>
                                                    <td> <?= $row['Student_number'];?></td>
                                                    <td> <?= $row['Name'];?> </td>
                                                    <td> <?= $row['Course'];?> </td>
                                                    <td> <?= $row['Email'];?> </td>
                                                    <td> <?= $row['Grade'];?> </td>
                                                    <td>
                                                        <a href="TEST_add_grades.php?id=<?=$key?>" class = "btn btn-primary btn-sm"> Add Grade </a>
                                                    </td>
                                                    <td>
                                                        <a href="list.php?id=<?=$key?>" class = "btn btn-danger btn-sm"> Delete </a>
                                                    </td>
                                                     </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="7"> No Record Found</td>
                                            </tr>
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


 
    <?php
include('includes/footer.php');

?>
    