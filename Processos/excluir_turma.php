<?php
include("../BancoDados/conexao.php");
session_start();
Auth();

$id_turma = $_POST["turma_excluir"];

$sql_consulta = $conn->prepare("DELETE FROM Turma WHERE id_turma = ?");
$sql_consulta->bind_param("s", $id_turma);

if ($sql_consulta->execute()) {
    header("location: ../Paginas/professor.php");
} else {
    echo("<script>alert('Erro ao excluir turma!')</script>");
};

?>