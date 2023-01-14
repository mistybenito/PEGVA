<?php
session_start();
include('dbcon.php');


// login code

if(isset($_POST['login_btn']))
{
    $email = $_POST['email'];
    $clearTextPassword = $_POST['password'];

    try{
        $user = $auth->getUserByEmail("$email");

        try{
        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
        $idTokenString = $signInResult -> idToken();

        try {
            $verifiedIdToken = $auth -> verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');
            $claims = $auth->getUser($uid)->customClaims;

            if(isset($claims['ch-bscs']) == true)
            {
                $_SESSION['verified_bscs'] = true;
                $_SESSION['verified_ch-bscs'] = true;
                $_SESSION['verified_user_id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                $_SESSION['status'] = "Logged in successfully as BSCS Chairman";
                header('Location: registrar.php');
                exit();

            }
            elseif(isset($claims['ch-beed']) == true)
                {
                    $_SESSION['verified_beed'] = true;
                    $_SESSION['verified_ch-beed'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BEED Chairman";
                    header('Location: registrar.php');
                    exit();
                }
            elseif(isset($claims['ch-abreed']) == true)
                {
                    $_SESSION['verified_abreed'] = true;
                    $_SESSION['verified_ch-abreed'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as ABREED Chairman";
                    header('Location: registrar.php');
                    exit();
                }
            elseif(isset($claims['ch-bsoa']) == true)
                {
                    $_SESSION['verified_bsoa'] = true;
                    $_SESSION['verified_ch-bsoa'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSOA Chairman";
                    header('Location: registrar.php');
                    exit();
                }
                elseif(isset($claims['ch-bsba']) == true)
                {
                    $_SESSION['verified_bsba'] = true;
                    $_SESSION['verified_ch-bsba'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSBA Chairman";
                    header('Location: registrar.php');
                    exit();
                }
                elseif(isset($claims['ch-bsoa']) == true)
                {
                    $_SESSION['verified_bsoa'] = true;
                    $_SESSION['verified_ch-bsoa'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSOA Chairman";
                    header('Location: registrar.php');
                    exit();
                }
                elseif(isset($claims['ch-bsoa']) == true)
                {
                    $_SESSION['verified_bsoa'] = true;
                    $_SESSION['verified_ch-bsoa'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSOA Chairman";
                    header('Location: registrar.php');
                    exit();
                }
            elseif(isset($claims['ch-ed_eng']) == true)
                {
                    $_SESSION['verified_ed_eng'] = true;
                    $_SESSION['verified_ch-ed_eng'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-ENG Chairman";
                    header('Location: registrar.php');
                    exit();
                }
            elseif(isset($claims['ch-ed_sci']) == true)
                {
                    $_SESSION['verified_ed_sci'] = true;
                    $_SESSION['verified_ch-ed_sci'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-SCI Chairman";
                    header('Location: registrar.php');
                    exit();
                }

            elseif(isset($claims['ch-ed_math']) == true)
                {
                    $_SESSION['verified_ed_math'] = true;
                    $_SESSION['verified_ch-ed_math'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-MATH Chairman";
                    header('Location: registrar.php');
                    exit();
                }

                
            elseif(isset($claims['bscs']) == true)
                {
                    $_SESSION['verified_bscs'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSCS Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['abreed']) == true)
                {
                    $_SESSION['verified_abreed'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as ABREED Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['beed']) == true)
                {
                    $_SESSION['verified_beed'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BEED Teacher";
                    header('Location: registrar.php');
                    exit();

                }   
            elseif(isset($claims['bsoa']) == true)
                {
                    $_SESSION['verified_bsoa'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSOA Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['bsba']) == true)
                {
                    $_SESSION['verified_bsba'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSBA Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['ed_eng']) == true)
                {
                    $_SESSION['verified_ed_eng'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-ENG Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['ed_sci']) == true)
                {
                    $_SESSION['verified_ed_sci'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-SCI Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['ed_math']) == true)
                {
                    $_SESSION['verified_ed_math'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as BSED-MATH Teacher";
                    header('Location: registrar.php');
                    exit();

                }
            elseif(isset($claims['registrar']) == true)
                {
                    $_SESSION['verified_registrar'] = true;
                    $_SESSION['verified_bscs'] = true;
                    $_SESSION['verified_abreed'] = true;
                    $_SESSION['verified_beed'] = true;
                    $_SESSION['verified_bsoa'] = true;
                    $_SESSION['verified_bsba'] = true;
                    $_SESSION['verified_ed_eng'] = true;
                    $_SESSION['verified_ed_sci'] = true;
                    $_SESSION['verified_ed_math'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully as Registrar.";
                    header('Location: registrar.php');
                    exit();

                }
            elseif($claims == null)
                {
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    $_SESSION['status'] = "Logged in successfully.";
                    header('Location: registrar.php');
                    exit();
                }

        
        }
        catch (InvalidToken $e)
        {
            echo 'The token is invalid: '.$e->getMessage();
        }
        catch (\InvalidArgumentException $e)
        {
            echo 'The token could not be parsed: '.$e->getMessage();
        }
    } 

    catch(Exception $e)
    {
        $_SESSION['status'] = "Wrong Password";
        header('Location: login.php');
        exit();
    }
}
    catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        // echo $e->getMessage();
        $_SESSION['status'] = "Invalid Email Address";
        header('Location: login.php');
        exit();
    }
}


else
{
    $_SESSION = "Not allowed";
    header('Location: login.php');
    exit();
}

?>