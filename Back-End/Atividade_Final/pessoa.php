<?php

class Pessoa{
    private $nome;
    private $email;
    private $telefone;

    function __construct($nome, $email, $telefone){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
    }


    //Gets e sets
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email= $email;
    }

    function getTelefone(){
        return $this->telefone;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    //Devolver Resultados
    function exibirPessoa(){
        return "Nome: {$this->nome}<br>Telefone: {$this->email}<br>E-mail: {$this->email}<br>---------------------------------";
    }

}



?>