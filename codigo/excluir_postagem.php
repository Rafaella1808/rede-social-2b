<?php
    require_once "conexao.php";

    $idpostagem = $_POST['idpostagem'];

    $sql = "delete from postagem where idpostagem = $idpostagem";

    mysqli_query($conexao, $sql);

    header("Location: lista_postagem.php");
?>