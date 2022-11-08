<?php

include('dbcon.php');
//SET USER CLAIMS CODE

if(isset($_POST['user_claims_btn']))
{
    $uid = $_POST['claims_user_id'];
    $roles = $_POST['role_as'];

    if($roles == 'admin')
    {
        $auth->setCustomUserClaims($uid, ['admin' => true]);
        $msg = "User role as Admin.";
    }
    elseif($roles == 'super_admin')
    {
        $auth->setCustomUserClaims($uid, ['super_admin' => true]);
        $msg = "User role as Super Admin.";
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
}
else
{
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
    header('Location: user-list.php');
    exit();
}
else
{
    $_SESSION['status'] = "User not updated.";
    header('Location: user-list.php');
    exit();
}