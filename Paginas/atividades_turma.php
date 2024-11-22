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
    <title>Atividades da Turma</title>
</head>

<body>

    <nav>
        <p> Olá <?php echo $_SESSION["userdata"]["nome_professor"]; ?> </p>
        <a href="certeza_sair.php">
            <input type="button" value="SAIR" name="SAIR">
        </a>

        <a href="professor.php">
            <button>Voltar</button>
        </a>
    </nav>

    <div>
        <a href="cadastro_atividade.php?id_turma=<?php echo $_SESSION["id_turma"] ?>">
            <input type="button" value="Cadastrar atividade" name="cadastro_atividade">
        </a>
    </div>

    <table>
        <tbody>

        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da Atividade</th>
            </tr>
        </thead>

            <?php

            include("../Processos/listar_atividades.php");

            if (!empty($lista_atividades)) {
                foreach ($lista_atividades as $linhas) {
                    echo "<tr>
                    <td>" . $linhas["id_atividade"] . "</td>
                    <td>" . $linhas["nome_atividade"] . "</td>
            
                </tr>";
                }
            }

            ?>

        </tbody>

    </table>

</body>

</html>