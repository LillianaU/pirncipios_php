<?php
if(isset($_POST['valor1'])&& isset($_POST['valor2'])){
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$sumar = $valor1 + $valor2;
echo "la suma es $sumar";
}
?>