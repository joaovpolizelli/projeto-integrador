<?php
include 'cabecalho.php';
include 'menu.php';
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}
$logado = $_SESSION['email'];
?>
<style>
body{
    text-align: center;
}
</style>
<h1 class="display-2 mb-4 painelControle text-center">Painel de Controle</h1>

<?php
echo "<h3>Bem vindo <u>$logado</u></h3>";
?>

<div class="text-center">

<a href="sair.php" class="btn btn-danger col-2 mt-4">Sair do Painel</a>
</div>

<?php
include 'footer.php';
?>