<?php

class Persona
{
    public $nombre;

    public function saludo() {
        echo "Hola";
    }

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
}

trait Latinoamericano 
{
    public function saludoLatinoamericano() {
        echo "Este es un saludo latinoamericano";
    }
}

trait Europeo 
{
    public function saludoEuropeo() {
        echo "Este es un saludo europeo";
    }
}

trait hola {
    public function decirHola() {
        echo "Hola";
    }
}

trait mundo {
    public function decirMundo() {
        echo " mundo";
    }
}

trait A {
    public function saludon() {
        echo "Hola mundo desde el trait A";
    }
}

trait B {
    public function saludon() {
        echo "Hola nundo desde el trait B";
    }
}

trait C {
    protected function saludote() {
        echo "Hola mundo desde el trait C";
    }
}

trait D {
    public function decirHola1() {
        echo "Hola ";
    }
}

trait E {
    public function decirMundo1() {
        echo "mundo";
    }

    abstract public function saludar();
}

trait F {
    use D, E;

    public function saludar() {
        $this->decirHola1();
        $this->decirMundo1();
    }
}

class Peruano extends Persona 
{
    use Latinoamericano; 
    use hola, mundo;
    use A, B {
        A::saludon insteadOf B;
    }
    use C { saludote as public; }

    use F;

    public function saludo() {
        echo "Hola mundo desde la clase peruano";
    }
}

class Aleman extends Persona 
{
    use Europeo;
}

$peruano = new Peruano;

// Los traits no se pueden instanciar


$peruano->saludoLatinoamericano();

$peruano = new Peruano;
echo "<br>";
$peruano->saludo();

echo "<br>";

$peruano->decirHola();
$peruano->decirMundo();

echo "<br>";
$peruano->saludon();

echo "<br>";
$peruano->saludote();

echo "<br>";
$peruano->decirHola1();
$peruano->decirMundo1();


echo "<br>";
$peruano->saludar();