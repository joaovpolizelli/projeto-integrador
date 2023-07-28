<?php

include "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$sql_inserir_contato = "insert INTO contato(nome, email, assunto, mensagem) values('$nome', '$email', '$assunto', '$mensagem')";

$um_usuario = mysqli_query($conexao, $sql_inserir_contato);

mysqli_close($conexao);

header("Location: index.php");
exit;
?>