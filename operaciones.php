<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $val1=!empty($_POST['val1']) ? $_POST['val1'] : "0";
    $val2=!empty($_POST['val2']) ? $_POST['val2'] : "0";
    $operacion=$_POST['operacion'];

    function suma($a, $b){
        return $a + $b;
    }
    function resta($a, $b){
        return $a - $b;
    }
    function multiplicacion($a, $b){
        return $a * $b;
    }
    function divicion($a, $b){
        if($b==0){
            echo "no se puede dividir entre 0 ";
        }
        else{
            return $a / $b;
        }
    }

    switch($operacion){
        case 'suma':
            echo "el resultado es:". suma($val1, $val2);
            break;
        case 'resta':
            echo "el resultado es:". resta($val1, $val2);
            break;
        case 'multi':
            echo "el resultado es:". multiplicacion($val1, $val2);
            break;
        case 'div':
            echo "el resultado es: ". divicion($val1, $val2);
            break;
        default:
            echo "opcion no valida";
            break;
    }
    }
?>