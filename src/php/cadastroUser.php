<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$nome = $_POST['nome']. " " .$_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$nivel_escola = $_POST['nivel_ensino'];
$ano_Estudo = $_POST['ano_ensino'];
$insti = $_POST['insti'];
$conta = $_POST['tipo_conta'];



$result = mysqli_query($mysqli, "INSERT INTO alunos_usuarios(nome,email,senha,telefone,instuicao_ensino,RG_aluno, nivel_escolaridade, ano_de_estudo, tipo_conta) VALUES ('$nome','$email','$senha','$telefone','$insti','$rg', '$nivel_escola', '$ano_Estudo', '$conta')");

header('Location: entrar.php');
}

?>