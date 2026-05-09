<?php

function fatorial($numero) {

    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo fatorial(5);

?>