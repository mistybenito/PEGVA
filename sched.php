<?php
   include("authentication.php");
   include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Schedule</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="schedule.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>

    <div class="div1">
    
    <table>
        <tr>
            <th>Subject Code</th>
		    <th>Section A</th>
		    <th>Section B</th>
		    <th>Section C</th>
	    </tr> 

        <?php
             include('dbcon.php');
             $ref_table = 'schedule/bscs/first_year/first_sem';
             $fetchdata = $database->getReference($ref_table)->getValue();


             if($fetchdata > 0)
             { 
             $i = 0;
             foreach($fetchdata as $key => $row)
             {
        ?>
        <tr>
            <td class="code"> <?=$row['code'];?></td>
            <td class="section"><?=$row['a'];?></td>
            <td class="section"><?=$row['b'];?></td>
            <td class="section"><?=$row['c'];?></td>
        </tr>
        <?php
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

    </table>

     <center>
        <div id="btns">
			
			<input type="button" onclick="window.location.href='add_grades.php?id=<?=$key_child;?>'" id="update_sched_btn" value="Upload Schedule"/>
		</div>
	</center>
</form>
	</form>
        
</div>
<div  id="footer">
    <p>All content copyright © 2022, PEGVA.</p>
</div>
    </body>
</html>