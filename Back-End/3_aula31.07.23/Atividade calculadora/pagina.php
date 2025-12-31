<?php

    include("conta.php");
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $sinal = $_POST["operacao"];
    $resultado = 0;

    $calculadora = new Calculadora();
    $calculadora->receberAtributos($n1, $n2, $resultado, $sinal);
    echo ($calculadora->execOperacao()) ;

?>
