<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Faça o login</h1>
    <hr>
    <form action = "logar.php" method = "POST">
        <label for="email">E-mail</label>
            <input type="email" name="email" placeholder = "E-mail"> <br>
        <label for="pwd">Senha</label>    
            <input type="password" name="pwd" placeholder = "Senha"><br><br>
            <input type="submit" name="enviar">
    </form>

</body>
</html>