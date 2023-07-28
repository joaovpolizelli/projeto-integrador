<?php
function redirect($url) {
    header("Location: $url");
    exit();
  }
  
  // Verificar se um parâmetro de redirecionamento foi passado na URL
  if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
  
    // Redirecionar para a página index.php
    if ($redirect === 'home' || $redirect === 'agendar' || $redirect === 'quem-somos' || $redirect === 'servicos' || $redirect === 'galeria' || $redirect === 'contato' || $redirect === 'localizacao') {
      redirect('index.php#' . $redirect);
    }
  }

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
            <button class="btn btn-dark" type="submit" name="submit" value="Enviar">Iniciar Sessão</button>
          </div>
        </div>


        <div class="row">
           <div class="col text-center mt-5">
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