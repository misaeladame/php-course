<?php

    $base = 5;
    $exp = 4;

    $resultado = 2;

    for ($i=1; $i <= $exp; $i++) { 
        $resultado *= $base;
    }

    echo "El valor de $base elevado a la $exp es: $resultado";

    echo "<br><br><br>";

    //*
    //**
    //***

    $filas = 10;

    for ($i=1; $i <=$filas ; $i++) { 
        for ($j=1; $j <=$i ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }

    echo "<br><br><br>";

    $nombres = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

    echo $nombres[0] . "<br>";
    echo $nombres[1] . "<br>";

    echo "<br><br>";

    foreach ($nombres as $indice => $nombre) {
        echo $nombre . " se encontraba en el índice $indice <br>";
    }
?>