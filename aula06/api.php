<?php

header("Content-Type: application/json");

$arquivo = "usuarios.json";

$json = file_get_contents($arquivo);

$usuarios = json_decode($json, true);

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {

    case "GET":

        echo json_encode($usuarios);

        break;

    case "POST":

        $dados = json_decode(file_get_contents("php://input"), true);

        $novoUsuario = [
            "id" => count($usuarios) + 1,
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];

        $usuarios[] = $novoUsuario;

        file_put_contents($arquivo, json_encode($usuarios));

        echo json_encode([
            "mensagem" => "Usuário adicionado com sucesso!"
        ]);

        break;

    default:

        echo json_encode([
            "erro" => "Método não permitido"
        ]);

}

?>