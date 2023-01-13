<?php
session_start();
include("conexao.php");


if(empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['nome'])) {
    echo "<script>alert('Por favor, Preencha o campo!')
            window.location.href='index.php'</script>";
    
    exit;

}


$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){

    echo "<script>alert('Usuário já existe!')
            window.location.href='index.php'</script>";
    exit;
}

$sql = "INSERT INTO usuario (email, senha, nome) VALUES ('$email', '$senha', '$nome')";

if($conexao->query($sql) === TRUE){

    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
