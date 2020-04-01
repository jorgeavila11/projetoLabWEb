<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">       
        <title>Index</title>
    </head>
    <body>
      
      <?php
        include '../navbar/navbar2.php';
        //iniciando a sessão do usuario logado        
        session_start();      
      ?>  

          <main role="main" class="container mt-5 text-center">      
            <div class="starter-template">
              <h1>Home</h1>
              <p class="lead">Bem vindo a pagina home do: <br><a href="../alterar/alterar.php"><?php echo "$_SESSION[login]" . "<br>" ?></a></p>
              <p class="lead">ID:<?php echo "$_SESSION[id]"?></p>              
            </div>    
          </main>
                  
    </body>

</html>