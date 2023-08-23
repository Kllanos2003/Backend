<?php

$nombres=["kevin", "fabian", "anna"];
echo "<pre>";
print_r($nombres);
echo "</pre>";

$materias=array("mathe","español","fisica");
echo "<pre>";
print_r($materias);
echo "</pre>";

//agregar items
$nombres[]="Predo";
echo "<pre>";
print_r($nombres);
echo "</pre>";

//total de elementos

echo "El numero total de nombres es:". count($nombres). "<br>";

//acede a los nombre 
echo "el nombre indice 2 es: ". $nombres[2]."<br>";
echo "el ultimo nombre: ".end($nombres)."<br>";

//ordenar alfaveticamente
sort($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";

//eliminar ultimo elemento
array_pop($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";

//eliminar indice
unset($nombres[1]);
echo "<pre>";
print_r($nombres);
echo "</pre>";