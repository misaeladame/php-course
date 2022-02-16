<?php

// final class Hogar
class Hogar {
    public $color, $seguridad;

    // final public function saludar() {
    //     echo "Bienvenido a mi hogar";
    // }

    public function saludar() {
        echo "Bienvenido a mi hogar";
    }

}

class Departamento extends Hogar {
    public function saludar() {
        echo "Bienvenido a mi departamento";
    }
}

$departamento = new Departamento;
$departamento->saludar();