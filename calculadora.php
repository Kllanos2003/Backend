<!DOCTYPE html>
<html>
<head>
    <title>CALCULADORA</title>
</head>
<body>
    <form method="post" action="calculadora.php">
        <input type="text" name="numero1">
        <select name="opciones">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
</select>
<input type="text" name="numero2"><br>

<input type="submit" name="calcular" value="Calcular">

</form>
    
</body>
</html>

<?php

include("clase.php");

if(isset($_REQUEST["calcular"])){

    $n1=$_REQUEST["numero1"];
    $n2=$_REQUEST["numero2"];
    $op=$_REQUEST["opciones"];
    switch($op){

        case 0:echo "numero1 + numero2 =" .matematica::sumar($n1,$n2);break;
        case 1:echo "numero1 - numero2 =" .matematica::restar($n1,$n2);break;
        case 2:echo "numero1 * numero2 =" .matematica::multiplicar($n1,$n2);break;
        case 3:echo "numero1 / numero2 =" .matematica::dividir($n1,$n2);break;

    }

}


?>
