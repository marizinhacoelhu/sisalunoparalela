<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="box">

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET['data-nascimento'];
        $endereco = $_GET['endereco'];
        $estatus = $_GET['estatus'];
        $cpf = $_GET['cpf'];


        ##codigo SQL
        $sql = "INSERT INTO professor(nome,idade,datanascimento,endereco,estatus,cpf) 
        VALUES('$nome','$idade', '$datanascimento', '$endereco','$estatus', '$cpf')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!";
                 
                echo " <button class='botao' ><a href='../index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST['data-nascimento'];
    $endereco = $_POST['endereco'];
    $estatus = $_POST['estatus'];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, datanascimento= :datanascimento,  endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_INT);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='botao' ><a href='./listar/listaprof.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $id foi excluido!!!"; 

            echo " <button class='botao'><a href='./listar/listaprof.php'>voltar</a></button>";
        }

}

        
?>


</div>
</body>
</html>