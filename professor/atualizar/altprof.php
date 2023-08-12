<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Atualização de Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once('../../conexao.php');

        $id = $_POST['id'];

        $sql = "SELECT * FROM professor WHERE id = :id";
        $retorno = $conexao->prepare($sql);
        $retorno->bindParam(':id', $id, PDO::PARAM_INT);
        $retorno->execute();
        $array_retorno = $retorno->fetch();

        $nome = $array_retorno['nome'];
        $idade = $array_retorno['idade'];
        $endereco = $array_retorno['endereco'];
        $datanascimento = $array_retorno['datanascimento'];
        $cpf = $array_retorno['cpf'];
        $estatus = $array_retorno['estatus'];
    ?>

    <div class="container">
        <h1>Atualização de Professor</h1>
        <form method="POST" action="../crudprof.php" class="form">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
            
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" value="<?php echo $idade ?>" required>
            
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" required>
            
            <label for="data-nascimento">Data Nascimento:</label>
            <input type="date" name="data-nascimento" id="data-nascimento" value="<?php echo $datanascimento ?>" required>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" required>

            <label for="estatus">Estatus:</label>
            <input type="text" name="estatus" id="estatus" value="<?php echo $estatus ?>" required>
            
            <button type="submit" name="update">Alterar</button>
        </form>
    </div>
</body>
</html>
