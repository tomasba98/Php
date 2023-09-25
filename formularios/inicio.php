<?php
      session_start();
?>

<?php require_once 'includes/head.php'; ?>

    <!-- Formulario de Personas -->

   <!-- Página de Inicio -->

    <br />
    
    <h4 class="text-center">Sistema Recursos Humanos</h4>
    
    <br />
    <!-- Opciones de Acceso -->
    <div class="row justify-content-lg-center">
      <div class="col col-lg-auto">
          <a href="inicio.php" type="button" class="btn btn-info">Inicio</a>
      </div>
      <div class="col col-lg-auto">
          <a href="formToken.php" type="button" class="btn btn-info">Formulario con Token</a>
      </div>
      <div class="col col-lg-auto">
          <a href="formCaptcha.php" type="button" class="btn btn-info">Formulario con Captcha</a>
      </div>
    </div>


<?php require_once 'includes/footer.php'; ?>
