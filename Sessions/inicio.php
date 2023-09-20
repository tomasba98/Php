<?php require_once 'includes/form.html'; ?>

<?php 

    session_start();
    $token = rand(5,1500);

    $_SESSION['token']=$token; //guarda la variable

?>