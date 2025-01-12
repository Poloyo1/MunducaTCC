<?php 

session_start();
include_once('config.php');
//$foto = $_POST['image-field'];
$newEmail = $_POST['Novo_Email'];
$newName = $_POST['Novo_Nome'];
$newPass = password_hash($_POST['Nova_Senha'], PASSWORD_DEFAULT); 
$email = $_SESSION['email'];

$requestLogin = mysqli_query($mysqli, "SELECT * FROM pais_responsaveis WHERE email = '$email'");
$result = mysqli_fetch_assoc($requestLogin);
if($result){

    $rg = $result['rg_pai'];
    $requestATT = mysqli_query($mysqli, "UPDATE pais_responsaveis SET nome = '$newName',  email = '$newEmail', senha = '$newPass' WHERE rg_pai = '$rg'");
    $_SESSION['email'] = $newEmail;
    $_SESSION['senha'] = $newPass;
    $sql = $mysqli->query("SELECT * FROM pais_responsaveis where email = '$email'");
    $result =  mysqli_fetch_assoc($sql);
    echo  $_SESSION['email']; 
}

?>