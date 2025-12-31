<?php
session_start();
$_SESSION["email"] = $_POST["email"];
$_SESSION["senha"] = $_POST["senha"];
// email: pedro@gmail.com
// senha: pedro
if ($_SESSION["email"] == "pedro@gmail.com" && $_SESSION["senha"] == "pedro" ){
    echo("Seja bem-vindo(a)");
} else if($_SESSION["email"] != "pedro@gmail.com" && $_SESSION["senha"] == "pedro"){
    header("location:login.php?erro=2");
} else if($_SESSION["email"] == "pedro@gmail.com" && $_SESSION["senha"] != "pedro"){
    header("location:login.php?erro=3");
} else{
    header("location:login.php?erro=1");
}
?>
<br>
<a href="login.php">Voltar</a>