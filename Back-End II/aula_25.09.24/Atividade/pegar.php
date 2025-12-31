<?php

$pdo = new PDO("mysql:host=localhost:3306;dbname=produto","root","user")
$query = ("select * from produto");
$statement = $pdo->prepare($query);
$statement->execute();
$retorno = $statement->fetchAll(); 
var_dump($retorno);

// basicamente o que esse código faz seria pegar todos os itens de um banco de dados e exibir no site do usuário de forma organizada em tabela, agora se torna viável discutir como tratar esses dados e torná-los mais apresentáveis


?>