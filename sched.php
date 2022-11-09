<?php

	include("navbar-teacher.php");
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
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>
        <tr>
            <td><input type="text" class="code"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
            <td><input type="text" class="section"></td>
        </tr>

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