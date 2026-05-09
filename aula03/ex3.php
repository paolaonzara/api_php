<?php

function numero($a){
    return $a%2;
}
$resultado = numero(3);
if($resultado==0){
    echo "Numero Par.";
} else{
    echo "Numero Impar.";
}




?>