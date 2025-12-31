<?php
    include_once("../data/produtodao.php");
    class ProdutoControl{
        function inserir(){
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $categoria = $_POST["categoria"];
            $preco = $_POST["preco"];
            $estoque = $_POST["estoque"];

            $dao = new ProdutoDAO();
            $dao->inserir($nome, $descricao, $categoria, $preco, $estoque);
            header("location:../view/pegartabela.php");
        }

        function alterar(){
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $categoria = $_POST["categoria"];
            $preco = $_POST["preco"];
            $estoque = $_POST["estoque"];
            $id = $_POST["id"];

            $dao = new ProdutoDAO();
            $dao->alterar($id, $nome, $descricao, $categoria, $preco, $estoque);
            header("location:../view/pegartabela.php");
        }

        function deletar(){
            $id = $_GET["id"];

            $dao = new ProdutoDAO();
            $dao->deletar($id);
            header("location:../view/pegartabela.php");
        }
    }

    if ( isset($_REQUEST["acao"]) ){

        $control = new ProdutoControl();
        $acao = $_REQUEST["acao"];
        if($acao == "inserir"){
            $control->inserir();
        }else if($acao == "alterar"){
            $control->alterar();
        }else if($acao == "deletar"){
            $control->deletar();
        }

    }

   
?>