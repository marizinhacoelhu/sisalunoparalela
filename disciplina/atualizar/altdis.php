<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Atualização de Disciplina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once('../../conexao.php');

        $id = $_POST['id'];

        $sql = "SELECT * FROM disciplina WHERE id = :id";
        $retorno = $conexao->prepare($sql);
        $retorno->bindParam(':id', $id, PDO::PARAM_INT);
        $retorno->execute();
        $array_retorno = $retorno->fetch();

        $nomedisciplina = $array_retorno['nomedisciplina'];
        $ch = $array_retorno['ch'];
        $semestre = $array_retorno['semestre'];
        $idprofessor = $array_retorno['idprofessor'];
    ?>

    <div class="container">
        <h1>Formulário de Atualização de Disciplina</h1>
        <form method="POST" action="../cruddis.php" class="form">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
            <label for="nomedisciplina">Nome Disciplina</label> <br>
            <input type="text" name="nomedisciplina" id="nomedisciplina" class="input-field" value="<?php echo $nomedisciplina ?>" required> <br>
            
            <label for="ch">CH</label> <br>
            <input type="text" name="ch" id="ch" class="input-field" value="<?php echo $ch ?>" required> <br>
            
            <label for="semestre">Semestre</label> <br>
            <input type="text" name="semestre" id="semestre" class="input-field" value="<?php echo $semestre ?>" required> <br>
            
            <label for="idprofessor">ID Professor</label> <br>
            <input type="text" name="idprofessor" id="idprofessor" class="input-field" value="<?php echo $idprofessor ?>" required> <br>

            <button type="submit" name="update" class="submit-button">Alterar</button>
        </form>
    </div>
</body>
</html>
