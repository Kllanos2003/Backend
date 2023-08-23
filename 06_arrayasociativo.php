<?php
/*
$edades=[
    "ana" =>10,
    "juan" => 32,
    "maria" => 25,
    "carlos" => 30,
    "luis" => 22,


]; */

$edades = array(
    "ana" => 10,
    "juan" =>32,
    "maria" => 25,
    "carlos" => 30,
    "luis" => 22
);

echo "<pre>";
print_r($edades);
echo "</pre>";

//agregar items
$edades["laura"] = 23;
echo "<pre>";
print_r($edades);
echo "</pre>";

//contar

echo "El numero total de edades es:". count($edades). "<br>";

//end
echo "el ultimo es: ". end($edades);

array_pop($edades);
echo "<pre>";
print_r($edades);
echo "</pre>";

//eliminar un elemento
unset($edades["ana"]);
echo "<pre>";
print_r($edades);
echo "</pre>";