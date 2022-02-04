<?php
    $cadena = "aeiou";

    echo $cadena[1] . "<br>";

    echo strlen($cadena) . "<br>";

    $cadena = "aéiou";
    echo strlen($cadena) . "<br>";
    echo mb_strlen($cadena) . "<br>";

    $cadena = "aeiou";

    echo strpos($cadena, 'i') . "<br>";

    $cadena = "aeioui";

    echo strrpos($cadena, 'i') . "<br>";

    $cadena = "Hola mundo como estás";

    echo str_contains($cadena, 'mundo') ? 'Si se encuentra' . "<br>" : 'No se encuentra' . "<br>";

    echo str_starts_with($cadena, 'mundo') ? 'Si se encuentra' . "<br>" : 'No se encuentra' . "<br>";
    echo str_starts_with($cadena, 'Hola') ? 'Si se encuentra' . "<br>" : 'No se encuentra' . "<br>";

    echo str_ends_with($cadena, 'mundo') ? 'Si se encuentra' . "<br>" : 'No se encuentra' . "<br>";
    echo str_ends_with($cadena, 'estás') ? 'Si se encuentra' . "<br>" : 'No se encuentra' . "<br>";

    $cadena1 = "Prueba";
    $cadena2 = "Prueba";

    if(strcmp($cadena1, $cadena2) == 0) {
        echo "Las dos cadenas son iguales <br>";
    } else {
        echo "Las cadenas son diferentes <br>";
    }

    $cadena1 = "Prueba";
    $cadena2 = "prueba";

    if(strcmp($cadena1, $cadena2) == 0) {
        echo "Las dos cadenas son iguales <br>";
    } else {
        echo "Las cadenas son diferentes <br>";
    }

    if(strcasecmp($cadena1, $cadena2) == 0) {
        echo "Las dos cadenas son iguales <br>";
    } else {
        echo "Las cadenas son diferentes <br>";
    }

    $cadena = "Hola mundo";

    echo substr($cadena, 1, 6) . "<br>";
    echo substr($cadena, -2) . "<br>";
    echo substr($cadena, -5, 3) . "<br>";


    echo str_replace("mundo", "mi amor", $cadena) . "<br>";

    echo strtolower($cadena) . "<br>";
    echo strtoupper($cadena) . "<br>";

    $cadena = "hoola mundo";

    echo ucfirst($cadena) . "<br>";
    echo ucwords($cadena) . "<br>";
    

?>