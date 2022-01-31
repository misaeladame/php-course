<?php
    // 9! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 0



    function factorial($n) {
        $resultado = 1;

        for ($i=1; $i <=$n ; $i++) { 
            $resultado = $resultado * $i;
        }
    
        echo "El factorial de $n es: " . $resultado . "<br><br>";    
    }


    function factoriall($n) {
        $resultado = 1;

        for ($i=1; $i <=$n ; $i++) { 
            $resultado = $resultado * $i;
        }
    
        return $resultado;
    }


    factorial(5);
    $resultado = factoriall(6);
    echo "El factorial de 6 es: $resultado";
?>