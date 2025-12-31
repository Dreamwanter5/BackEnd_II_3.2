<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    
    <?php
    if(isset($_GET["erro"])){
      $erro = $_GET["erro"];
      if($erro == 1){
        echo ("Email/senha inválidos");
      }
      else if($erro == 2){
        echo ("Email Errado");
      }
      else if($erro == 3){
        echo ("Senha Errada");
      }
    }
    ?>

    <form action="perfil.php" method="post">
        Digite seu E-mail: <input type="email" name="email"><br>
        Digite sua senha: <input type="password" name="senha"><br>
        <button>Confirmar</button>


    </form>
    
</body>
</html>