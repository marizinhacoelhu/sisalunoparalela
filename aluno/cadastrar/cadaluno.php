<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulário de Cadastro</title>
</head>
<body>
  <div class="container">
    <h1>Cadastro de Aluno</h1>
    <form action="../crudaluno.php" method="GET">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      
      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" required>
      
      <label for="data-nascimento">Data de Nascimento:</label>
      <input type="date" id="data-nascimento" name="data-nascimento" required>
      
      <label for="endereco">Endereço:</label>
      <input type="text" id="endereco" name="endereco" required>
      
      <label for="matricula">Matrícula:</label>
      <input type="text" id="matricula" name="matricula" required>
      
      <div class="buttons">
        <button type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
        <button type="button"><a style="color: #fff; text-decoration:none;" href="../../index.php">Voltar</a></button>
      </div>
    </form>
  </div>
</body>
</html>
