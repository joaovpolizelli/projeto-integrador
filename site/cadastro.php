<?php
include 'cabecalho.php';
include 'menu.php';
?>

<section class="cadastro">CADASTRO</section>
    <div class="containerCadastro">
      <form action="cadastro.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" placeholder="Nome">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="celular" placeholder="Celular">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nomeUsuario" placeholder="Nome de Usuário">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="senha" placeholder="Senha">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="confirmSenha" placeholder="Confirmar Senha">
          </div>
        </div>
        
        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="btn btn-danger" type="submit">Concluir</button>
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