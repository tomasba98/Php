<?php
    echo '<strong>Muestro los datos mediante el arreglo $_GET</strong>';
    echo "<br>";
    if (!empty($_GET) )
    {
        foreach( $_GET as $clave=>$valor )
        {
            echo $clave;
            echo "=>";
            echo $valor;
            echo "<br>";
        }

    }

    echo "<hr>";

    echo '<strong>Muestro los datos mediante el arreglo $_POST</strong>';
    echo "<br>";
    if (!empty($_POST) )
    {
        foreach( $_POST as $clave=>$valor )
        {
            echo $clave;
            echo "=>";
            echo $valor;
            echo "<br>";
        }

    }

    echo "<hr>";

    echo '<strong>Muestro los datos mediante el arreglo $_REQUEST</strong>';
    echo "<br>";
    
    if (!empty($_REQUEST) )
    {
        foreach( $_REQUEST as $clave=>$valor )
        {
            echo $clave;
            echo "=>";
            echo $valor;
            echo "<br>";
        }

    }


?>