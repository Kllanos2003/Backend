<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Diguite la info</h1>

    <form action="04_metodo_post.php" method="get">
        nombre:
        <input type = "text" name="nombre"/>  
        <br>  
        <input type="date" name="fecha id=">
        <br> 
        <input type="submit" value="enviar">
    </form>

    <h2>La informacion enviada es: </h2>
    <?php
        print_r($_POST)
    ?>
</body>
</html>