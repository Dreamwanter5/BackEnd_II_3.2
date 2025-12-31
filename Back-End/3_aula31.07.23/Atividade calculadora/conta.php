<?php

    class calculadora{
        public $n1;
        public $n2;
        public $resultado;
        public $sinal;

        function receberAtributos($n1Novo, $n2Novo, $resultadoNovo, $sinalNovo){
            $this->n1 = $n1Novo;
            $this->n2 = $n2Novo;
            $this->resultado = $resultadoNovo;
            $this->sinal = $sinalNovo;
        }
        function execOperacao(){
            echo("Números escolhidos: <br>" .$this->n1." - ".$this->n2."<br>");
    
            if ($this->sinal == 1){
                $this->resultado = ($this->n1+$this->n2);
                return("O resultado é: ".$this->resultado);
                }
            else if ($this->sinal == 2){
                $this->resultado = ($this->n1-$this->n2);
                return("O resultado é:".$this->resultado);
            }
            else if ($this->sinal== 3){
                $this->resultado = ($this->n1*$this->n2);
                return("O resultado é:".$this->resultado);
            }
            else {
                $this->resultado = ($this->n1/$this->n2);
                return("O resultado é:".$this->resultado);
            }
        }
    

    }

    
?>