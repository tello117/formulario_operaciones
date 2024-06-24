<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $val1=$_POST['val1'];
    $val2=$_POST['val2'];
    $operacion=$_POST['operacion'];

    switch($operacion){
        case 'suma':
            $resultado = $val1+$val2;
            echo "el resultado es:". $resultado;
            break;
        case 'resta':
            $resultado = $val1-$val2;
            echo "el resultado es:". $resultado;
            break;
        case 'multi':
            $resultado = $val1*$val2;
            echo "el resultado es:". $resultado;
            break;
        case 'div':
            $resultado = $val1/$val2;
            echo "el resultado es:". $resultado;
            break;
        default:
            echo "opcion no valida";
            break;
    }
    }
?>