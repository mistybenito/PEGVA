<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        
        <link href="nav-new.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="navbar-header">

</div>
<div class="sidenav">
<input type="checkbox" id="check">
            <label for="check" class="chckbtn">
                <i class="fa fa-bars"></i>
            </label>
<p class="title">
  <img src="images/logo.png" alt="Admin" class="avatar">
    <a href="registrar.php">Cainta Catholic College</a></p> 

<?php if(isset($_SESSION['verified_chairman'])):?>
  <button class="dropdown-btn">Student List 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="student_ABREED.php">ABREED</a>
    <a href="student_BEED.php">BEED</a>
    <a href="student_BSED-ENG.php">BSED-ENG</a>
    <a href="student_BSED-MATH.php">BSED-MATH</a>
    <a href="student_BSED-SCI.php">BSED-SCI</a>
    <a href="student_BSBA.php">BSBA</a>
    <a href="student_BSCS.php">BSCS</a>
    <a href="student_BSOA.php">BSOA</a>
  </div>
  <?php endif; ?>

  <button class="dropdown-btn">Student Per Subject
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="viewsub_ABREED.php">ABREED</a>
    <a href="viewsub_BEED.php">BEED</a>
    <a href="viewsub_BSED-ENG.php">BSED-ENG</a>
    <a href="viewsub_BSED-MATH.php">BSED-MATH</a>
    <a href="viewsub_BSED-SCI.php">BSED-SCI</a>
    <a href="viewsub_BSBA.php">BSBA</a>
    <a href="viewsub_BSCS.php">BSCS</a>
    <a href="viewsub_BSOA.php">BSOA</a>
  </div>

  <?php if(isset($_SESSION['verified_registrar'])) :?>
  <a href="user-list.php">User List</a>
  <?php endif; ?>

<a href="view_sched.php">Schedule</a>
<a href="view_curriculum.php">Curriculum</a>

<button class="dropdown-btn">Pre-Enrollment
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <?php 
if(isset($_POST['open']))
{
function sendNotif($to, $notif){
  $url = 'https://fcm.googleapis.com/fcm/send';
  
  $apiKey = "AAAAxI6_q48:APA91bEg08KyEsgTnv69vXMxmK7e-Pc8WNEYe-lGBWOvPpe4Wkj0KVYyzo7R5okm_Ef_-ikE2zLs942HSnqg2CgzQbGg_tZx48os-CNSL4s-85ntqaqIHEQDUF1J4j-0Amx0OmH60QYt";

  $headers = array ();
  $headers[] = 'Authorization: key ='.$apiKey;
  $headers[] = 'Content-Type: application/json';


  $ch = curl_init();

  $fields = json_encode(array('to'=>$to, 'notification'=>$notif));

  curl_setopt ($ch, CURLOPT_URL, $url);  
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch, CURLOPT_POST, 1);
  curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt ($ch, CURLOPT_POSTFIELDS, ($fields));

 

  $result = curl_exec($ch);
  if(curl_errno($ch))
  {
    echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);

}

  $to  ='/topics/newsletter';
  $notif = array(
    'title'=>'Greetings!',
    'body'=>'The Enrollment is now OPEN'
  );

sendNotif($to, $notif);
echo"Notification sent";

$open_status = $_POST['open_status'];

    $updateData = [
        'status'=>$open_status, 
    ];

    $ref_table = 'pre_enrollment';



    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Updated Status";
            header('Location: registrar.php');
        }
        else
        {
            $_SESSION['status'] = "Status not updated.";
            header('Location: registrar.php');
        }
}

elseif(isset($_POST['close']))
{
  function sendNotif($to, $notif){
    $url = 'https://fcm.googleapis.com/fcm/send';
    
    $apiKey = "AAAAxI6_q48:APA91bEg08KyEsgTnv69vXMxmK7e-Pc8WNEYe-lGBWOvPpe4Wkj0KVYyzo7R5okm_Ef_-ikE2zLs942HSnqg2CgzQbGg_tZx48os-CNSL4s-85ntqaqIHEQDUF1J4j-0Amx0OmH60QYt";
  
    $headers = array ();
    $headers[] = 'Authorization: key ='.$apiKey;
    $headers[] = 'Content-Type: application/json';
  
  
    $ch = curl_init();
  
    $fields = json_encode(array('to'=>$to, 'notification'=>$notif));
  
    curl_setopt ($ch, CURLOPT_URL, $url);  
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, ($fields));
  
   
  
    $result = curl_exec($ch);
    if(curl_errno($ch))
    {
      echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
  
  }
  
    $to  ='/topics/newsletter';
    $notif = array(
  
      'body'=>'The Enrollment is now CLOSED'
    );
  
  sendNotif($to, $notif);
  echo"Notification sent";
    
    $close_status = $_POST['close_status'];

    $updateData = [
        'status'=>$close_status,
        
    ];

    $ref_table = 'pre_enrollment';



    $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {

            $_SESSION['status'] = "Updated Status";
            header('Location: registrar.php');
        }
        else
        {
            $_SESSION['status'] = "Status not updated.";
            header('Location: registrar.php');
        }
    }
    elseif(isset($_POST['verify']))
    {
    function sendNotif($to, $notif){
      $url = 'https://fcm.googleapis.com/fcm/send';
      
      $apiKey = "AAAAxI6_q48:APA91bEg08KyEsgTnv69vXMxmK7e-Pc8WNEYe-lGBWOvPpe4Wkj0KVYyzo7R5okm_Ef_-ikE2zLs942HSnqg2CgzQbGg_tZx48os-CNSL4s-85ntqaqIHEQDUF1J4j-0Amx0OmH60QYt";
    
      $headers = array ();
      $headers[] = 'Authorization: key ='.$apiKey;
      $headers[] = 'Content-Type: application/json';
    
    
      $ch = curl_init();
    
      $fields = json_encode(array('to'=>$to, 'notification'=>$notif));
    
      curl_setopt ($ch, CURLOPT_URL, $url);  
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($ch, CURLOPT_POST, 1);
      curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt ($ch, CURLOPT_POSTFIELDS, ($fields));
    
     
    
      $result = curl_exec($ch);
      if(curl_errno($ch))
      {
        echo 'Error:' . curl_error($ch);
      }
      curl_close($ch);
    
    }
    
      $to  ='/topics/newsletter';
      $notif = array(
        'title'=>'Greetings!',
        'body'=>'The Enrollment is now OPEN'
      );
    
    sendNotif($to, $notif);
    echo"Notification sent";
    
    $open_status = $_POST['open_status'];
    
        $updateData = [
            'status'=>$open_status, 
        ];
    
        $ref_table = 'pre_enrollment';
    
    
    
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
    
            if($updatequery_result)
            {
    
                $_SESSION['status'] = "Updated Status";
                header('Location: registrar.php');
            }
            else
            {
                $_SESSION['status'] = "Status not updated.";
                header('Location: registrar.php');
            }
    }


?>

<form method="post">
    <input type ="hidden" name = "open_status" value = "OPEN" class="status">
    <input type ="hidden" name = "close_status" value = "CLOSE">
    <input type="submit" name="open" value="OPEN"  class="notif"/></input><br>
    <input type="submit" name="close" value="CLOSE" class="notif"/></input>
    <br>
    <p style="padding-left:10px;color:#256a8f;">Pre-Enrollment Status: </p>
    <?php
      include('dbcon.php');
      $ref_table = 'pre_enrollment';
      $fetchdata = $database->getReference($ref_table)->getValue();
      if ($fetchdata > 0) 
      {
         $i = 0;
            ?>
            <tr>
             <td> <?= $fetchdata['status']; ?> </td>
        <?php
          }
    ?>
</form>




  </div>
  <div id="logoutbtn">
    <a href="logout.php" style="color:#a70000;">Logout</a>
  </div>
  <p id="footer">All content copyright © 2022, PEGVA.</p>
</div>

<div class="main">
  
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
