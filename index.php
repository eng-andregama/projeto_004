<?php

//Criando uma função php

function getInfo($atributo){
    //$dados = array("título","descricao");
    $dados = ["titulo"=>"SiteModelo", "descricao"=>"Programando em PHP."];
    return $dados[$atributo];

}

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
    <h1><?php echo getInfo("descricao") ?></h1>
    <h1><?php echo "teste" ?></h1>
</body>
</html>