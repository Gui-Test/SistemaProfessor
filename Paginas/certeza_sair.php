<?php include("../BancoDados/conexao.php");
include("../BancoDados/auth.php");
session_start();
Auth();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
</head>

<body>

    <div>
        <p>Tem Certeza que deseja sair da conta?</p>

        <a href="professor.php">
            <button>Cancelar</button>
        </a>

        <a href="../Processos/sair.php">
        <button id="logout">Sair da Conta</button>
        </a>
    </div>

    <script>

       

    </script>

</body>

</html>