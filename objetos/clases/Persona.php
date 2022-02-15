<?php

class Persona
{
    public $nombre, $edad;
    public $apellido1, $apellido2;

    // public function __construct($nombre, $apellido, $edad)
    // {
    //     $this->nombre = strtolower($nombre);
    //     $this->apellido = strtolower($apellido);
    //     $this->edad = $edad;

    // }
    
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }

    public function setApellidos($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getApellidos() {
        return $this->apellido1 . " " . $this->apellido2;
    }

}

class Peruano extends Persona {
    public $departamento, $ciudad;

    public function setApellidos($apellido1, $apellido2)
    {
        parent::setApellidos($apellido1, $apellido2);

        echo "Los apellidos se asignaron con éxito";
    }
}

class Chileno extends Persona {
    public $comuna, $region;

    public function setApellidos($apellido1, $apellido2) {
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1;
    }

}
