<?php 
    session_start(); 

    if (isset($_SESSION['login_message'])) {
        $content = $_SESSION['login_message'];    
        unset($_SESSION['login_message']);
    }

    // Comprueba si el usuario está logeado
    $estaLogeado = isset($_SESSION['login_message']); // Cambia 'usuario' por el nombre de tu variable de sesión para el usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>        
    <?php require_once './views/header.php'?>

    <div class="container mt-5">
        <?php if (!$estaLogeado) : ?>
            <!-- Mostrar el formulario de inicio de sesión si no está logeado -->
            <h2>Iniciar Sesión</h2>
            <form action="./procesoLogin.php" method="post">
                <div class="form-group">
                    <label for="user">User:</label>
                    <input type="text" class="form-control" name="user" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        <?php else : ?>
            <!-- Mostrar un mensaje personalizado si está logeado -->
            <h2>Bienvenido, Usuario</h2>
            <!-- Puedes personalizar el mensaje y mostrar contenido adicional aquí -->
        <?php endif; ?>

        <?php
        if (isset($content)) {
            if ($content == "Logeo correcto") {
                echo '<div class="alert alert-success mt-3">' . $content . '</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">' . $content . '</div>';
            }
        }
        ?>
    </div>
    </br>

    <?php require_once './views/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>