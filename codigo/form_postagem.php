<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>
<body>
    <form action="salvar_postagem.php" method="GET">
        Texto: <br>
        <input type="text" name="texto"> <br>
        
        Data & Hora: <br>
        <input type="text" name="datahora"> <br>
        
        idusuario: <br>
        <select name="idusuario">
            <?php
            require_once "conexao.php";

            $sql = "select * from usuario";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_pedido = $linha['idusuario'];
                $nome = $linha['nome'];
                echo "<option value='$idusuario'>$nome</option>";
            }
            ?>
        
        <input type="submit" value="Postar">
    </form>
</body>
</html>