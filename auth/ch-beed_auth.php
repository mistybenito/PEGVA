<?php
session_start();
include('dbcon.php');
if(isset($_SESSION['verified_user_id']))
{
    if(isset($_SESSION['verified_ch-beed']))
    {
        $uid = $_SESSION['verified_user_id'];
        $idTokenString = $_SESSION['idTokenString'];
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            // echo "Working";
        } catch (InvalidToken $e) {
            // echo 'The token is invalid: '.$e->getMessage();
            $_SESSION['expiry_status'] = "Token expired/Invalid. Login again.";
            header('Location: logout.php');
            exit();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
            $_SESSION['expiry_status'] = "Token expired/Invalid. Login again.";
            header('Location: logout.php');
            exit();
        }
    }
    else
    {
        $_SESSION['status'] = "Access Denied because you're not ABREED Teacher.";
        header("Location: reg.php");
        exit();
    }
}


else
{
    $_SESSION['status'] = "Login to access.";
    header('Location: login.php');
    exit();
}


?>