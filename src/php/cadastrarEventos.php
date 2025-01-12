<?php 

session_start();
include_once('config.php');

$nome_materia = $_POST['materia'];
$start_materia = $_POST['start'];
$cor_materia = $_POST['color'];
$rg = $_POST['rg_pai'];

$adicionarEvent = mysqli_query($mysqli, "INSERT INTO calendar(materia,start,rg_pai, color) VALUES ('$nome_materia','$start_materia','$rg', '$cor_materia')");


?>