<?php require_once './head.html'; ?>

<?php  
    //comentario

    $var1 = "string";
    $var2 = 2;
    $precio = 2.50;
    
    echo "<h3>Variables</h3>";
    echo "Hello numero{$var2}<br>";
    echo "la pizza sale \${$precio}<br>";

    echo "<h3>Contador</h3>";
    for ($i = 0; $i <= 10; $i++) {
    if ($i > 3 && $i <= 6) {
    continue;
    }
    echo "Numero: ".$i."<br>";
    }

    echo "<h3>Array</h3>";
    $frutas = array('a'=>'Anana', 'b'=>'Banana', 'm'=>'Manzana');
    print_r ($frutas);

    echo "<h3>GET</h3>";
    print_r($_GET);
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];      

?>