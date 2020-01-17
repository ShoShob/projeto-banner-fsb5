<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=main, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banner</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <div>
            <h1>Mude a sua agora!</h1>
            <h3>Registre seu email ao lado e receba um maravilhoso e-book!</h3>
        </div>
        <div>
            <form action="receberEmail.php" method="POST">
                <h4>Digite seu email</h4>
                <input type="email" name="emailUsuario" required>
                <button type="submit">Enviar email</button>
            </form>
        </div>
    </main>
</body>
</html>