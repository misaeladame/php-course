<?php

    $base = 5;
    $exp = 4;

    $resultado = 1;

    $i = 1;

    while ($i <= $exp) {
        $resultado *= $base;
        $i++;
    }
    
    echo "El valor de $base elevado a la $exp es: $resultado"

?>