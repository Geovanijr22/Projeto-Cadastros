<?php

    $dbHost = 'www';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'empresas';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno);
    {
        echo "erro";
    }
    else
    {
        "conexão efetuada com sucesso";
    }


?>