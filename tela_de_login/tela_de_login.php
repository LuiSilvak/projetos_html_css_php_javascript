<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="tela_de_login.css">
</head>
<body>
    <a href="../pagina_inicial/tela_inicial.php">Voltar</a>
    <div class="tela-login">
        <h1>Login User</h1>
        <form action="../testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" class="inputSubmit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>