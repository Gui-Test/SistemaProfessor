<?php

include("../BancoDados/conexao.php");

$professor = $_SESSION["userdata"]["id_professor"];
$sql_consulta = $conn->prepare("SELECT * FROM Turma WHERE fk_professor = ?");
$sql_consulta->bind_param("i", $professor);

$sql_consulta->execute();

$resultado = $sql_consulta->get_result();

if ($resultado->num_rows >= 1) {
    $lista_turmas = $resultado->fetch_all(MYSQLI_ASSOC);
    
} else {
    echo '<div> Não há turmas cadastradas </div>';
}

?>