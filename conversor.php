<?php

class conversor{
    public static function dolar($numero1){
        $dolar= $numero1*0.00024;
        return $dolar;
    }
    public static function euro($numero1){
        $euro= $numero1*0.00022;
        return $euro;
    }
    public static function rupia($numero1){
        $rupia= $numero1*0.020;
        return $rupia;
    }
   
}


?>