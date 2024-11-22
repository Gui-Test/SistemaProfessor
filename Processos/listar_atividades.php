<?php 

$id_turma = $_POST["turma_listar"];
$sql_consulta = $conn->prepare("SELECT * FROM Atividades WHERE fk_turma = ?");
$sql_consulta->bind_param("i", $id_turma);

$sql_consulta->execute();

$resultado = $sql_consulta->get_result();

if ($resultado->num_rows >= 1) {
    $lista_atividades = $resultado->fetch_all(MYSQLI_ASSOC);
} else {
    echo '<div> Não há atividades cadastradas a essa turma </div>';
}

?>