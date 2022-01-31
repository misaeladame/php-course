<?php

    for ($i=1; $i < 20; $i++) { 
        if ($i == 11) {
            break;
        }
        echo $i . "<br>";
    }

    echo "Saliste del bucle <br><br><br>";

    for ($i=1; $i < 20; $i++) { 
        if ($i == 7 || $i == 15) {
            continue;
        }
        echo $i . "<br>";
    }

    echo "Saliste del bucle <br><br><br>";

    for ($i=1; $i < 20; $i++) { 
        if ($i == 7 || $i == 15) {
            die();
            //exit();
        }
        echo $i . "<br>";
    }

    echo "Esta linea no se ejecutará";
?>