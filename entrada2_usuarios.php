<?php 

include 'conexao_pdo.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar['cadatrar'])){

try{
    $sql2 = "insert into usert (nome,email,senha) values (:nome, :email, :senha)";

    $add_usuarios2 = $pdo->prepare($sql2);
    $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':email', $filtrar2['email'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':senha', $filtrar2['senha'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':data_nasc', $filtrar2['data_nasc'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':telefone', $filtrar2['telefone'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cpf', $filtrar2['cpf'], PDO::PARAM_STR);

    $add_usuarios2->bindParam(':renda', $filtrar2['renda'], PDO::PARAM_STR);

    
 
    $add_usuarios->execute();
    echo 'registro feito';

}catch(PDOException $e){

        echo 'ouve um erro'. $e->getMessage();

    }

}


//$sql = "insert into usert (nome, email) values (:nome, :email);";

//try{


//$conec = $pdo->prepare($sql);
//$conec->bindParam(':nome', $nome);
//$conec->bindParam(':email', $email);

//$conec -> execute();
//echo 'registro feito';
//}catch (PDOException $e){
   // echo 'ouve um erro'. $e->getMessage();
//}
?>