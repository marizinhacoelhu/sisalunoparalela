<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Disciplina</h1>
        <form method="GET" action="../cruddis.php" class="form">
            <label for="nomedisciplina">Nome Disciplina</label> <br>
            <input type="text" name="nomedisciplina" id="nomedisciplina" class="input-field"> <br>

            <label for="ch">CH</label><br>
            <input type="text" name="ch" id="ch" class="input-field"> <br>
            
            <label for="semestre">Semestre</label> <br>
            <input type="text" name="semestre" id="semestre" class="input-field"> <br>
            
            <label for="idprofessor">ID Professor</label> <br>
            <input type="text" name="idprofessor" id="idprofessor" class="input-field"> <br>

            <button type="submit" name="cadastrar" class="submit-button">Cadastrar</button>
            <button type="button"><a style="color: #fff; text-decoration:none;" href="../../index.php">Voltar</a></button>

        </form>
    </div>
</body>
</html>