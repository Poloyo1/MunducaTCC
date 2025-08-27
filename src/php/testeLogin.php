<?php
session_start();
    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
      

        $sql = "SELECT * FROM pais_responsaveis Where email = '$email' LIMIT 1";
        $result = $mysqli->query($sql);
        $resultFetch = mysqli_fetch_assoc($result) ;
        $_SESSION['rg'] = $resultFetch['rg_pai'];

        if(mysqli_num_rows($result) < 1){
          unset($_SESSION['email']);
          unset($_SESSION['senha']);
          header('Location: ../cadastro.php');
        }
        else{
          if(password_verify($senha, $resultFetch['senha'])){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $resultFetch['senha'];
            
            $_SESSION['tipo_conta'] = "pai/responsavel";
            header('Location: ../userEscolha.php');
          }

        } 
      }
    //else
    //{
    //    header('Location: config.php');
    //}
        

?>