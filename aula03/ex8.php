<?php

function gerarNumeros() {

    for ($i = 0; $i < 10; $i++) {
        echo rand(1, 100) . "<br>";
    }

}

gerarNumeros();

?>