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

    $frutas = array('a'=>'Anana', 'b'=>'Banana', 'm'=>'Manzana');
    print_r ($frutas);

  


?>