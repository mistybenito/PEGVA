<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['verified_registrar']);
unset($_SESSION['verified_bscs']);
unset($_SESSION['verified_abreed']);
unset($_SESSION['verified_beed']);
unset($_SESSION['verified_bsoa']);
unset($_SESSION['verified_bsba']);
unset($_SESSION['verified_ed_eng']);
unset($_SESSION['verified_ed_sci']);
unset($_SESSION['verified_ed_math']);
unset($_SESSION['idTokenString']);

if(isset($_SESSION['expiry_status']))
{
    $_SESSION['status'] = "Session expired.";
}
else
{
    $_SESSION['status'] = "Logged out successfully";

}
header('Location: login.php');
exit();

?>