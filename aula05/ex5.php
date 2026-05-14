<?php

$json = file_get_contents("produtos.json");

$produtos = json_decode($json, true);

$nomeRemover = "Mouse";

foreach ($produtos as $indice => $produto) {

    if ($produto["nome"] == $nomeRemover) {

        unset($produtos[$indice]);

    }

}

$jsonAtualizado = json_encode($produtos);

file_put_contents("produtos.json", $jsonAtualizado);

echo "Produto removido!";

?>