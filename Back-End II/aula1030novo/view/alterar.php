<?php
    $pdo = new PDO("mysql:host=localhost:3306;dbname=loja","root","user");
    $query = "select * from produto where id = :id";
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
    <form action="../control/produtocontrol.php" method="POST">
        <input type="hidden" name="acao" value="alterar" >
        <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>" >
        Nome:      <input name="nome" value='<?php echo($linha["nome"]); ?>' /> <br>
        Descrição: <textarea name="descricao"><?php echo($linha["descricao"]); ?>
        </textarea> <br>
        Categoria: <select name="categoria" value="<?php echo($linha["categoria"]); ?>">
            <option value="ELETRÔNICOS">Eletrônicos</option>
            <option value="UTENSÍLIOS">Utensílios</option>
            <option value="ROUPA">Roupa</option>
        </select>
        <br>
        Preço:     <input name="preco" value = "<?php echo($linha["preco"]); ?>" type="number" step="0.01" /><br>
        Estoque:   <input name="estoque" value = "<?php echo($linha["estoque"]); ?>" type="number" min="0" /><br>
        <button>Alterar</button>
    </form>
</body>
</html>