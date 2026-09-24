<?php

$user = $_POST['user'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$user', '$nome', '$email', $senha, '$foto');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: index.php");
?>