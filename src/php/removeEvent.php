<?php 
session_start();
include_once('config.php');
$rg = $_SESSION['rg'];
$start = $_POST['start'];

$adicionarEvent = mysqli_query($mysqli, "DELETE FROM calendar WHERE start = '$start' AND rg_pai = '$rg'");
echo $start;
?>