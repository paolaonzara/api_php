<?php

header("Content-Type: application/json");

$arquivo = "usuarios.json";

$json = file_get_contents($arquivo);

$usuarios = json_decode($json, true);

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {

    case "GET":

        if (isset($_GET["id"])) {

            $id = $_GET["id"];

            $encontrado = false;

            foreach ($usuarios as $usuario) {

                if ($usuario["id"] == $id) {

                    echo json_encode($usuario);

                    $encontrado = true;

                }

            }

            if ($encontrado == false) {

                echo json_encode([
                    "erro" => "Usuário não encontrado"
                ]);

            }

        } else {

            echo json_encode($usuarios);

        }

        break;

    case "POST":

        $dados = json_decode(file_get_contents("php://input"), true);

        $maiorId = 0;

        foreach ($usuarios as $usuario) {

            if ($usuario["id"] > $maiorId) {

                $maiorId = $usuario["id"];

            }

        }

        $novoUsuario = [
            "id" => $maiorId + 1,
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];

        $usuarios[] = $novoUsuario;

        file_put_contents($arquivo, json_encode($usuarios));

        echo json_encode([
            "mensagem" => "Usuário adicionado"
        ]);

        break;

}
?>