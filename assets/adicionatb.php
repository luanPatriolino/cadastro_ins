<?php
include_once "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];

$sql = "INSERT INTO inscritostb(nome, email, telefone, cpf, estado) VALUES('$nome', '$email', '$telefone', '$cpf', '$estado')";

if(mysqli_query($conn, $sql)){
    header("Location: index.html");
}else{
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);