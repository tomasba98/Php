<?php
session_start();

$user = $_POST["user"];
$passw = $_POST["password"];
$content;

if ($user == "fcytuader" && $passw == "programacionavanzada") {
    $content = true;
    $_SESSION['user'] = $user;
} else {
    $content = false;
}

$_SESSION['login_message'] = $content;
header("Location: inicio.php");
exit();
?>
