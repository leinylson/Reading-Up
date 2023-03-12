<?php
  require_once("conexao.php");
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Processar dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $professor = $_POST["professor"];
    
    $query = "INSERT INTO alunos (nome, email, professor) VALUES ('$nome', '$email', '$professor')";
    
    if (mysqli_query($conexao, $query)) {
      echo "Aluno cadastrado com sucesso!";
    } else {
      echo "Erro ao cadastrar aluno: " . mysqli_error($conexao);
    }
  } else {
    // Exibir formulário
    echo "Exibindo formulário..";
  }
?>
