<?php
    $array = [10, 13, 15, 20];

    echo $array[3] . "<br>";
    //echo $array[4];

    $array[] = 17;
    //$array[4] = 17;

    echo $array[4] . "<br>";

    $array1[] = 10; 
    $array1[] = 13; 
    $array1[] = 15; 
    $array1[] = 20; 
    $array1[] = 17;
    
    echo $array1[4] . "<br>";

    $array = [10, "Misael", 15, 20, false];

    echo $array[0] . "<br>";
    echo $array[1] . "<br>";

    $datos = [
        'nombre' => 'José Misael Adame',
        'email' => 'misael_adame@protonmail.com',
        'celular' => '45645646'
    ];

    echo $datos['nombre'] . "<br>";
    echo $datos['email'] . "<br>";

?>