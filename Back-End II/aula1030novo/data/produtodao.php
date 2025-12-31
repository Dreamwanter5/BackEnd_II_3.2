<?php
    class ProdutoDAO{
        function alterar($id, $nome, $descricao, $categoria, $preco, $estoque){
            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $parametros = Array(
                ":nome" => $nome,
                ":descricao" => $descricao,
                ":categoria" => $categoria,
                ":preco" => $preco,
                ":estoque" => $estoque,
                ":id" => $id
            );

            $query = "update produto 
                        set
                        nome = :nome,
                        descricao = :descricao,
                        categoria = :categoria,
                        preco = :preco, 
                        estoque = :estoque
                        where id = :id 
                        ;";
            

            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
        }

        function inserir($nome, $descricao, $categoria, $preco, $estoque){
            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $query = "insert into produto (nome, descricao, categoria, preco, estoque) values (:nome, :descricao , :categoria, :preco, :estoque);";
            $parametros = Array(
                ":nome" => $nome,
                ":descricao" => $descricao,
                ":categoria" => $categoria,
                ":preco" => $preco,
                ":estoque" => $estoque
            );

            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
        }

        function deletar($id){
            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $query = "delete from produto where id = :id ;";
            $parametros = Array(
                ":id" => $id
            );
        
            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
           
        }
    }
?>