<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword =  '1ncripyt0n!@91#';
    $dbName = 'landingpage-iotech';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "conexão efetuada com sucesso";
    }
?>