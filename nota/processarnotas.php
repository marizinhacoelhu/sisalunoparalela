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
        <h1>Media das Notas</h1>
        <h2>Sua media da disciplina <?php echo $_POST['disciplina'] ?> foi de <?php echo ($_POST['nota1'] + $_POST['nota2']) / 2 ?> </h2>
        <button type="button" class="botao"><a style="color: black; text-decoration:none;" href="../index.php">Voltar</a></button>
    </div>
</body>

</html>