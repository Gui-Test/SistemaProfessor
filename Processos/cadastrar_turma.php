<?php

include("../BancoDados/conexao.php");
include("../BancoDados/auth.php");
session_start();
Auth();

$nome_turma = $_POST["nome_turma"];
$id_professor = $_POST["id_professor"];

$sql_consulta = $conn->prepare("INSERT INTO Turma(nome_turma,fk_professor) Values(?,?)");
$sql_consulta->bind_param('si',$nome_turma,$id_professor);

if ($sql_consulta->execute()) {
    header("location:../Paginas/professor.php");
} else {
    echo("<script>alert('Erro ao cadastrar turma!')</script>");
};


?>