<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    // Verificar se o registro existe na tabela 'usuarios'
    $sqlSelectUsuarios = "SELECT * FROM usuarios WHERE id = $id";
    $resultUsuarios = $conexao->query($sqlSelectUsuarios);

    // Verificar se o registro existe na tabela 'mensagens'
    $sqlSelectMensagens = "SELECT * FROM mensagens WHERE id = $id";
    $resultMensagens = $conexao->query($sqlSelectMensagens);

    // Excluir o registro da tabela 'usuarios' se ele existir
    if ($resultUsuarios->num_rows > 0) {
        $sqlDeleteUsuarios = "DELETE FROM usuarios WHERE id = $id";
        $resultDeleteUsuarios = $conexao->query($sqlDeleteUsuarios);

        header('Location: painel.php');
    }

    // Excluir o registro da tabela 'mensagens' se ele existir
    if ($resultMensagens->num_rows > 0) {
        $sqlDeleteMensagens = "DELETE FROM mensagens WHERE id = $id";
        $resultDeleteMensagens = $conexao->query($sqlDeleteMensagens);
       
        header('Location: mensagens.php'); 
    }
}
?>
