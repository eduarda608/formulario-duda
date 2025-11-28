<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbName = 'formulario-gustavo';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_error) {
        die('Falha na Conexão com o Banco de Dados: ' . $conexao->connect_error);
    }

    $conexao->set_charset('utf8');
?>
