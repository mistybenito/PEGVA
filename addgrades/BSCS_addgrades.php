<?php
    include('authentication.php');
	include('navbar.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Subject and Grades </title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="addgrade.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
<div id="subject_info">
	<form name="form1" method="post" action="code_addgrades_BSCS.php" >

    <center><legend>Subject Description</legend></center>

	<table>
	<?php
		$key_child = $_GET['id'];
		$scode = $_GET['Subject_code'];
		$desc = $_GET['Desc_title'];
		$units = $_GET['Unit'];
		?>
						<input type="hidden" name = "id" value = "<?= $key_child; ?>">
						<input type="hidden" name = "Grade" value = "1">
					<tr> 
						<td>Course</td>
						<td><input type="text" name = "Course" value ="Bachelor of Science in Computer Science"></td>
					</tr>
					<tr> 
						<td>Subject Code</td>
						<td><input type="text" name = "Subject_code" value = "<?= $scode; ?>"></td>
					</tr>
					<tr> 
						<td>Descriptive Title</td>
						<td><input type="text" name = "Desc_title" value ="<?= $desc; ?>" ></td>
					</tr>
					<tr> 
						<td>Unit</td>
						<td><input type="text" name = "Unit" value ="<?= $units; ?>" ></td>
					</tr>

				<?php

				// FIRST YEAR FIRST SEM

				
				if($scode == "CS111")
				{
				?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?=$scode;?> </button></center>
				</form>
				<?php
				}


				elseif($scode == "CS112")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "GE100")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "GE101")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "GE102")
				{
					?>
					<tr> 
						<td>Grade</td>
						<td> </td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save<?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "GE103")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "FIL111")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "REED111")
				{
					?>
					<tr> 
						<td><label for ="grade08">Grade:
							<select name="grade08" id="grade08">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "PE111")
				{
					?>
					<tr> 
						<td><label for ="grade09">Grade:
							<select name="grade09" id="grade09">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "NSTP1")
				{
					?>
					<tr> 
						<td><label for ="grade10">Grade:
							<select name="grade09" id="grade10">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			// 1st year 2nd sem

			if($scode == "CS121")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS122")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "GE104")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}
			elseif($scode == "GE105")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}
			elseif($scode == "GE106")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "GE107")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "FIL121")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "REED121")
				{
					?>
					<tr> 
						<td><label for ="grade08">Grade:
							<select name="grade08" id="grade08">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "PE121")
				{
					?>
					<tr> 
						<td><label for ="grade09">Grade:
							<select name="grade09" id="grade09">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				// 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 2ND YEAR 1ST SEM 
			elseif($scode == "CS211")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS212")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}
			elseif($scode == "CS213")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS214")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "GE108")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}
			elseif($scode == "GE109")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "FIL211")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "EL211")
				{
					?>
					<tr> 
						<td><label for ="grade08">Grade:
							<select name="grade08" id="grade08">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "REED211")
				{
					?>
					<tr> 
						<td><label for ="grade09">Grade:
							<select name="grade09" id="grade09">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "PE211")
				{
					?>
					<tr> 
						<td><label for ="grade10">Grade:
							<select name="grade09" id="grade10">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}
			///// 2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM2ND YEAR 2ND SEM
			
			elseif($scode == "CS221")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS222")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS223")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "CS224")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "GE110")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "GE111")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "EL221")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "EL222")
				{
					?>
					<tr> 
						<td><label for ="grade08">Grade:
							<select name="grade08" id="grade08">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "REED221")
				{
					?>
					<tr> 
						<td><label for ="grade09">Grade:
							<select name="grade09" id="grade09">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			elseif($scode == "PE221")
				{
					?>
					<tr> 
						<td><label for ="grade10">Grade:
							<select name="grade09" id="grade10">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

			/// 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 3RD YEAR 1ST SEM 

			elseif($scode == "CS311")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS312")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS313")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS314")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS315")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "EL311")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "EL312")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				// 3RD YEAR 2ND SEM

				elseif($scode == "CS321")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				elseif($scode == "CS322")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS323")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				elseif($scode == "CS324")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS325")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS326")
				{
					?>
					<tr> 
						<td><label for ="grade06">Grade:
							<select name="grade06" id="grade06">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS327")
				{
					?>
					<tr> 
						<td><label for ="grade07">Grade:
							<select name="grade07" id="grade07">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				//FOURTH YEAR 1ST SEM 

				elseif($scode == "CS411")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS412")
				{
					?>
					<tr> 
						<td><label for ="grade02">Grade:
							<select name="grade02" id="grade02">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				elseif($scode == "CS413")
				{
					?>
					<tr> 
						<td><label for ="grade03">Grade:
							<select name="grade03" id="grade03">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				elseif($scode == "CS414")
				{
					?>
					<tr> 
						<td><label for ="grade04">Grade:
							<select name="grade04" id="grade04">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}


				elseif($scode == "CS415")
				{
					?>
					<tr> 
						<td><label for ="grade05">Grade:
							<select name="grade05" id="grade05">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}

				// FOURTH YEAR 2ND SEM

				elseif($scode == "CS421")
				{
					?>
					<tr> 
						<td><label for ="grade01">Grade:
							<select name="grade01" id="grade01">
							<option value="1.0">1.0</option>
							<option value="1.5">1.5</option>
							<option value="2.0">2.0</option>
							<option value="2.5">2.5</option>
							<option value="3.0">3.0</option>
							<option value="5.0">5.0</option>
							</select>
						</td>
					</tr>
					</table> 
					<center><button type="submit" name = "add_grades_<?= $scode;?>" id="update"> Save <?= $scode;?> </button></center>
				</form>
				<?php
				}








				?>
	 












</div>

</body>
    </html>