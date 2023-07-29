<?php
include 'cabecalho.php';

session_start();
include_once('conexao.php');

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}

$logado = $_SESSION['email'];
$corDoTexto = "rgb(255, 255, 153)";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);


?>

<style>
body{
  background: linear-gradient(to right, rgb(0, 0, 0), rgb(255, 255, 255));

    color: white;
    text-align: center;
    position: relative;
    font-family: 'Lora', sans-serif;
}

@media screen and (min-width: 0px) and (max-width: 700px) {
    body {
      position: absolute;
      font-family: 'Lora', sans-serif;
      background-color:  gray;
    color: white;
    }
  }

</style>

<nav class="navbar">
  <div class="container-fluid">
    <p class="navbar-brand mb-5 "><h1 class="display-3" style="color: white;">PAINEL DE CONTROLE GERAL</h1></p>
  </div>

  <div class="row mx-auto mt-3">
        <div class="col">
            <a href="sair.php" class="btn btn-primary me-5 text-white">CADASTROS</a>
        </div>
        <div class="col">
            <a href="sair.php" class="btn btn-primary me-5 text-white">AGENDAMENTOS</a>
        </div>
        <div class="col">
            <a href="sair.php" class="btn btn-primary  text-white">MENSAGENS</a>
        </div>
    </div>
</nav>

<div class="linhaPretaPainel mt-3">
</div>

<h1 class="display-4 mb-4 cadastrosPainel text-center">CADASTROS</h1>

<?php
echo "<h5>Bem vindo <u><span style=\"color: $corDoTexto;\">$logado</span></u></h5>";?>

<div class="text-center">
<a href="sair.php" class="sairPainel btn btn-danger col-2 mt-4">Sair do Painel</a>
</div>

<div class="m-5">
<table class="table text-white table-bg">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Celular</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">E-mail</th>
        <th scope="col">Senha</th>
        <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php
while($user_data = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$user_data['id']."</td>";
echo "<td>".$user_data['nome']."</td>";
echo "<td>".$user_data['celular']."</td>";
echo "<td>".$user_data['data_nasc']."</td>";
echo "<td>".$user_data['email']."</td>";
echo "<td>".$user_data['senha']."</td>";
echo "<td>Ações</td>";
echo "</tr>";
}

  ?>
  </tbody>
</table>
</div>