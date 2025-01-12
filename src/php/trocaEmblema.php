<?php 
include 'config.php';
session_start();

// Consultar as configurações no banco de dados
$rg = $_SESSION['rg'];


$emblema = $_POST['emblema'];
$valor = 25;

$query_crianca = mysqli_query($mysqli, "SELECT * FROM criancas where rg_pai = '$rg'");
$resultcri = mysqli_fetch_assoc($query_crianca);

if($resultcri['pontos'] >= 25){
    
 
    $pontosCri = mysqli_query($mysqli, "SELECT * FROM emblemas WHERE rg_pai = '$rg' and emblema = '$emblema' ");
    $result = mysqli_fetch_assoc($pontosCri);
    
    
    if($result){
        echo 1;
    }else{
        $pontuacao =  $resultcri['pontos'] - $valor ;
        $adicionarEvent = mysqli_query($mysqli, "UPDATE criancas SET pontos = '$pontuacao' WHERE rg_pai = '$rg'");
        $adicionarEvent = mysqli_query($mysqli, "INSERT INTO emblemas(rg_pai,emblema) VALUES ('$rg','$emblema')");
        echo $emblema;
    }
} else{
    echo 0;
}








?>