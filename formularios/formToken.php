<?php
      session_start();

      if ( !empty($_SESSION['rand_code']) )
      {
        unset($_SESSION['rand_code']);
      }

      $token = "";

      $a = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      
      $length = 20;
      
      for ($i = 0; $i < $length; $i++)
      {
        $token.= $a[rand(0, 61)];
      }

      $_SESSION['token']=$token;

?>

<?php require_once 'includes/head.php'; ?>

    <!-- Formulario de Personas -->

    <br />
      <h4 class="text-center">Sistema Recursos Humanos</h4>
    <br />
            
    <!-- Formulario de Personas  -->
               
    <form class="needs-validation" novalidate method="post" action="procesoForm.php">

          <input type="text" name="token" value="<?php echo $token;?>">

                  <div class="form-row">

                      <div class="col-md-6 mb-3">
                      
                        <label for="nombre">Usuario</label>

                        <input type="text" class="form-control" name="usuario" value="" required>

                      </div>
                      <div class="col-md-6 mb-3">
                      
                        <label for="apellido">Contraseña:</label>
                        
                        <input type="password" class="form-control" name="contrasenia" value="">

                      </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Enviar datos</button>

                  </form>

<?php require_once 'includes/footer.php'; ?>
