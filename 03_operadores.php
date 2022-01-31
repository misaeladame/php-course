<?php
    $variable = 34;

    // Operador unario
    $variable_negativa = -$variable;

    echo $variable_negativa;

    echo "<br>";

    // Operadores aritmeticos
    $a = 2;
    $b = 5;
    $c = $a + $b;
    echo $c . "<br>";

    $d = $a - $b;
    echo $d . "<br>";

    $e = $a * $b;
    echo $e . "<br>";

    $f = $a / $b;
    echo $f . "<br>";
        
    $g = $a % $b;
    echo $g . "<br>";

    echo 4 * 5 - 6 + 4 * 2 + 1 * 0;
    echo "<br>";
    echo 4 * (5 - 6) + 4 * 2 + 1 * 0;

    echo "<br><br><br>";

    // Operadores de comparación
    $a = 10;
    $b = 10;

    echo $a == $b;
    echo "<br>";

    var_dump($a == $b);
    echo "<br>";

    var_dump($a <> $b);
    echo "<br>";

    var_dump($a != $b);
    echo "<br>";

    var_dump($a < $b);
    echo "<br>";

    var_dump($a > $b);
    echo "<br>";

    var_dump($a <= $b);
    echo "<br>";

    var_dump($a >= $b);
    echo "<br>";


    echo "<br><br><br><br>";

    // operadores lógicos
    $a = true;
    $b = true;
    
    var_dump($a && $b);
    echo "<br>";

    $a = "Hola mundo";
    $b = true;

    var_dump($a && $b);
    echo "<br>";

    $a = "";
    $b = 45;

    var_dump($a && $b);
    echo "<br>";

    $a = "Hello";
    $b = null;

    var_dump($a && $b);
    echo "<br><br><br>";

    $a = true;
    $b = true;

    var_dump($a || $b);
    echo "<br>";

    $a = true;
    $b = false;

    var_dump($a || $b);
    echo "<br>";

    $a = false;
    $b = false;

    var_dump($a || $b);
    echo "<br>";

    $a = 4;
    $b = 5;

    var_dump($a < $b || $b > 3);
    echo "<br>";

    $a = 4;
    $b = 1;

    var_dump($a < $b || $b > 3);
    echo "<br><br>";

    // Operadores de asignación combinadas
    $a = 10;

    $a++;
    echo $a . "<br>";

    $a--;
    echo $a . "<br>";

    --$a;
    echo $a . "<br>";

    $a = 10;
    $b = $a++;

    echo "El valor de a: $a <br>";
    echo "El valor de b: $b <br><br>";

    $a = 10;
    $b = ++$a;

    echo "El valor de a: $a <br>";
    echo "El valor de b: $b <br>";

    $a = 10;
    $b = --$a;

    echo "El valor de a: $a <br>";
    echo "El valor de b: $b <br><br>";

    $a = 10;
    $b = 5;

    //$a = $a + $b;
    $a += $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;

    //$a = $a - $b;
    $a -= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;

    //$a = $a * $b;
    $a *= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;

    //$a = $a / $b;
    $a /= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;

    //$a = $a % $b;
    $a %= $b;
    echo $a . "<br>";


?>