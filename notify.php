<?php


include('auth/registrar_auth.php');
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
}



?>

<form method="post" action = "code_notify.php">
    <input type ="hidden" name = "open_status" value = "OPEN">

    <input type ="hidden" name = "close_status" value = "CLOSE">
    <input type="submit" name="open" value="OPEN"/></input>
    <input type="submit" name="close" value="CLOSE"/></input>


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
