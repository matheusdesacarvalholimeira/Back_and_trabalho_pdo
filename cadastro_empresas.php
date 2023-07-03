<?php 


include 'conexao_pdo.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar['cadatrar'])){

try{
    $sql2 = "insert into empresas (nome,funcao,descricao,requisitos,contato,cnpj,endereco,faixa_salario) values (:nome,:funcao,:descricao,:requisitos,:contato,:cnpj,:endereco,:faixa_salario)";

    $add_usuarios2 = $pdo->prepare($sql2);
    $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':funcao', $filtrar2['funcao'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':descricao', $filtrar2['descricao'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':requisitos', $filtrar2['requisitos'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':contato', $filtrar2['contato'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cnpj', $filtrar2['cnpj'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':endereco', $filtrar2['endereco'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':faixa_salario', $filtrar2['faixa_salario'], PDO::PARAM_STR);
    
 
    $add_usuarios->execute();
    echo 'registro feito';

}catch(PDOException $e){

        echo 'ouve um erro'. $e->getMessage();

    }

}

?>

