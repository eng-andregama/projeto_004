<?php

include('Api/api.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo getInfo("titulo") ?></title>
</head>
<body>
    
    <h1><?php echo getInfo("titulo") ?></h1>
    <p><?php echo getInfo("descricao") ?></p>
    <ul>
        <li><?php echo exibeUsuario() ?></li>
    </ul>

</body>
</html>