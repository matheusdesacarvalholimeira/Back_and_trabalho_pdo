<?php 

session_start();

include 'conexao_pdo.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar['cadatrar'])){

try{
    $sql2 = "insert into usert (nome,email,data_nasc,telefone,cpf,escolaridade,experiencia) values (:nome, :email,:data_nasc,:telefone,:cpf,:escolaridade,:experiencia)";

    $add_usuarios2 = $pdo->prepare($sql2);
    $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':email', $filtrar2['email'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':data_nasc', $filtrar2['data_nasc'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':telefone', $filtrar2['telefone'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cpf', $filtrar2['cpf'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':escolaridade', $filtrar2['escolaridade'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':experiencia', $filtrar2['experiencia'], PDO::PARAM_STR);
    
    $add_usuarios->execute();
    echo 'registro feito';

}catch(PDOException $e){
        echo 'ouve um erro'. $e->getMessage();
    }

}

?>