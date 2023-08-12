<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tabela de Alunos</title>
</head>

<body>
  <div class="container">
    <?php
    require_once('../../conexao.php');
    $sql = 'SELECT * FROM professor';
    $retorno = $conexao->prepare($sql);
    $retorno->execute();
    ?>
    <h1>Tabela de Alunos</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Idade</th>
          <th>Data de Nascimento</th>
          <th>Endereço</th>
          <th>ESTATUS</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($retorno->fetchAll() as $value) { ?>
          
          <tr class="branco">
            <td> <?php echo $value['id'] ?> </td>
            <td><?php echo $value['nome'] ?></td>
            <td><?php echo $value['idade'] ?></td>
            <td><?php echo $value['datanascimento'] ?></td>
            <td><?php echo $value['endereco'] ?></td>
            <td><?php echo $value['estatus'] ?></td>
            <td>

              <form method="POST" action="../atualizar/altprof.php">
                <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                <button name="alterar" class="editar-button">Editar</button>
              </form>

              <form method=" GET" action="../crudprof.php">
                <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                <button name="excluir" class="excluir-button">Excluir</button>
              </form>

            </td>
          <?php } ?>

      </tbody>
    </table>
    <button type="button"><a style="color: #fff; text-decoration:none;" href="../../index.php">Voltar</a></button>

  </div>
</body>

</html>