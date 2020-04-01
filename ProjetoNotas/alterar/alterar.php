<html>
<head>
    <meta charset="utf-8">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>NavBar</title>
    </head>
<?php
    include '../conexao/conexao.php';
    session_start();
    $id = "$_SESSION[id]";    
    
     $sql = "select Nome,Email from usuarios where id='$id'";
     $resultado = $conn->query($sql);
     $row = $resultado->fetch_assoc();     
?>
<body class='text-center'>
    <div class="container">                
        <h2>Alterar o nome de Usuário e Email</h2>
        <form method="POST" action ="altera.php">
            <input type="text" id="Nome" name="NomeUsuario" class="form-control m-1" value="<?php echo $row["Nome"];?>" >
            <input type="text" id="Email" name="EmailUsuario" class="form-control m-1" value="<?php echo $row["Email"];?>" >
            <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar Alteração</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>