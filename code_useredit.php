<?php

include('dbcon.php');
//SET USER CLAIMS CODE

if(isset($_POST['user_claims_btn']))
{
    $uid = $_POST['claims_user_id'];
    $roles = $_POST['role_as'];

    if($roles == 'registrar')
    {
        $auth->setCustomUserClaims($uid, ['registrar' => true]);
        $msg = "User role as Registrar. ";
    }
    elseif($roles == 'ch-bscs')
    {
        $auth->setCustomUserClaims($uid, ['ch-bscs' => true]);
        $msg = "User role as BSCS Chairman. ";
    }
    elseif($roles == 'ch-abreed')
    {
        $auth->setCustomUserClaims($uid, ['ch-abreed' => true]);
        $msg = "User role as ABREED Chairman. ";
    }
    elseif($roles == 'ch-beed')
    {
        $auth->setCustomUserClaims($uid, ['ch-beed' => true]);
        $msg = "User role as BEED Chairman. ";
    }
    elseif($roles == 'ch-bsoa')
    {
        $auth->setCustomUserClaims($uid, ['ch-bsoa' => true]);
        $msg = "User role as BSOA Chairman. ";
    }
    elseif($roles == 'ch-bsba')
    {
        $auth->setCustomUserClaims($uid, ['ch-bsba' => true]);
        $msg = "User role as BSBA Chairman. ";
    }

    elseif($roles == 'ch-ed_eng')
    {
        $auth->setCustomUserClaims($uid, ['ch-ed_eng' => true]);
        $msg = "User role as BSED-ENG Chairman. ";
    }
    elseif($roles == 'ch-ed_sci')
    {
        $auth->setCustomUserClaims($uid, ['ch-ed_sci' => true]);
        $msg = "User role as BSED-SCI Chairman. ";
    }
    elseif($roles == 'ch-ed_math')
    {
        $auth->setCustomUserClaims($uid, ['ch-ed_math' => true]);
        $msg = "User role as BSED-MATH Chairman. ";
    }
























    elseif($roles == 'bscs')
    {
        $auth->setCustomUserClaims($uid, ['bscs' => true]);
        $msg = "User role as BSCS Teacher. ";
    }
    elseif($roles == 'abreed')
    {
        $auth->setCustomUserClaims($uid, ['abreed' => true]);
        $msg = "User role as One.";
    }
    elseif($roles == 'beed')
    {
        $auth->setCustomUserClaims($uid, ['beed' => true]);
        $msg = "User role as BEED Teacher. ";
    }
    elseif($roles == 'bsoa')
    {
        $auth->setCustomUserClaims($uid, ['bsoa' => true]);
        $msg = "User role as BSOA Teacher. ";
    }
    elseif($roles == 'bsba')
    {
        $auth->setCustomUserClaims($uid, ['bsba' => true]);
        $msg = "User role as BSBA.";
    }
    elseif($roles == 'ed_eng')
    {
        $auth->setCustomUserClaims($uid, ['ed_eng' => true]);
        $msg = "User role as BSED-ENG Teacher. ";
    }
    elseif($roles == 'ed_sci')
    {
        $auth->setCustomUserClaims($uid, ['ed_sci' => true]);
        $msg = "User role as BSED-SCI Teacher. ";
    }
    elseif($roles == 'ed_math')
    {
        $auth->setCustomUserClaims($uid, ['ed_math' => true]);
        $msg = "User role as BSED-MATH Teacher. ";
    }
    elseif($roles == 'norole')
    {
        $auth->setCustomUserClaims($uid, null);
        $msg = "No User Role";
    }
}



if($msg)
{
    $_SESSION['status'] = "$msg";
    header("Location: user-edit.php?id=$uid");
    exit();
} else {
    $_SESSION['status'] = "User not updated.";
    header("Location: user-edit.php?id=$uid");
    exit();
}













// UPDATE USER CODE

if(isset($_POST['update_user_btn']))
{
    $displayname = $_POST['display_name'];
    $phone = $_POST['phone'];
}

$uid = $_POST['user_id'];
$properties = [
    'displayName' => $displayname,
    'phoneNumber' => $phone,

];

$updatedUser = $auth->updateUser($uid, $properties);


if($updatedUser)
{
    $_SESSION['status'] = "User updated successfully.";
    header('Location: login.php');
    exit();
}
else
{
    $_SESSION['status'] = "User not updated.";
    header("Location: setrole.php?id=$displayname");
    exit();
}
