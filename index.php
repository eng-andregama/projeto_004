<?php

//Criando uma função php

function getInfo($atributo){
    //$dados = array("título","descricao");
    $dados = ["titulo"=>"SiteModelo", "descricao"=>"Programando em PHP."];
    return $dados[$atributo];

}

function getUsuarios(){
    $dados =[
        ["nome"=>"Guilherme","email"=>"gui@gmail.com"],
        ["nome"=>"Maria","email"=>"maria@gmail.com"],
        ["nome"=>"Pedro","email"=>"pedro@gmail.com"]
    ];
    return $dados;
}

function exibeUsuario(){
    
    $usuarios = getUsuarios();
    $html = "";

    foreach($usuarios as $chave => $usuario) {

        $nome = $usuario["nome"];
        $email = $usuario["email"]; 
        $html .= "<li>Nome: $nome - e-mail: $email</li>";

    }

    return $html;
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
    
    <h1><?php echo getInfo("titulo") ?></h1>
    <p><?php echo getInfo("descricao") ?></p>
    <ul>
        <li>Nome: Guilherme - email: gui@gmail.com</li>
    </ul>

</body>
</html>