<?php
    $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
    $query = "select * from usuario where id = :id";
    $parametros = Array(
        ":id" => $_GET["id"]
    );
    $statement = $pdo->prepare($query);
    $statement->execute($parametros);
    $retorno = $statement->fetchAll(PDO::FETCH_ASSOC);
    $linha = $retorno[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar Produto</h2>
    <form action="usuarioalterarbanco.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>" >
        Nome:      <input name="nome" value='<?php echo($linha["nome"]); ?>' /> <br>
        E-mail:      <input name="email" value='<?php echo($linha["email"]); ?>' /> <br>
        Senha:      <input name="senha" value='<?php echo($linha["senha"]); ?>' /> <br>
        <button>Alterar</button>
    </form>
</body>
</html>