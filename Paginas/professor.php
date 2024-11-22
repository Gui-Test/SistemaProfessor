<?php include("../BancoDados/conexao.php");
include("../BancoDados/auth.php");
session_start();
Auth()
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Professor</title>
</head>

<body>

    <nav>
        <p> Olá <?php echo $_SESSION["userdata"]["nome_professor"]; ?> </p>
        <a href="certeza_sair.php">
            <input type="button" value="SAIR" name="SAIR">
        </a>
    </nav>

    <div>
        <a href="cadastro_turma.php">
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

            include("../Processos/listar_turmas.php");

            if (!empty($lista_turmas)) {
                foreach ($lista_turmas as $linhas) {
                    echo "<tr>
                                <td>" . $linhas["id_turma"] . "</td>
                                <td>" . $linhas["nome_turma"] . "</td>
                                <td> 
                                    <form action='../Processos/excluir_turma.php' method='post'>
                                    <button type='submit' name='turma_excluir' value='" . $linhas["id_turma"] . "'>Excluir</Button>
                                    </form>
                                </td>
                                <td>
                                    <form action='atividades_turma.php' method='post'>
                                    <button type='submit' name='turma_listar' value='" . $linhas["id_turma"] . "'>Visualizar</Button>
                                    </form>
                                </td>
                            </tr>
                        ";
                }
            }

            ?>

        </tbody>

    </table>

</body>

</html>