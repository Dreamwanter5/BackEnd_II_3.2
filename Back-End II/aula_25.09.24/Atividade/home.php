<?php
$nomeProduto = $_POST["nomeProduto"];
$descricao = $_POST["descricao"];
$tipo_categoria = $_POST["tipo_categoria"];
$precoProduto = $_POST["precoProduto"];
$quantidadeEstoque = $_POST["quantidadeEstoque"];

$produto = new PDO("mysql:host=localhost: 3306;dbname=produto", "root", "");
//Estrada
$query = "insert into produto (nome, descricao, categoria, preco, estoque) values (:nome, :descricao, :categoria, :preco, :estoque)";

$parametro = [
    ":nome" => $nomeProduto,
    ":descricao" => $descricao,
    ":categoria" => $tipo_categoria,
    ":preco" => $precoProduto,
    ":estoque" => $quantidadeEstoque
];

$statement = $produto -> prepare($query);

$statement -> execute($parametro);

if($produto){
    echo "Produto Cadastrado <br><hr><br>";
}

$produto2 = $produto->lastInsertId();
echo("Produto de id $produto2 foi inserido com sucesso");

$query = ("select * from produto"); 
// Sempre Bom lembrar que o Query é um comando que envia uma linha de código para o mysql
$statement = $produto->prepare($query);
$statement->execute();
$retorno = $statement->fetchAll(PDO::FETCH_ASSOC); 

foreach($retorno as $linha){
    $nome = $linha["nome"];
    $preco = $linha["preco"];
    echo("Nome: ".$linha["nome"]. " Preço: ".$linha["preco"]." Categoria: ".$linha["categoria"]." Descrição: ".$linha["descricao"]." Quantidade em Estoque: ".$linha["estoque"]);
    echo("<br>");
    echo("<br>");
}


?>