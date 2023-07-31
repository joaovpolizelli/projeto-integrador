<?php
include 'cabecalho.php';
include 'menu.php';


if(isset($_POST['submit'])){
 
include_once('conexao.php');


$nome = $_POST['nome'];
$celular = $_POST['celular'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,celular,data_nasc,email,senha) VALUES('$nome','$celular','$data_nasc','$email','$senha')");

header('location: login.php');
}

?>

<section class="cadastro">CADASTRO</section>
    <div class="containerCadastro">
      <form action="cadastro.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" id="nome" placeholder="Nome" required>
          </div>
          <div class="col mb-2">
            <input type="tel" class="form-control emailContato btn-light" name="celular" id="celular" placeholder="Celular" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="date" class="form-control nomeContato btn-light" name="data_nasc" id="data_nasc" required>
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" id="email" placeholder="E-mail" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="password" class="form-control nomeContato btn-light" name="senha" id="senha" placeholder="Senha" required>
          </div>
          <div class="col mb-2">
            <input type="password" class="form-control emailContato btn-light" name="confirm_senha" placeholder="Confirmar Senha" required>
          </div>
        </div>
        
        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="col-6 btn btn-primary" type="submit" name="submit">Concluir</button>
          </div>
        </div>

        <div class="row">
           <div class="col text-center mt-4">
            <a class="voltarLogin" href="login.php">Voltar</a>
           </div>
        </div>

      </form>
    </div>
  </div>

<div>
    <img id="inicio" src="img/cadastro.jpg" class="img-fluid imagemCadastro" alt="">
  </div>

  <?php include 
  'footer.php';
  ?>