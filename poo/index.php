<?php
require_once "Persona.php";
require_once "Empleado.php";

echo "<h1>PROGRAMACION ORIENTADA A OBJETOS</h1>";

echo "<h2>INSTANCIA DE PERSONA</h2>";

$persona = new Persona("anna",25,"femenino");

//acceder metodos de esa personaX
echo "Nombre: ". $persona-> getNombre(). ", Edad: " . $persona->getEdad(). ", Genero: " .$persona ->getGenero() . "<br>";

$empleado = new Empleado("Fabian",24,"Masculino","E001",50000);
echo "Numero: " . $empleado->getNumeroEmpleado();
$empleado-> mostarInformacion();