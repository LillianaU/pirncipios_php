<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*este comenta un parrafo*/
    // comenta una linea
    /* ya sabemos por medio de la documentacion de  php las diferentes operacioes matematicas que podemos realizar con php.
    adiciona tambien las fuciones arimeticas que trae php para formular y calculos mas avanzados*/
    echo "hola mundo";
    echo "<br>";
    echo "¿como esta?";
    $suma=4+4;
    echo "<br>";
    echo " este es el resultado de la suma de dos valores $suma";
    ?>
    <h1>ejemplos mod </h1>
    <?php
    echo (5 % 3)."\n";           // muestra 2
    echo "<br>";
    echo (5 % -3)."\n";          // muestra 2
    echo "<br>";
    echo (-5 % 3)."\n";          // muestra -2
    echo "<br>";
    echo (-5 % -3)."\n";         // muestra -2
    echo "<br>";
    $pi_1=pi();
    echo " el numero pi es; $pi_1";
     echo "<br>";
    echo " el numero pi es; ",pi();
    ?>
</body>
</html>