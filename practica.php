<?php require_once 'includes/head.html'; ?>

<?php  
    //comentario

    $var1 = "string";
    $var2 = 2;
    $precio = 2.50;

    echo $var1;
    
    echo "<br>Hello numero{$var2}<br>";
    echo "la pizza sale \${$precio}<br>";

    
    for ($i = 0; $i <= 10; $i++) {
    if ($i > 3 && $i <= 6) {
    continue;
    }
    echo "Numero: ".$i."<br>";
    }

    echo "<br>";

    $frutas = array('a'=>'Anana', 'b'=>'Banana', 'm'=>'Manzana');
    //var_dump ($frutas);
    
    rsort($frutas);

    foreach($frutas as $f){
        echo "La fruta :{$f}<br>";
    }

    echo "<br>";

    $persona = array(
        'tipo_documento' => 'DNI',
        'numero_documento' => '22122122',
        'apellidos' => 'Torvalds',
        'nombres' => 'Linus',
        'domicilio' => 'San Martín 200',
        'telefono' => '4333093',
        'edad' => 42);
        foreach ($persona as $dato_persona) {
        echo $dato_persona."<br />";
        }
        
    echo "<br>";

    $fechaHoy = date('Y-m-d');
    print_r($fechaHoy);
    echo "<br>";
    $fecha_array = explode("-",$fechaHoy);
    
    $fechaNueva = $fecha_array[2]."/".$fecha_array[1]."/".$fecha_array[0];
    echo $fechaNueva."<br>";

    $cadena = "Programación Avanzada - Taller de PHP";
    echo $cadena;
    echo "</br>";
    echo trim($cadena,"P");
    echo "</br>";
    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str,"Hed!");
?>