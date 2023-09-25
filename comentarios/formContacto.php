<?php require_once 'views/header.php'?>
<title>Formulario datos</title>
<link rel="stylesheet" href="./style.css">


<body>
    <h1>Formulario de contacto</h1>
    <form action="formContacto.php" method="GET">
        Nombre: <input type="text" name ="nombre" >
      </br>
        Asunto: <input type="text" name ="asunto" >
      </br>
        Correo: <input type="text" name ="correo" >
      </br>
        Comentario: <input type="text" name ="coment" >
      </br>
        <input type="submit" value="restablecer">
        <input type="submit" value="enviar">

    </form>
</body>

<?php
    $array = $_GET['nombre'];
    print_r($array);    
?>

<?php require_once 'views/footer.php'?>