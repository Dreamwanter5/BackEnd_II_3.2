<html>
<head>
<link rel="stylesheet" href="style.css"> 
</head>
    <body>
        <table class="tabela">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            <tbody>
                <?php
                    include_once("pessoa.php");
                    session_start();
                    $receba = $_SESSION["pessoas"];
                    foreach($receba as $registro){
                        //arrumar os Tr e colocar TD
                        echo("<tr>"); 
                            echo("<Td>".$registro->getNome());echo("</Td>");
                            echo("<td>".$registro->getEmail());echo("</td>");
                            echo("<td>".$registro->getTelefone()); echo("</Td>");
                        echo("</tr>");
                    }
                ?>

            </tbody>
        </table>
        <br><a href="index.html">Voltar</a>
    </body>
</html>
