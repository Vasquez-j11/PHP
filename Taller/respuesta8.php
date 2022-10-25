<?php

$sexo = $_POST['dato1'];
$edad = $_POST['dato2'];


if($sexo =="M"){
    if($edad>=63){
        echo "USTED SE PUEDE JUBILAR";
    }
    else{
        echo"USTED NO SE PUEDE JUBILAR";
    }
}elseif($sexo =="F"){
    if($edad>54){
        echo "USTED SE PUEDE JUBILAR";
    }
    else{
        echo "USTED NO SE PUEDE JUBILAR";
    }
}



?>