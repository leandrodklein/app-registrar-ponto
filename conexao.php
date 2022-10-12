<?php

// Início da conexão com o banco de dados utilizado PDO
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sistema_ponto";
$port = "3306";

try {
    // Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port;dbname= " . $dbname, $user, $pass);

    // Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    // echo "Conexão com banco de dados realizado com sucesso.";

} catch (PDOException $err) {
    echo "Erro: Conexão com banco dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}
    // Fim da conexão com o banco de dados utilizando PDO