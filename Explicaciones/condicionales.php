<?php
    /* Operadores de comparación
        == igualdad
        < menor que
        > mayor que
        <= menor o igual que
        >= mayor o igual que

        Operadores de anidamiento
        && operador y
        or operador 0
     */

    $n1 = 15;
    $n2 = 5;
    $n3 = 17;

    /* if($n1==$n2){
        echo "Los valores son iguales";
    }else{
        echo "los valores son diferentes";
    };

    echo "<br>";
    echo "<br>";

    if($n1<$n2){
        echo $n1." es menor que ".$n2;
    }else{
        echo $n2." es menor que ".$n1;
    }; */


    if ($n1>$n2) {
        if($n1>$n3){
            echo $n1." es mayor que ".$n2." y ".$n3;
        }else{
            echo $n3." es mayor que ".$n1." y ".$n2;
        }
    }
?>


