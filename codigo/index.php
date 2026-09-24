<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1> Menu </h1>
<a href="form_postagem.php">Enviar Postagem</a><br>
<a href="form_usuario.php">Cadastrar Usuario</a><br>


    <?php
        if (isset($_POST['erro'])) {
            $email = '';
            if ($_POST['erro'] == "login") {
                $email = $_POST['email'];
                echo "<p class='erro'>Login e/ou senha incorretos!</p>";
            }
            if ($_POST['erro'] == "logado") {
                echo "<p class='erro'>Você precisa estar logado!</p>";
            }
        }
        else {
            $email = "";
        }
?>
</body>
</html>