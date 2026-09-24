<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
     <form action="salvar_usuario.php" method="POST">
        Username: <br>
        <input type="text" name="user"> <br>
        
        Nome: <br>
        <input type="text" name="nome"> <br>
        
        Email: <br>
        <input type="varchar" name="email"> <br>

        Senha: <br>
        <input type="passaword" name="senha"> <br>

        Foto: <br>
        <input type="text" name="foto"> <br>
        
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>