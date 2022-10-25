<?php

$num1 = $_POST['dato1'];

if($num1>=20000){
    $resultado = $num1- ($num1*0.2);
    echo "El precio a pagar es: ".$resultado." con  un descuento del 20%";

} else{
    echo "El precio a pagar es: ".$num1." sin descuento del 20%";
}

?>