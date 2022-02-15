<?php

require_once('clases/Persona.php');

// $persona1 = new Persona("José Misael", "Adame Sandoval", 22);


// // $persona1->nombre = "Misael";
// // $persona1->apellido = "Adame";
// // $persona1->edad = 22;

// echo "El nombre de la persona 1 es: " . $persona1->getNombre();
// echo "<br>";

// $persona1->setNombre("Misael");
// // $persona1->apellido = "Adame Sandoval";
// // $persona1->edad = 22;


// $persona2 = new Persona("Luis Alberto", "García Aspe", 50);

// // $persona2->setNombre("Luis Alberto");
// // $persona2->apellido = "García Aspe";
// // $persona2->edad = 50;

// // var_dump($persona1);

// // echo "El nombre de la persona 1 es: " . $persona1->nombre;
// // echo "<br>";
// // echo "El nombre de la persona 2 es: " . $persona2->nombre;

// echo "El nombre de la persona 1 es: " . $persona1->getNombre();
// echo "<br>";
// echo "El nombre de la persona 2 es: " . $persona2->getNombre();

$peruano = new Peruano;
$peruano->setNombre("Victor Hernán");

$chileno = new Chileno;

$chileno->setApellidos("Adame", "Sandoval");

echo $chileno->getApellidos();
echo "<br>";

$peruano = new Peruano;

$peruano->setApellidos("Adame", "Sandoval");

echo "<br>";

echo $peruano->getApellidos();

echo "<br>";

var_dump($peruano);