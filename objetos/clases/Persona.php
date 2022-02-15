<?php

class Persona
{
    private $nombre, $apellido, $edad;

    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = $edad;

    }
    
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
    
}
