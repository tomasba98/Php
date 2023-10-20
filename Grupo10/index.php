<?php
session_start();
$pageTitle = "Página de Inicio";

$content = null;

if (isset($_SESSION['login_message'])) {
    $content = $_SESSION['login_message'];
    unset($_SESSION['login_message']);
}

$token = rand(5, 1500);
$_SESSION ['token'] = $token;

$loggedIn = isset($_SESSION['user']);
?>

<?php require_once './views/header.php' ?>

<?php if (!$loggedIn || !$content) { ?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <h2 class="text-center text-white">Iniciar Sesión</h2>
            <form action="./procesoLogin.php" method="post">
                <div class="mb-3">
                    <label for="user" class="form-label text-white">Usuario</label>
                    <input type="text" class="form-control" name="user" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div class=" mb-3">
                <br>
                     <img src="./rdnimg.php" >
                     <input type="text" name="rand_code" value="" required>
                </div>

                <br>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </div>
<?php } else { ?>
    <div class="mt-5">
        <h2 class="text-center text-white">Bienvenido, <?php echo $_SESSION['user']; ?> !</h2>
    </div>
<?php } ?>

<?php
if (isset($content)) {
    $alertClass = $content ? 'alert-success' : 'alert-danger';
    $message = $content ? 'Logeo Correcto' : 'Logeo Incorrecto';
    echo '<div class="alert ' . $alertClass . ' mt-3 text-center">' . $message . '</div>';
}
?>

<?php require_once './views/footer.php' ?>
