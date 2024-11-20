<?php include("../BancoDados/conexao.php");
session_start();
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

        <a href="login.php">
            <button>Cancelar</button>
        </a>

        <button id="logout">Sair da Conta</button>

    </div>

    <script>

        $(document).ready(() => {
            $("button#logout").click((event) => {
                <?php
                session_unset();
                session_destroy();
                ?>
                window.location.href = "login.php"
            })
        })

    </script>

</body>

</html>