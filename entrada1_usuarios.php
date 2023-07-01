<?php 

session_start();
//validacao de entrada indevidad
//VERIFICA SE O METODO DE ENVIO E POST SE FOR CONTINUA 
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    
    die('Sua entrada foi feita de maneira incorreta');
}


include_once 'conexao_pdo.php';



//COMECO DA INCERCAO NO BANCO
$filtrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar['cadatrar'])){
    

try{
    $sql = "INSERT INTO usuario(nome,email,senha)VALUES(:nome,:email,:senha)";

    $add_usuarios = $pdo->prepare($sql);
    $add_usuarios->bindParam(':nome', $filtrar['nome'], PDO::PARAM_STR);
    $add_usuarios->bindParam(':email', $filtrar['email'], PDO::PARAM_STR);
    $add_usuarios->bindParam(':senha', $filtrar['senha'], PDO::PARAM_STR);
   
    $inputs = [];

    $inputs['senha']=[
        'value' => '',
        'erro' => ''
    ];

     //verificando se o login nao existe
     $consu = $pdo->prepare('select * from usuario where email = :email');
     $consu->execute(['email' => $filtrar['email']]);
     $respo = $consu->fetch();

     if($respo){
         echo 'o login ja existe';
         header('location: index.php');
         $inputs['senha']['erro'] = 'o email colocado ja possui um login';
         $_SESSION['inputs'] = $inputs;
         die('esse email ja esta cadastreado');
     }else{
        
  

    //VERIFICAOCAO SE A SENHA ENVIADA SEGUE OS AREAMENTROS ESIGIDOS
    if(empty($filtrar['senha'])){
        $inputs['senha']['erro'] = 'o camo pricisa ser preenchida';
    }else{
        if(strlen($filtrar['senha']) < 5 || strlen($filtrar['senha']) > 20){
            $inputs['senha']['erro'] = 'o numero minimo de caracteres e 5 e o maior e 20';
        }
    }

    if(!empty( $inputs['senha']['erro'])){
        $_SESSION['inputs'] = $inputs;
        header('location: index.php');
    }else{
        $add_usuarios -> execute();
        }
        
 
    
    echo 'registro feito';
    
}
}catch(PDOException $e){

        echo 'ouve um erro'. $e->getMessage();

    }

}



?>