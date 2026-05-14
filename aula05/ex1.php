<?php

$produtos = [
    [
        "nome" => "Rato estranho",
        "preco" => 50,
        "quantidade" => 10
    ],
    [
        "nome" => "Eamon",
        "preco" => 0,
        "quantidade" => 5
    ],
    [
        "nome" => "Cavalo",
        "preco" => 1900,
        "quantidade" => 2
    ]
];

$json = json_encode($produtos);

file_put_contents("produtos.json", $json);

echo "Arquivo criado com sucesso!";

?>