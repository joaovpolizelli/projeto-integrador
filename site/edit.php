<?php
include 'cabecalho.php';
include 'menu.php';


if(!empty($_GET['id'])){
 
include_once('conexao.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$result = $conexao->query($sqlSelect);

 if($result->num_rows > 0){
    while($user_data = mysqli_fetch_assoc($result))
    {
        $nome = $user_data['nome'];
        $celular = $user_data['celular'];
        $data_nasc = $user_data['data_nasc'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
    }
        }
    else
  {
    header('Location: painel.php');
  } 

  }
    else
  {
    header('location: painel.php');
  }

?>

<section class="cadastro">CADASTRO</section>
    <div class="containerCadastro">
      <form action="saveEdit.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
          </div>
          <div class="col mb-2">
            <input type="tel" class="form-control emailContato btn-light" name="celular" id="celular" placeholder="Celular" value="<?php echo $celular ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="date" class="form-control nomeContato btn-light" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" id="email" placeholder="E-mail" value="<?php echo $email ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="senha" id="senha" placeholder="Senha" value="<?php echo $senha ?>" required>
          </div>
          <div class="col mb-2">
            <input type="text" class="form-control emailContato btn-light" name="confirm_senha" placeholder="Confirmar Senha" required>
          </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="col-6 btn btn-primary" type="submit" name="update" id="update">Concluir</button>
          </div>
        </div>

        <div class="row">
           <div class="col text-center mt-4">
            <a class="voltarLogin" href="painel.php">Voltar</a>
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