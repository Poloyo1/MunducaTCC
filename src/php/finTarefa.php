<?php 
include 'config.php';
session_start();

// Consultar as configurações no banco de dados
$rg = $_SESSION['rg'];
$materia = $_POST['materia'];
$pontos = $_POST['pontos'];
$atividade = $_POST['atividade'];


$adicionarEvent = mysqli_query($mysqli, "INSERT INTO atividades(materia,pontos,rg_pai, num_att) VALUES ('$materia','$pontos','$rg', '$atividade')");



$pontosCri = mysqli_query($mysqli, "SELECT * FROM criancas WHERE rg_pai = '$rg'");
$result = mysqli_fetch_assoc($pontosCri);

$pontuacao = $pontos + $result['pontos'];
$adicionarEvent = mysqli_query($mysqli, "UPDATE criancas SET pontos = '$pontuacao' Where rg_pai = '$rg' ");


?>