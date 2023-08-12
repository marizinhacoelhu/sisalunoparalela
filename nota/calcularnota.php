<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Notas</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div style="display: flex; flex-direction:column;">

        <h1>Registro de Notas</h1>
        <form action="processarnotas.php" method="POST">
            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="disciplina" required>
            <br>
            <label for="nota1">Nota 1:</label>
            <input type="text" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
            <br>
            <label for="nota2">Nota 2:</label>
            <input type="text" id="nota2" name="nota2" min="0" max="10" step="0.1" required>
            <br>
            <button class="botao" type="submit">Calcular</button>
        </form>
    </div>
</body>

</html>