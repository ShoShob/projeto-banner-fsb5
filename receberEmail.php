<?php

// var_dump($_POST);

$email = $_POST["emailUsuario"];
if($email == ""){
    echo "<h1>Não foi digitado um email válido</h1>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resposta</title>
</head>
<body>
    <h1>O email <?php echo $email?> foi registrado dcom sucesso!</h1>
</body>
</html>