<?php

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

    echo $html;
}
