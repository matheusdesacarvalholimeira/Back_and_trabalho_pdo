<?php 

include_once 'conexao_pdo.php';

$sql = "SELECT * FROM usuario";

try {
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<div class="container">';
    foreach ($resultados as $row) {
        //echo 'Nome: ' . $row['nome'] . ', Email: ' . $row['email'] . '<br>';
        
        echo '<div>'. $row['nome'] .'</div><br><hr>';
    }
echo '</div>';    
} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}

?>

<style>
    .container{
        
        align-items: center;
        justify-content: center;
        
    }

    div{
        background-color: aqua;
        text-align: center;
        margin-bottom: 30px;
        
    }
</style>