<?php

include_once('conexao.php');

if(isset($_POST['update']))
{
$id = $_POST['id'];
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlUpdate = "UPDATE usuarios SET nome='$nome',celular='$celular',data_nasc='$data_nasc',email='$email',senha='$senha' WHERE id='$id'";

$result = $conexao->query($sqlUpdate);
}
header('location: painel.php');

?>