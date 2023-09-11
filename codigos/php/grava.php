<?php
    $nomeUser = $_POST['txtNome'];
    $emailUser = $_POST['txtEmail'];
    $senhaUser = $_POST['txtSenha'];
    $telUser = $_POST['telTelefone'];

    $conn = mysqli('localhost:3307','root','');
    $db = mysqli_select_db('colors');
    $query_select = "SELECT txtEmail FROM usuario WHERE emailUser = '$emailUser'";
    $select = mysql_query($query_select,$conn);
    $array = mysql_fetch_array($select);
    $logarray = $array['txtEmail'];

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
        $query = "INSERT INTO usuario (txtEmail,txtSenha) VALUES ('$emailUSer','$senhaUSer')";
        $insert = mysql_query($query,$connect);

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

