<?php
    class UsuarioDAO{
        function inserir(){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $query = "insert into usuario (nome, email, senha) values (:nome, :email, :senha);";
            $parametros = Array(
                ":nome" => $nome,
                ":email" => $email,
                ":senha" => $senha
            );

            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
            header("location:usuariopegartabela.php");
        }

        function alterar(){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $id = $_POST["id"];
        
            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $parametros = Array(
                ":nome" => $nome,
                ":email" => $email,
                ":senha" => $senha,
                ":id" => $id
            );
        
            $query = "update usuario 
                        set
                        nome = :nome,
                        email = :email,
                        senha = :senha
                        where id = :id 
                        ;";
            
        
            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
            header("location:usuariopegartabela.php");
        }

        function deletar(){
            $id = $_GET["id"];

            $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
            $query = "delete from usuario where id = :id ;";
            $parametros = Array(
                ":id" => $id
            );

            $statement = $pdo->prepare($query);
            $statement->execute($parametros);
            header("location:usuariopegartabela.php");
        }
    }
?>