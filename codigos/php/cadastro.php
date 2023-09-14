<?php
  include_once ("cadastroconexao.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/ColorsStyle.css">
  <title>Cadastro Colors</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src= "C:\Users\0057140\Downloads\TCC (1)\TCC\TCC\Imagem\logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Colors
    </a>
   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="mr-auto"></div>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="inicio.html">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        </li>
      </ul>
    </div>
  </nav>

  <!--cabou banner-->
<br>
  <h1 style="text-align: center; color: rgb(139, 85, 48)">Faça seu cadastro!</h1>

    <form  method="POST" action="cadastro.php" style = "text-align: center;  color: rgb(139, 85, 48)">
    
    <label for = "" >Nome</label> <br>
    <input type= "text" name="txtNome" required autofocus placeholder="Informe seu nome"> <br><br>
    <label for = "" >Email</label> <br>
    <input type= "text" name="txtEmail" required placeholder = "Informe seu e-mail"> <br><br>
    <label for = "" >Senha</label> <br>
    <input type= "password" name="txtSenha" required placeholder="Informe sua senha"> <br><br>
    <label for = "" >Confirme sua senha</label> <br>
    <input type= "password" name="txtConfSenha" required placeholder = "Confirme sua senha"> <br><br>
    <label for = "" >Telefone</label> <br>
    <input type= "number" name="telTelefone" required autofocus placeholder="Informe número de celular"> <br><br>
    <label for = "" >Data de nascimento</label> <br>
    <input type= "date" name="DateNasc" required autofocus placeholder=""> <br><br>
    <?php
          $nomeUser = $_POST['txtNome'];
          $emailUser = $_POST['txtEmail'];
          $senhaUser = $_POST['txtSenha'];
          $telUser = $_POST['telTelefone'];
      
          $conn = mysqli('localhost:3307','root','');
          $db = mysqli_select_db('colors');
          $query_select = "SELECT emailUser FROM usuario WHERE emailUser = '$emailUser'";
          $select = mysql_query($query_select,$conn);
          $array = mysql_fetch_array($select);
          $logarray = $array['emailUser'];
      
        if($emailUser == "" || $emailUser == null){
          echo"<script language='javascript' type='text/javascript'>
          alert('O campo login deve ser preenchido');window.location.href='
          cadastro.html';</script>";
      
          }else{
            if($logarray == $emailUser){
      
              echo"<script language='javascript' type='text/javascript'>
              alert('Esse login já existe');window.location.href='
              cadastro.html';</script>";
              die();
      
            }else{
              $query = "INSERT INTO usuario (nomeUser, emailUSer,senhaUser, telUser) VALUES ('$nomeUser','$emailUser','$senhaUser', '$telUser')";
              $insert = mysql_query($query,$conn);
      
              if($insert){
                echo"<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.
                href='login.html'</script>";
              }else{
                echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse usuário');window.location
                .href='cadastro.html'</script>";
              }
            }
          }
    ?>

  </form >
  <p style="text-align: center;">
    <a href="quizz.html">
      <input type="submit" style="height: 500; width: 400; background-color: blanchedalmond; border: none; color: #8b5530;" value="Concluir!">

    </a>
    <footer class="main_footer">
      <div class="content">
        <div class="colfooter">
          <h3 class="titleFooter"> Menu</h3>
  
          <ul>
            <li><a href="#" title="Página Inícial">Página Inícial</a></li>
            <li><a href="#" title="Sobre nós">Sobre nós</a></li>
            <li><a href="#" title="Tutorial">Tutorial</a></li>
            <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
          </ul>
        </div><!--Col Footer 1-->
  
        <div class="colfooter">
          <h3 class="titleFooter"> Contato</h3>
          <p style="color: rgb(139, 85, 48);"><i class="icon icon-mail"></i> colors@gmail.com </p>
          <p style="color: #8b5530;"><i class="icon icon-phone"></i> 31 90000-0000</p>
          <p style="color: rgb(139, 85, 48);"><i class="icon icon-whatsapp"></i> 31 90000-0000</p>
        </div><!--Col Footer 2-->
  
        <div class="colfooter">
          <h3 class="titleFooter"> Redes Sociais</h3>
          <div>
            <a href="https://www.instagram.com/co.colors_/" class="botao"><img src="../Imagem/instagram (3).png"></a>
            <a href="#" class="botao"><img src="../Imagem/linkedin.png"></a>
            <a href="#" class="botao"><img src="../Imagem/youtube.png"></a>
            <a href="#" class="botao"><img src="../Imagem/tiktok (1).png"></a>
          </div>
  
        </div><!--Col Footer 3-->
  
        <div class="clear"></div>
      </div><!--Contant-->
  
      <div class="main_footer_copy">
        <p class="m-b-footer" ; style="color: #8b5530;"> Colors Company - 2023, todos os direitos reservados.</p>
        <p class="by" ; style="color: #8b5530;"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="#"
            title="Heloá"><br>Heloá dos Santos, Lara Nogueira e Marcella Letícia</a></p>
      </div>
    </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- cabou cabeçalho-->

</body>

</html>

