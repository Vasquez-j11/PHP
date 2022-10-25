<?php
$num1 = $_POST['dato1'];

echo "Total Capital ingresado: ".$num1;
echo "<br>";
echo "<br>";

if($num1<500){
    $resultado1 = $num1 + ($num1*0.2);
    echo " El valor del capital mas los intereses es : ".$resultado1;
}elseif($num1 >=500){
    $resultado2 = $num1 + ($num1*0.45);
    echo " El valor del capital mas los intereses es : ".$resultado2;

}elseif($num1<1500){
    $resultado3 = $num1 + ($num1*0.45);
    echo " El valor del capital mas los intereses es : ".$resultado3;
}elseif($num1<=1500){
    $resultado4 = $num1 + ($num1*0.7);
    echo " El valor del capital mas los intereses es : ".$resultado4;
}


?>