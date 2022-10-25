<?php

$num1 = $_POST['dato1'];
$num2 = $_POST['dato2'];
$num3 = $_POST['dato3'];


echo "El nombre del estudiante es:".$num1;
echo "<br>";
echo "La asignacion es:".$num2;
echo "<br>";

if($num3<7)
{
    echo "Reprobado";
}
if($num3>=7)
{
    echo "Aprobado";
}


?>