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

if(!empty($_GET['search']))
{
  $data = $_GET['search'];
  $sql = "SELECT * FROM mensagens WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or assunto LIKE '%$data%' ORDER BY id DESC";
}
else{
  $sql = "SELECT * FROM mensagens ORDER BY id DESC";
}

$corDoTexto = "rgb(255, 255, 153)";


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

  .box-search{
    display: flex;
    justify-content: center;
    gap: .5%
  }



</style>

<nav class="navbar">
  <div class="container-fluid">
    <p class="navbar-brand mb-5 "><h1 class="display-3" style="color: white;">PAINEL DE CONTROLE GERAL</h1></p>
  </div>

  <div class="row mx-auto mt-3">
        <div class="col">
            <a href="painel.php" class="btn btn-primary me-5 text-white">CADASTROS</a>
        </div>
        <div class="col">
            <a href="sair.php" class="btn btn-primary me-5 text-white">AGENDAMENTOS</a>
        </div>
        <div class="col">
            <a href="mensagens.php" class="btn btn-primary  text-white">MENSAGENS</a>
        </div>
    </div>
</nav>

<div class="linhaPretaPainel mt-3">
</div>

<h1 class="display-4 mb-4 cadastrosPainel text-center">MENSAGENS</h1>

<?php
echo "<h5>Bem vindo <u><span style=\"color: $corDoTexto;\">$logado</span></u></h5>";?>
<br>
<div class="box-search">
  <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
  <button onclick="searchData()" class="btn btn-dark">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
  </button>
</div>

<div class="text-center">
<a href="sair.php" class="sairPainel btn btn-danger col-2 mt-4">Sair do Painel</a>
</div>

<div class="m-5">
<table class="table text-white table-bg">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Assunto</th>
        <th scope="col">Mensagem</th>
        <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php
while($user_data = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$user_data['id']."</td>";
echo "<td>".$user_data['nome']."</td>";
echo "<td>".$user_data['email']."</td>";
echo "<td>".$user_data['assunto']."</td>";
echo "<td>".$user_data['mensagem']."</td>";

echo "<td>

<a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
</svg>
</a>
</td>";
echo "</tr>";
}
  ?>
  </tbody>
</table>
</div>

<script>
var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event) {
  if(event.key == "Enter")
{
  searchData();
}
});

function searchData()
{
  window.location = 'mensagens.php?search='+search.value;
}
  </script>
