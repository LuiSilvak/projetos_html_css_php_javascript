<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassowrd = 'luis12345';
    $dbName = 'formulario_luis';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassowrd, $dbName);

    /*
    if ($conexao->connect_errno){
        echo "Erro no Banco de Dados";
    }

    else {
        echo "Conexão efetuada com sucesso!";
    }
    */    
?>
