<?php 
    $servername = "localhost";
    $database = "notas";
    $username = "jorge";
    $password = "123";
    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);
     //Check connection
    //   if (!$conn) {
    //       die("Falha na conexão " . mysqli_connect_error());
    //   }
    //   echo "Conectado com sucesso";
    
?>