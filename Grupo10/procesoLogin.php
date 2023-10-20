<?php
session_start();

$user = $_POST['user'];
$passw = $_POST['password'];
$content;


if (!empty($_POST['rand_code']) )
        {
            if ( $_POST['rand_code']==$_SESSION['rand_code'] )
            {
                if ($user == "user" && $passw == "user") {
                    $content = true;
                    $_SESSION['user'] = $user;
                } else {
                    $content = false;
                }

            }

        }

$_SESSION['login_message'] = $content;
header("Location: index.php");
exit();
?>
