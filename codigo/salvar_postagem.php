<?php

$idusuario = $_SESSION['idusuario'];
$texto = $_POST['texto'];


$sql = "INSERT INTO postagem (texto, data_hora, idusuario) VALUES ('$texto', '$datahora', '$idusuario');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: index.php");
?>