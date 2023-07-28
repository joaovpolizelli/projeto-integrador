<?php

$dbHost = 'Localhost'; 
$dbUsuario = 'root';
$dbSenha = '';
$dbName = 'db_barbearia';

$conexao = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbName);

/*
 if($conexao->errno) {
  echo "ERRO";
}else {
  echo "Conexão efetuada com sucesso!";
} 
*/



?>