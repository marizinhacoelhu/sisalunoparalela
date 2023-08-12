<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        require_once('../../conexao.php');
        $retorno = $conexao->prepare('SELECT * FROM disciplina');
        $retorno->execute();
        ?>

        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMEDISCIPLINA</th>
                        <th>CH</th>
                        <th>SEMESTRE</th>
                        <th>IDPROFESSOR</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($retorno->fetchAll() as $value) { ?>
                        <tr class="branco">
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['nomedisciplina'] ?></td>
                            <td><?php echo $value['ch'] ?></td>
                            <td><?php echo $value['semestre'] ?></td>
                            <td><?php echo $value['idprofessor'] ?></td>
                            <td>
                                <form method="POST" action="../atualizar/altdis.php">
                                    <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                    <button name="alterar" type="submit" class="option-button">Alterar</button>
                                </form>
                                <form method="GET" action="../cruddis.php">
                                    <input name="id" type="hidden" value="<?php echo $value['id']; ?>" />
                                    <button name="excluir" type="submit" class="option-button">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="voltar">
        <button type="button"><a style="color: #fff; text-decoration:none;" href="../../index.php">Voltar</a></button>

        </div>
    </div>
</body>

</html>