<?php
  require_once("conexao.php");
  
  $query = "SELECT * FROM alunos";
  $result = mysqli_query($conexao, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" type="text/css" href="styleAdmin.css">
  </head>
  <body>
    <h2>Alunos Cadastrados:</h2>
    <ul>
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<li>" . $row["nome"] . " <button>Editar</button> <button>Excluir</button></li>";
        }
      ?>
    </ul>
  </body>
</html>
