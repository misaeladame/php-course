<?php

class Humano {

    public static $nombre = "Misael Adame";

    public static function saludar() {
        echo "Hola mundo";
    }

    // public function saludoPersonalizado() {
    //     echo "Hola " . $this->nombre;
    // }

    public function saludoPersonalizado() {
        echo "Hola " . self::$nombre;
    }
}

class Mexicano extends Humano {
    public function saludoMexicano() {
        echo "Hola desde México wey, " . parent::$nombre;
    }
}

// No es necesario instanciar el objeto
Humano::saludar();
echo "<br>";

echo Humano::$nombre;


// $humano = new Humano;
// $humano->saludar();

echo "<br>";

$humano = new Humano;
$humano->saludoPersonalizado();
echo "<br>";

$mexicano = new Mexicano;
$mexicano->saludoMexicano();