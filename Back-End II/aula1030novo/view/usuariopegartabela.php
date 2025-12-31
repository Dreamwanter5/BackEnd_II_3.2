<?php
    $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
    $query = "select * from usuario";
    $statement = $pdo->prepare($query);
    $statement->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pegartabela.php">Produtos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="usuariopegartabela.php">Usuario</a>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <a href="usuarioentrada.html">
            <button type="button" class="btn btn-primary mt-3 mb-3">Cadastro Novo Usuario</button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail </th>
                    <th>Senha </th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $retorno = $statement->fetchAll(PDO::FETCH_ASSOC);//descarregar os dados obtidos
                    foreach($retorno as $linha){
                        $id =      $linha["id"];
                        $nome =    $linha["nome"];
                        $email =   $linha["email"];
                        $senha =   $linha["senha"];
                        echo("<tr>");
                        echo("<td>$id</td>");
                        echo("<td>$nome</td>");
                        echo("<td>$email</td>");
                        echo("<td>$senha</td>");
                        echo("<td>
                                <a href='usuariodeletar.php?id=$id'>
                                    <button type='button' class='btn btn-danger'>Excluir</button>
                                </a>
                                <a href='usuarioalterar.php?id=$id'>
                                    <button type='button' class='btn btn-warning'>Alterar</button>
                                </a>  
                            </td>");
                        echo("</tr>");
                    }
                ?>   
            </tbody>
        </table>
    </div>
</body>
</html>
