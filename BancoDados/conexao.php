<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "saep_db";

    $conn = new mysqli($servername,$username,$password,$db_name);

    if ($conn->connect_error) {
        die("Erro na conexão! <br>" . $conn->connect_error);
    }else{
        echo "<script>console.log('conexão ok')</script>";
    }

?>

