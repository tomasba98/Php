<?php
    session_start(); 

    $user = $_POST["user"];
    $passw = $_POST["password"];
    $content;

    if ($user == "fcytuader" && $passw == "programacionavanzada"){
        $content = "Logeo correcto";
    } else {
        $content = "Logeo incorrecto";  
    }

    $_SESSION['login_message'] = $content;
    header("Location: inicio.php");
    exit();
?>
