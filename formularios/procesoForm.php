<?php

    
  
    session_start();

    if (!empty($_POST) )
    {

        //---- PROCESO EL FORM-TOKEN ----

        if (!empty($_POST['token']) )
        {
            if ( $_POST['token']==$_SESSION['token'] )
            {
                echo "LOS DATOS PROVIENEN DE NUESTRO FORMULARIO CON TOKEN.";
                
                // proceso los datos restantes

                echo '<br>';
                echo 'Usuario: '.$_POST['usuario'];
                echo '<br>';
                echo 'Contraseña: '.$_POST['contrasenia'];

            }else{
                echo "LOS DATOS PROVIENEN DE OTRO ORIGEN.";
            }

        }


       
        //---- PROCESO EL FORM-TOKEN ----
        
        if (!empty($_POST['rand_code']) )
        {
            if ( $_POST['rand_code']==$_SESSION['rand_code'] )
            {
                echo "LOS DATOS PROVIENEN DE NUESTRO FORMULARIO CON CAPTCHA.";
                
                // proceso los datos restantes

                echo '<br>';
                echo 'Usuario: '.$_POST['usuario'];
                echo '<br>';
                echo 'Contraseña: '.$_POST['contrasenia'];

            }else{
                echo "LOS DATOS PROVIENEN DE OTRO ORIGEN.";
            }

        }



    }

   


?>