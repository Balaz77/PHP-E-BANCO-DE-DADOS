




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <h1>Cadastre-se aqui!!!</h1>
    <hr>
    <form action = "cadastrar.php" method = "POST">
        <label for="email">Nome</label>
            <input type="text" name="nome" placeholder = "insira seu nome"> <br><br>
        <label for="email">E-mail</label>    
            <input type="email" name="email" placeholder = "insira seu E-mail"><br><br>
        <label for="pwd">Senha</label>    
            <input type="password" name="pwd" placeholder = "insira sua senha"><br><br>
        <label for="Confpwd">Confirmar senha</label>    
            <input type="password" name="Confpwd" placeholder = "Confirmar senha"><br><br>
            <input type="submit" name="enviar">
    </form>

</body>
</html>