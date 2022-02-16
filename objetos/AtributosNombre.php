<?php

class Humanx {
    // public $nombre, $apellido_materno, $apellido_paterno, $dni;

    public function __construct(public $nombre, public $apellido_paterno, public $apellido_materno, public $dni) 
    {
        // $this->nombre = $nombre;
        // $this->apellido_paterno = $apellido_paterno;
        // $this->apellido_materno = $apellido_materno;
        // $this->dni = $dni;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellido_materno, $apellido_paterno) {
        $this->apellido_materno = $apellido_materno;
        $this->apellido_paterno = $apellido_paterno;
        return $this;

    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function imprimirDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido materno: " . $this->apellido_materno . "<br>";
        echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
        echo "DNI: " . $this->dni . "<br>";
    }
}


$humano = new Humanx("Erick", "Guerrero", "Palacios", "12345678");

$humano->imprimirDatos();
echo "<br>";

// $humano->setNombre('Misael');
// $humano->setApellidos('Adame', 'Sandoval');
// $humano->setDni('87654321');
// $humano->imprimirDatos();

$humano->setNombre('Misael')
       ->setApellidos('Adame', 'Sandoval')
       ->setDni('87654321')
       ->imprimirDatos();

echo "<br>";

$humano = new Humanx(nombre: "Arturo", apellido_materno: "Uribe", apellido_paterno: "Galindo", dni: "12345678");

$humano->imprimirDatos();
echo "<br>";
