<!DOCTYPE html>
<html>
<head>
    <title>CONVERSOR</title>
</head>
<body>
    <form method="post" action="moneda.php">
        <input type="text" name="numero1">
        <select name="opciones">
            <option value="0">Dolar</option>
            <option value="1">Euros</option>
            <option value="2">Rupia India</option>
</select>

<input type="submit" name="calcular" value="Calcular">

</form>
    
</body>
</html>

<?php

include("conversor.php");

if(isset($_REQUEST["calcular"])){

    $n1=$_REQUEST["numero1"];
    $op=$_REQUEST["opciones"];
    switch($op){

        case 0:echo "Dolares =" .conversor::dolar($n1);break;
        case 1:echo "Euros =" .conversor::euro($n1);break;
        case 2:echo "Rupias India =" .conversor::rupia($n1);break;

    }

}


?>