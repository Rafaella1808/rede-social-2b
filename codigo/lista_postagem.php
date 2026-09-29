<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Postagem</title>
     <style>
        table,
        tr,
        td {
            border-style: solid;
            padding: 10px;
        }
    </style>
</head>
<body>
     <h2>Lista de Postagens</h2>

    <table>
        <tr>
            <td>idpostagem</td>
            <td>texto</td>
            <td>data_hora</td>
            <td>idusuario</td>
            
        </tr>
        <?php
        require_once "conexao.php";

        $sql = "SELECT * FROM postagem";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $idpostagem = $linha['idpostagem'];
            $texto = $linha['texto'];
            $data_hora = $linha['data_hora'];
            $idusuario = $linha['idusuario'];

            echo "<tr>";
            echo "<td>$idpostagem</td>";
            echo "<td>$texto</td>";
            echo "<td>$data_hora</td>";
            echo "<td>$idusuario</td>";
            echo "<td><a href='excluir_postagem.php?id=$idpostagem'>excluir</a></td>";
            echo "</tr>";
</body>
</html>