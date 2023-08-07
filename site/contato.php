<?php

if(isset($_POST['submit'])){
 
    include_once('conexao.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $result = mysqli_query($conexao, "INSERT INTO mensagens(nome,email,assunto,mensagem) VALUES('$nome','$email','$assunto','$mensagem')");

    header('location: index.php?#contato');
    }
    

  
?>

<div id="contato" class="imagemContato">
    <section class="contato">CONTATO</section>
    <div class="containerContato">
      <form action="contato.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" placeholder="Nome" required>
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control assuntoContato btn-light" name="assunto" placeholder="Assunto" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <textarea class="form-control mensagemContato btn-light" col="20" rows="4" name="mensagem" placeholder="Mensagem" required></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2 text-center">
            <button class="btn btn-secondary" onclick="exibirAlerta(event)" name="submit" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
  
  <script>
 /* function exibirAlerta(event) {
    event.preventDefault();

    swal({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
    }).then((value) => {
      // Se o usuário clicar em "OK" no alerta, envia o formulário
      if (value) {
        document.querySelector('form').submit();
      }
    });

  
  } */
</script>

