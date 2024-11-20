<?php include("conexao.php") ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Professor</title>
</head>

<body>

    <nav>
        <p> <?php /*echo $_SESSION["nome_professor"];*/ ?> </p>
        <a href="sar.php">
            <input type="button" value="SAIR" name="SAIR">
        </a>
    </nav>

    <div>
        <a href="cadastrar.php">
            <input type="button" value="Cadastrar Turma" name="cadastro_turma">
        </a>
    </div>

    <table>

        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php

            include("listar_turmas.php");

            if (!empty($lista_turmas)) {
                foreach ($lista_turmas as $linhas) {
                    echo "<tr>
                                <td>" . $linhas["id_turma"] . "</td>
                                <td>". $linhas["nome_turma"] . "</td>
                                <td><a href='excluir_turma.php'>Excluir</a></td>
                                <td><a href='listar_atividades.php'>Visualizar</a></td>
                            </tr>
                        ";
                }
            }

            ?>

        </tbody>

    </table>

</body>

</html>