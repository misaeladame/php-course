<?php
    $i = 1;

    # Bucle infinito
    /*
    while ($i <= 10) {
        echo "Hola mundo <br>";
    }
    */

    while ($i <= 10) {
        echo "Hola mundo $i <br>";
        $i++;
    }

    echo "Has salido del bucle";

    
    
    echo "<br><br><br>";

    $i = 10;


    while ($i < 10) {
        echo "Hola mundo $i <br>";
        $i++;
    }

    echo "Has salido del bucle";

    echo "<br><br><br>";

    $i = 8;

    do {
        echo "Hola mundo <br>";
        $i++;
    } while ($i < 10);

    echo "Has salido del bucle";


    echo "<br><br><br>";



    $base = 5;
    $exp = 4;

    $resultado = 1;

    $i = 1;

    // 2 * 2 * 2 * 2 * 2

    while ($i <= $exp) {
        $resultado = $resultado * $base;
        $i++;
    }
    echo "El valor de $base elevado a la $exp es: $resultado";
?>