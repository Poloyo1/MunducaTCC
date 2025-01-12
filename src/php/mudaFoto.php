<?php 

session_start();
include_once('config.php');
$rg = $_SESSION['rg'];
$foto = $_POST['animal'];
$sql = $mysqli->query("UPDATE criancas SET foto_perfil = 'imgs/perfil/$foto.png' where  rg_pai = '$rg'");
?>