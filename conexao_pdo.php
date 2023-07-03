<?php 

$dsn = 'mysql:host=localhost;dbname=pobreza';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurar o PDO para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo 'deu cert';
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
}


?>