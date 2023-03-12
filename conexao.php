<?php
  $host = "localhost";
  $user = "root";
  $senha = "";
  $bd = "escola";
  
  $conexao = mysqli_connect($host, $user, $senha, $bd);
  
  if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    exit();
  }
?>
