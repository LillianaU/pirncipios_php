<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Ejemplo condicionales</title>

</head>

<body>
<?php
/*este es un ejemplo de if anidados validando varias condiciones
https://www.php.net/manual/es/control-structures.elseif.php
operadores logicos:

*/
$edad = 51;
echo "<br>";
if ($edad>=18 && $edad<=50) {
    echo "Eres mayor de edad";
}elseif($edad>=50){
    echo "Eres adulto mayo  ";
}else{
    echo"valor no identiicado";
}

?>
</body>

</html>