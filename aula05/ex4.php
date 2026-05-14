<?php

$email = "uii@gmail.com";

$json = file_get_contents("usuarios.json");

$usuarios = json_decode($json, true);

$encontrado = false;

foreach ($usuarios as $usuario) {

    if ($usuario["email"] == $email) {

        echo "Usuário encontrado! <br><br>";

        echo "ID: " . $usuario["id"] . "<br>";
        echo "Nome: " . $usuario["nome"] . "<br>";
        echo "Email: " . $usuario["email"];

        $encontrado = true;
    }

}

if ($encontrado == false) {
    echo "Usuário não encontrado.";
}

?>