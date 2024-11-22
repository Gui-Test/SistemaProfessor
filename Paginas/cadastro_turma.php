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
    <title>Cadastrar Turma</title>
</head>

<body>

        <a href="professor.php">
            <button>Voltar</button>
        </a>
    
    <form action="../Processos/cadastrar_turma.php" method="post">

        <label for="nome_turma"> Nome da Turma:</label><br>
        <input type="text" id="nome_turma" name="nome_turma"></input>
        <br><br>
        
        <input type="hidden" value="<?php echo $_SESSION["userdata"]["id_professor"]?>" name="id_professor"></input>

        <input type="submit" value="Cadastrar"></input>

    </form>

</body>

</html>