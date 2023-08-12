<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ALUNO</title>

    <link rel="shortcut icon" href="../imagens/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <Section class="crud">
        <?php
        require_once('../conexao.php');

        function mostrarMensagem($message, $buttonText, $buttonLink)
        {
            echo "<div class='message-container'>";
            echo "<p>$message</p>";
            echo "<button class='botao'><a href='$buttonLink'>$buttonText</a></button>";
            echo "</div>";
        }

        if (isset($_GET['cadastrar'])) {
            $nomedisciplina = $_GET["nomedisciplina"];
            $ch = $_GET['ch'];
            $semestre = $_GET['semestre'];
            $idprofessor = $_GET['idprofessor'];

            $sql = "INSERT INTO disciplina(nomedisciplina, ch, semestre, idprofessor) 
            VALUES(:nomedisciplina, :ch, :semestre, :idprofessor)";
            $sqlcombanco = $conexao->prepare($sql);

            $sqlcombanco->bindParam(':nomedisciplina', $nomedisciplina, PDO::PARAM_STR);
            $sqlcombanco->bindParam(':ch', $ch, PDO::PARAM_INT);
            $sqlcombanco->bindParam(':semestre', $semestre, PDO::PARAM_INT);
            $sqlcombanco->bindParam(':idprofessor', $idprofessor, PDO::PARAM_INT);

            if ($sqlcombanco->execute()) {
                mostrarMensagem("A disciplina $nomedisciplina foi incluída com sucesso!", "Voltar", "../index.php");
            }
        }

        if (isset($_POST['update'])) {
            $nomedisciplina = $_POST["nomedisciplina"];
            $ch = $_POST["ch"];
            $semestre = $_POST['semestre'];
            $idprofessor = $_POST['idprofessor'];
            $id = $_POST['id'];

            $sql = "UPDATE disciplina SET nomedisciplina = :nomedisciplina, ch = :ch, semestre = :semestre, idprofessor = :idprofessor WHERE id = :id";
            $stmt = $conexao->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nomedisciplina', $nomedisciplina, PDO::PARAM_STR);
            $stmt->bindParam(':ch', $ch, PDO::PARAM_INT);
            $stmt->bindParam(':semestre', $semestre, PDO::PARAM_INT);
            $stmt->bindParam(':idprofessor', $idprofessor, PDO::PARAM_INT);

            if ($stmt->execute()) {
                mostrarMensagem("A disciplina $nomedisciplina foi alterada com sucesso!", "Voltar", "./listar/listadis.php");
            }
        }

        if (isset($_GET['excluir'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM disciplina WHERE id = :id";
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                mostrarMensagem("A disciplina com ID $id foi excluída!", "Voltar", "./listar/listadis.php");
            }
        }

        ?>

    </Section>
</body>

</html>