<?php

include("../BancoDados/conexao.php");

session_start();

$email = $_POST["email"];
$password = $_POST["senha"];


$sql_consulta = $conn->prepare("SELECT * FROM professor WHERE email_professor = ?");
$sql_consulta->bind_param("s", $email);

$sql_consulta->execute();

$resultado = $sql_consulta->get_result();
$userdata = mysqli_fetch_array($resultado);

if (password_verify($password, $userdata["senha_professor"])) {

    $_SESSION["userdata"] = $userdata;
    echo '<script>alert("Login Efetuado com sucesso!")</script>';
    header("../Paginas/professor.php");

} else {
    unset ($_SESSION['userdata']);
    echo '<script>alert("Senha ou Email Incorretos.")</script>';
    header("../Paginas/login.php");
}



?>