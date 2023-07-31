<?php

include 'cabecalho.php';
include 'menu.php';

?>

<section class="login">LOGIN</section>
    <div class="containerLogin">
      <form action="validarLogin.php" method="POST">
        <div class="row">
          <div class="col-6 mx-auto mb-2">
            <input type="email" class="form-control nomeContato btn-light" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="row">
          <div class="col-6 mx-auto mb-2">
            <input type="password" class="form-control assuntoContato btn-light" name="senha" placeholder="Senha">
          </div>
        </div>
        
        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="btn btn-primary" type="submit" name="submit" value="Enviar">Iniciar Sessão</button>
          </div>
        </div>


        <div class="row">
           <div class="col text-center mt-4">
            <p class="semLogin">Não tem conta?  <a class="cadastre-se" href="cadastro.php">Cadastre-se!</a></p>
           </div>
        </div>

      </form>
    </div>
  

<div>
    <img id="inicio" src="img/login.jpg" class="img-fluid imagemLogin" alt="">
  </div>

  <?php include 
  'footer.php';
  ?>