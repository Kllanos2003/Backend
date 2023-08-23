<?php

$calificaciones = [
    "ana" => [
        "matematicas" =>3,
        "historia" =>4,
        "ingles" =>1
    ],
    "juan" => [
        "matematicas" =>3.5,
        "historia" =>4.5,
        "ingles" =>1
    ],
    "pedro" => [
        "matematicas" =>1,
        "historia" =>1,
        "ingles" =>1
    ]
];

//count
echo "total calficaciones: " .count($calificaciones,COUNT_RECURSIVE). "<br>";
$calificaciones["ana"]["matematicas"]=5;

echo "<pre>";
print_r($calificaciones);
echo "</pre>";
