<?php
session_start();

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){   
    
// Acessa
include_once('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

/* Teste se está funcionando
 print_r('Email: ' . $email);
print_r('<br>');
print_r('Senha: ' . $senha); */

$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$result = $conexao->query($sql);

if(mysqli_num_rows($result) < 1)
{
    $_SESSION['msg'] = "<div class='alert alert-danger text-center'>Login ou senha incorreto!</div>"; header("Location: login.php");
}else {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha; 
header('location: painel.php');
}
  }
  else
  {
    //Não acessa
    header('location: login.php');
}

?>
