<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$sinal = $_POST["sinal"];

$usuario2 = new PDO("mysql:host=localhost: 3306;dbname=ExemploBanco", "root", "user");

$query = "insert into usuario2 (email, senha, tipo_usuario) values (:email, :senha, :sinal)";

$parametro = [
    ":email" => $email,
    ":senha" => $senha,
    ":sinal" => $sinal
];


$statement = $usuario2  -> prepare($query);
$statement -> execute($parametro);

if($usuario2){
    echo "logado <br>";
}

$ultimo2 = $usuario2->lastInsertId();
echo("Usuário de id $ultimo2 foi inserido com sucesso!");

?>