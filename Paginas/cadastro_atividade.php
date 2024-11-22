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
    <title>Cadastrar Atividade</title>
</head>

<body>

        <a href="atividades_turma.php">
            <button>Voltar</button>
        </a>
    
    <form action="../Processos/cadastrar_turma.php" method="post">

        <label for="nome_atividade"> Nome da Atividade:</label><br>
        <input type="text" id="nome_atividade" name="nome_atividade"></input>
        <br><br>
        
        <input type="hidden" value="<?php echo $_SESSION["id_turma"]?>" name="id_turma"></input>

        <input type="submit" value="Cadastrar"></input>

    </form>

</body>

</html>