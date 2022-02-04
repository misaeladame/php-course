<?php 
    $data = [
        [
            'nombre' => 'José Misael Adame',
            'email' => 'misael_adame@protonmail.com',
            'celular' => '45645646',
            'direccion' => [
                'pais' => 'México',
                'ciudad' => 'Torreón'
            ]
        ],

        [
            'nombre' => 'Luis Romo',
            'email' => 'luisito@gmail.com',
            'celular' => '5646545644'
        ],

        [
            'nombre' => 'Hirving Lozano',
            'email' => 'chuky@outlook.com',
            'celular' => '984125446'
        ],
    ];

    echo $data[0]['nombre'] . "<br>";
    echo $data[1]['nombre'] . "<br>";
    echo $data[2]['nombre'] . "<br>";
    echo $data[1]['email'] . "<br>";
    echo $data[0]['direccion']['pais'] . "<br><br>";

    foreach ($data as $item) {
        echo $item['nombre'] . "<br>";
        echo $item['email'] . "<br>";
        echo $item['celular'] . "<br>";

        echo "<hr>";

    }
?>