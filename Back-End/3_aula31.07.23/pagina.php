<?php

    //Aula sobre classes
    //24.07.2024
    //Quarta-Feira - 07:47

    // Sobre atributos e classes começo
        //Programação Orientada a objetos. _Objetos_ se definem por *dois* elementos -> ATRIBUTOS e FUNÇÕES.

        // Quais são os atributos de um celular? -> O que define o estado de um objeto /\/\/\ Desse modo, atributos são informações genéricas.
        // 1 - Portabilidade | Tamanho
        // 2 - Modelo
        // 3 - Capacidade de armazenamento de dados
        // 4 - Tela
        // 5 - Processamento de informação

        // Funções de um celular:
        // 1 - Conectar-se com uma rede
        // 2 - Armazenar informações
        // 3 - Reproduzir imagens e vídeos
        // 4 - comunicar-se com outros dispositivos
        // 5 - Ligar/Desligar
    //Sobre atributo e classes fim

    
    include_once("pessoa.php"); //Desse modo, a classe passou para outro arquivo, minimizando o código e o tornando mais limpo. 

    // ------------------------------------------------------- AULA DO DIA 24/07
        ## Parte 1 da aula
        //     $variavel = new Pessoa(); //Desse modo a "$variavel" receb as inforamções de uma 'Pessoa'

        //     //É assim que funcionaria paraacessar uma das informações dentro de uma variável que recebe uma classe
        //     $variavel->nome = "Juliano Floss";
        //     $variavel->idade = 12;
        //     $variavel->peso = 82.5;
        //     $variavel->altura = 2;
        //     $variavel->cpf = "1111111111";
        //     $variavel->cor = "rosa";

        //     echo("Nome: ".$variavel->nome."<br>"); //vale lembrar que ponto serve como a vírgula num echo
        //     echo("Idade: ".$variavel->idade."<br>");
        //     echo("Peso: ".$variavel->peso."<br>");
        //     echo("Altura: ".$variavel->altura."cm<br>");
        //     echo("CPF: ".$variavel->cpf."<br>");
        //     echo("Cor: ".$variavel->cor."<br><hr>");

        //     $variavel->seApresentar();

        // ## Encerramento parte 1 da aula

        // $pessoa = new Pessoa();
        // echo("<hr>");
        // $pessoa->receberAtributos("Beyonce da Silva.", 32, 110, 1.50, "1111111111", "Vermelho"); //Como essa função foi criada estabelecendo a variável "$nomeNovo", ela só vai funcionar caso a condição de nomeNovo seja atendida.
        // $pessoa->seApresentar();
    // -------------------------------------------------------- AULA DO DIA 27 FIM
    

 
// Versão 2 da aula
$nome = $_POST["nome"];
    
    // Começo da aula dia 31.07.2024

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura= $_POST["altura"];
    $peso = $_POST["peso"];
    $cpf = $_POST["cpf"];
    $cor = $_POST["cor"];

    $pessoa = new Pessoa();
    $pessoa->receberAtributos($nome, $idade, $peso, $altura, $cpf, $cor);
    $pessoa->seApresentar();
?>

