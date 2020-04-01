<?php
    include '../conexao/conexao.php';
    session_start();
    $id = "$_SESSION[id]";        
    $nome = $_POST["NomeUsuario"];
    $email = $_POST["EmailUsuario"];


     $sql = "update usuarios set Nome ='$nome', Email = '$email' where Id='$id' ";
     $resultado = $conn->query($sql);
     header('Location: ../home/home.php');  


?>