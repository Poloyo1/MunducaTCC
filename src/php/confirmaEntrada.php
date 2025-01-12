<?php 

session_start();
include_once('config.php');
$rg = $_SESSION['rg'];
$email = $_SESSION['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM pais_responsaveis Where email = '$email' LIMIT 1";
$result = $mysqli->query($sql);
$resultFetch = mysqli_fetch_assoc($result) ;
if(password_verify($senha, $resultFetch['senha'])){
    echo 1;
  }else{
    echo 'Senha Incorreta';
  }
?>