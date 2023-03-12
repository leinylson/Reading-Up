<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Formulário de Alunos</title>
      <?php include 'conexao.php'; ?>
      <link rel="stylesheet" type="text/css" href="styleAdmin.css">
  </head>
  <body>

    <h1>Formulário de Alunos</h1>
    <form action="cadastro.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="professor">Professor:</label>
      <select id="professor" name="professor">
        <option value="professor1">Professor 1</option>
        <option value="professor2">Professor 2</option>
        <option value="professor3">Professor 3</option>
      </select><br>

      <button type="submit">Adicionar</button>
      <?php include 'alunos.php'; ?>

    </form>
    <br>
    <h2>Alunos Cadastrados:</h2>
    <ul>
      <li>Aluno 1 <button>Editar</button> <button>Excluir</button></li>
      <li>Aluno 2 <button>Editar</button> <button>Excluir</button></li>
      <li>Aluno 3 <button>Editar</button> <button>Excluir</button></li>
    </ul>
  </body>
</html>
