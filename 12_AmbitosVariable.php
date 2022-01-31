<?php

    $a = 5;

    function test() {
        $a = 3;
        echo $a;
    }

    test();
    echo "<br>";
    echo $a . "<br>";


    $b = 5;

    function testing() {
        global $b;
        $b = 10;
    }

    testing();
    echo $b. "<br><br>";

    
    $a = 5;
    $b = 10;

    function tested(&$n) {
        $n = $n + 10;
    }

    tested($a);
    tested($b);

    echo $a . "<br>";
    echo $b;







?>