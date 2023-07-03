<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    die('Sua entrada foi feita de maneira incorreta');
}

// Dados de conexão com o banco de dados
$host = 'localhost';
$db   = 'pobreza';
$user = 'root';
$pass = '';

try {
    // Conecta ao banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Configura o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    // Você pode tratar o erro de conexão de acordo com suas necessidades
}

// Filtra e obtém os dados enviados pelo formulário
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha']; // Não é necessário filtrar a senha, pois ela não será usada diretamente na consulta

try {
    // Prepara a consulta para selecionar o usuário com o email e senha fornecidos
    $consulta = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $consulta->bindParam(':email', $email, PDO::PARAM_STR);
    $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
    $consulta->execute();

    // Verifica se encontrou algum usuário
    if ($consulta->rowCount() > 0) {
        // Login bem-sucedido
        $_SESSION['email'] = $email;
        header('Location: sistema.php');
        exit;
    } else {
        // Usuário não encontrado
        $_SESSION['mensagem'] = 'Email ou senha inválidos';
        header('Location: index.php');
        exit;
    }
} catch(PDOException $e) {
    echo 'Erro ao executar a consulta: ' . $e->getMessage();
    // Você pode tratar o erro de consulta de acordo com suas necessidades
}
