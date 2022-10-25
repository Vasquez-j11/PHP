<?php

$num1 = $_POST['dato1'];
$num2 = $_POST['dato2'];
$num3 = $_POST['dato3'];
$x = $num1 * 2000;
$x2 = $num2 * 5000;
$x3 = $num3 * 500;
$resultado = ($num1 *2000) + ($num2 *5000) + ($num3 *500)  ;

echo "El pago por los volantes es:  ".$x;
echo "<br>";
echo "<br>";
echo "El pago por los posters es:".$x2;
echo "<br>";
echo "<br>";
echo "El pago por los tdepres:".$x3;
echo "<br>";
echo "<br>";


echo "El pago total es:".$resultado;

?>