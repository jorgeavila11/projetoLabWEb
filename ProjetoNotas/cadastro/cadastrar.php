<?php
include '../conexao/conexao.php';

$nome = $_POST['NinputText'];
$email = $_POST['NinputEmail'];
$senha = $_POST['NinputPassword'];

    $sql = "insert into usuarios (Nome,Email,Senha) values ('$nome','$email','$senha')";

    if($conn->query($sql) === true){
        echo "Usuario cadastrado com sucesso";
    }else{
        echo "Erro:" . $sql . "<br>" . $conn->error;
    }

mysqli_close($conn);

?>