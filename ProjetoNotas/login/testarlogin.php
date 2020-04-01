<html>

<?php

include '../conexao/conexao.php';

$login = $_POST['NinputEmail'];
$senha = $_POST['NinputPassword'];


$sql = 'select Email,Senha from usuarios';
$cont = 0;



$resultado = $conn->query($sql);

  if ($resultado->num_rows > 0){
      while($row = $resultado->fetch_assoc()){        
          $log = $row["Email"];         
          $sen = $row["Senha"];         
          if(($login == $log ) and ($senha == $sen) )  {
                $cont++;                         
            }    
      }
  }else{
      echo "0 Resultados";
  }
  if($cont > 0){
      $sql = "select Id from usuarios where Email ='$login'";
      $resultado = $conn->query($sql);
      $row = $resultado->fetch_assoc();
      $res = $row["Id"];      
      //criando variaveis de sessão para guardar o login e id do usuario logado  
      session_start();
      $_SESSION[login]=$login;
      $_SESSION[id] = $res;
      header('Location: ../home/home.php');  

    }else{
      echo "<script type'javascript'>alert('Erro no login');
      window.location='../login/login.php'</script>";     
    }




//  if(($login == $log ) and ($senha == $sen) )  {
//      echo "Login correto";

//  }else{
//      echo "Login incorreto";
//  }

 mysqli_close($conn);


?>
</html>