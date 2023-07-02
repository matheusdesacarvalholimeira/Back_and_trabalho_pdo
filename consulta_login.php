<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    
    die('Sua entrada foi feita de maneira incorreta');
}

include_once 'conexao_pdo.php';

//COMECO DA INCERCAO NO BANCO
$filtrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$inputs = [];

    $inputs['senha']=[
        'value' => '',
        'erro' => ''
    ];

try{
    $consu = $pdo->prepare("select * from usuario where email = :email and senha = :senha");
     $consu->execute(['email' => $filtrar['email']]);
     $respo = $consu->fetch();

     $add_usuarios = $pdo->prepare($consu);
     
     $add_usuarios->bindParam(':email', $filtrar['email'], PDO::PARAM_STR);
     $add_usuarios->bindParam(':senha', $filtrar['senha'], PDO::PARAM_STR);

     $padraon2 = '9808724824';
     $padraon3 = '9808724858';

     $consu2 = $pdo->prepare("select * from funcionarios where email = :email and senha = :senha");
     $consu2->execute(['email' => $filtrar['email']]);
     $respo2 = $consu2->fetch();

        if($filtrar['senha']==$padraon2){
            //nivel funcionario
            if($respo2){
                header('location: index.php');
            }
        }elseif($filtrar['senha']==$padraon3){
             //nivel gerente
             if($respo2){
                header('location: index.php');
            }
        }else{
            //nivel usuarios
            if($respo){
                header('location: index.php');
            }else{
                $inputs['senha']['erro'] = 'o email colocado ja possui um login';
                $_SESSION['inputs'] = $inputs;
            }
            
        }

    


}catch(PDOException $e){
    echo 'ouve um erro'. $e->getMessage();
}

?>