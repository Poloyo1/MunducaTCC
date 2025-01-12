<?php
// Incluir o arquivo de conexão com o banco de dados
include 'config.php';
session_start();

// Consultar as configurações no banco de dados
$email = $_SESSION['email'];

$requestLogin = mysqli_query($mysqli, "SELECT * FROM pais_responsaveis WHERE email = '$email'");
$result = mysqli_fetch_assoc($requestLogin);
if($result){

    $rg = $result['rg_pai'];
    $configquery = mysqli_query($mysqli,"SELECT * FROM configurações WHERE rg_pai = '$rg'");
    $resultconfig = mysqli_fetch_assoc($configquery);
    if($resultconfig){
        $listaData = array($resultconfig['font_size'], $resultconfig['alto_contra'], $resultconfig['tip_daltonismo']);
        $jsonArray = json_encode($listaData);
        
        echo $jsonArray;
    }

}
?>