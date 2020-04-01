<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">       
        <link rel="stylesheet" type="text/css" href="estilo-login.css">
        <title>Cadastrar Usuario</title>
    </head>    
    <body class="text-center">
        <?php
            include '../navbar/navbar1.php';
        ?>
       
            <div class="container">
                <form class="form-signin mt-5" method="POST" action ="cadastrar.php">                           
                    <h1 class="h1">Cadastrar Usuário</h1>
                    <label for="inputEmail" class="sr-only">Nome Completo</label>
                    <input type="text" id="inputText" name="NinputText" class="form-control m-1" placeholder="Nome Completo" required autofocus>
                    <label for="inputEmail" class="sr-only">Endereço de email</label>
                    <input type="email" id="inputEmail" name="NinputEmail" class="form-control m-1" placeholder="Seu email" required autofocus>
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" id="inputPassword" name="NinputPassword" class="form-control m-1" placeholder="Senha" required>                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>                                   
                </form>
            </div>
            </nav>        
    </body>

</html>