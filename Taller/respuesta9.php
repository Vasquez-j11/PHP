<?php

$num1 = $_POST['dato1'];
$num2 = $_POST['dato2'];
$num3 = $_POST['dato3'];
$num4 = $_POST['dato4'];
$num5 = $_POST['dato5'];


echo "El nombre del estudiante es :  ".$num1;
echo "<br>";
echo "<br>";
echo "La asignatura es:".$num2;
echo "<br>";
echo "<br>";

$resultado = ($num3 *0.3) + ($num4 *0.3) + ($num5 *0.4)  ;

if($resultado>=4.0){
    echo "APROBADO";
}
if($resultado<=4.0){
    echo "DESAPROBADO";
}
?>