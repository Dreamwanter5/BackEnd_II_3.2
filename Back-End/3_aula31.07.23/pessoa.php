<?php

class Pessoa {
    //Criando variáveis dentro de objetos pede por um "public" antes de uma variável.
    public $nome;
    public $idade;
    public $peso;
    public $altura;
    public $cpf;
    public $cor;

    //Primeiras etapas da "receberAtributos"
        // function receberAtributos(){
        //     $this->nome = "Teste";
        //     $this->idade = 38; 
        //     $this->peso = 110.00;
        //     $this->altura = 1.83;
        //     $this->cpf = "12345678978";
        //     $this->cor = "Branco";
        // }
        // Está em comentário porque seria o exemplo de uma versão inicial da função, o problema é que ela vai receber e sempre reproduzir os mesmos atributos, o próximocódigo conserta isso

        // function receberAtributos($nomeNovo){ //Nesta condição essa função só vai funcionar se ele receber um nome novo
        //     $this->nome = $nomeNovo;
        //     $this->idade = 38; 
        //     $this->peso = 110.00;
        //     $this->altura = 1.83;
        //     $this->cpf = "12345678978";
        //     $this->cor = "Branco";
        // }
    //Fim primeiras etapas de "receberAtributos"

    function receberAtributos($nomeNovo, $idadeNovo, $pesoNovo, $alturaNovo, $cpfNovo, $corNovo){ // Essa seria a versão completa
        $this->nome = $nomeNovo;
        $this->idade = $idadeNovo; 
        $this->peso = $pesoNovo;
        $this->altura = $alturaNovo;
        $this->cpf = $cpfNovo;
        $this->cor = $corNovo;
    }

    function seApresentar(){
        //Evitemos usar echo quando se trata de criar uma função para emitir texto
        return("A nomenclatura que recaí sobre mim é: {$this->nome}<br>Meu tempo de vida é {$this->idade} anos, e peso {$this->peso}kg"); //Sempre que houver o uso de uma função dentro de uma classe, é necessário que haja o "This" para ele repescar o atributo da classe no qual a função pertence.
        // Inclusive usar chaves é um bom método para evitar concatenação
    }
}

?>