<?php
$edad = 50;

if($edad>18){
    echo "es mayor de edad";
}else if($edad<18 && $edad >0){
    echo "es menor de edad";
}else{
    echo "EDAD INCORRECTA";
}