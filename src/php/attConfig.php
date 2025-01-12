<?php 
session_start();
include_once('config.php');

$font_size = $_POST['font-size'];
$alto_contra = $_POST['alto_contra'];
$tip_daltonismo = $_POST['tip_daltonismo'];
$email = $_SESSION['email'];

$requestLogin = mysqli_query($mysqli, "SELECT * FROM pais_responsaveis WHERE email = '$email'");
$result = mysqli_fetch_assoc($requestLogin);

if($result){

    $rg = $result['rg_pai'];
    $requestATT = mysqli_query($mysqli, "UPDATE configurações SET font_size = '$font_size',  alto_contra = '$alto_contra', tip_daltonismo = '$tip_daltonismo' WHERE rg_pai = '$rg'");
   
}


?>