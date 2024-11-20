<?php include("../BancoDados/conexao.php") ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

<form action="../Processos/logar.php" method="post">

    <label for="email"> Email:</label><br>
    <input type="email" id="email" name="email"></input> 
    <br><br>
    <label for="senha"> Senha:</label><br>
    <input type="password" id="senha" name="senha"></input>
    <br><br>
    <input type="submit" value="Entrar"></input>

</form>

</body>

</html>