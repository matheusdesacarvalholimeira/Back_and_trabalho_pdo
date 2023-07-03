<?php 
session_start();


$inputs = [];
if(isset($_SESSION['inputs'])){
    $inputs = $_SESSION['inputs'];
    unset($_SESSION['inputs']);
}

function show_error($campo){
    global $inputs;
    if(key_exists($campo,$inputs)){
        if(!empty($inputs[$campo])){
            return '<span>'.$inputs[$campo]['erro'].'</span>';
        }else {
            return '';
        }
    }else{
        return '';
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="entrada1_usuarios.php" method="post">
    <label for="">nome</label>
    <input type="text" name="nome" min="5" max="20">
    <br>
    <label for="">email</label>
    <input type="text" name="email">
    <br>
    <label for="" value="">senha</label>
    <input type="text" name="senha">
    <br>
    <label for="" value=""> confirmar senha</label>
    <input type="text" name="senha_conf">
    <br>
    <?php echo show_error('senha') ?>
    <input type="submit" name="cadatrar">
</form>
</body>
</html>