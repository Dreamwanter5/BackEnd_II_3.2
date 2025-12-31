<?php

include_once("pessoa.php");
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$pessoa = new Pessoa($nome, $email, $telefone);

$_SESSION["pessoas"][] = $pessoa;

?>
<a href="index.html">Voltar</a><br>
<a href="pagina2.php"> Ir para exibição em Tabela</a>

