<?php
//conectar ao banco de dados
  $host = "localhost:3307";
  $db_user = "root";
  $db_password = "";
  $db_name = "colors";

  $conn = new mysqli($host, $db_user, $db_password, $db_name);

  if($conn->connect_error){
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

//receber os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];

//inserir os dados no banco de dados
  $sql = "INSERT INTO usuario (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

  if($conn->query($sql) === TRUE){
    echo "Dados inseridos com sucesso!";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }

  $conn->close();
  ?>
