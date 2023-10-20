<?php

$mysqli = new mysqli('127.0.0.1','user','','prueba');


$sql = 'SELECT * FROM tabla1';


if ($resultado = $mysqli->query($sql)){
    if($resultado->num_rows > 0){

        while($filas = $resultado->fetch_assoc()){
               print_r($filas);
               echo"<hr>"; 
        }
        
    }
}

$mysqli->close();

?> 