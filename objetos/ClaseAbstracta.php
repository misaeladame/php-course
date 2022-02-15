<?php

abstract class ClaseAbstracta
{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);
    


    public function imprimir() {
        echo $this->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta 
{
    
    protected function getValor() {
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.') {
        return $prefijo . " Clase conreta";
    }
}

$clase1 = new ClaseConcreta;

$clase1->imprimir();
echo "<br>";

echo $clase1->valorPrefijo("XDDD");