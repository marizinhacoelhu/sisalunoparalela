<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Atualização de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once('../../conexao.php');

        $id = $_POST['id'];

        $sql = "SELECT * FROM aluno WHERE id = :id";
        $retorno = $conexao->prepare($sql);
        $retorno->bindParam(':id', $id, PDO::PARAM_INT);
        $retorno->execute();
        $array_retorno = $retorno->fetch();

        $nome = $array_retorno['nome'];
        $idade = $array_retorno['idade'];
        $endereco = $array_retorno['endereco'];
        $matricula = $array_retorno['matricula'];
    ?>

    <div class="container">
        <h1>Atualização de Aluno</h1>
        <form method="POST" action="../crudaluno.php" class="form">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
            
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" value="<?php echo $idade ?>" required>
            
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" required>
            
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" id="matricula" value="<?php echo $matricula ?>" required>
            
            <button type="submit" name="update">Alterar</button>
        </form>
    </div>
</body>
</html>
