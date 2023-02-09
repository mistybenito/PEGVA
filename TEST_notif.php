@ -49,9 +49,246 @@

<a href="view_sched.php">Schedule</a>
<a href="view_curriculum.php">Curriculum</a>
  <div id="logoutbtn">
    <a href="logout.php" style="color:#a70000;">Logout</a>

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

