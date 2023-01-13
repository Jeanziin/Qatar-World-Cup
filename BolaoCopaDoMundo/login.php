<?php

session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    echo "<script>alert('Por favor, Preencha o campo!')
            window.location.href='index.php'</script>";
    
    exit;
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header("Location: painel.php");
    exit;
} else {
    echo "<script>alert('Por favor, Corriga seu E-mail ou sua Senha!')
    window.location.href='index.php'</script>";
    exit;
}
 
?>