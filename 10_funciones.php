<?php
function saludar ($nombre){
    echo "hola " .$nombre. "<br>";

}

function sumar($a,$b) {
    return $a + $b;
}

saludar("jose");
echo sumar(1,2);