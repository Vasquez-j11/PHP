<?php

$num1 = $_POST['dato1'];
$num2 = $_POST['dato2'];

if($num1>$num2){
    echo  " El hermano mayor tiene " .$num1;
}else{
    echo  " El hermano mayor tiene " .$num2;
}
$resta = $num1-$num2;
echo "<br>";
echo "<br>";
echo "la diferencia de edad es : ".$resta;

?>