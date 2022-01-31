<?php

    $a = 3;

    /*
    if ($a == 1) {
        echo "Lunes <br>";
    } elseif ($a == 2) {
        echo "Martes <br>";   
    } elseif ($a == 3) {
        echo "Miercoles <br>";   
    } elseif ($a == 4) {
        echo "Jueves <br>";   
    } elseif ($a == 2) {
        echo "Viernes <br>";   
    } elseif ($a == 2) {
        echo "Sabado <br>";   
    } elseif ($a == 2) {
        echo "Domingo <br>";   
    } 
    */

    switch ($a) {
        case '1':
            echo "Lunes <br>";
            break;
        
        case '2':
            echo "Martes <br>";
            break;
        
        case '3':
            echo "Miercoles <br>";
            break;
        
        case '4':
            echo "Jueves <br>";
            break;
        
        case '5':
            echo "Viernes <br>";
            break;

        case '6':
            echo "Sabado <br>";
            break;

        case '7':
            echo "Domingo <br>";
            break;

        default:
            echo "El valor de la variable a no es un valor válido <br>";
            break;
    }

    echo match($a) {
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "Domingo",
        default => "El valor de la variable a no es un valor valido"
    };

?>