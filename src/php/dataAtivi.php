<?php 

session_start();
include_once('config.php');

$data_atual = $_POST['date'];

$rg = $_SESSION['rg'];
$data_ativ = mysqli_query($mysqli, "SELECT * FROM calendar WHERE start = '$data_atual' and rg_pai = '$rg'");

$atividades= [];

if (mysqli_num_rows($data_ativ) < 1){
    $listaData = array("Sem atividade para Hoje");
    $jsonArray = json_encode($listaData);
    echo $jsonArray;
}else{
    while($row =  mysqli_fetch_assoc($data_ativ)){
        $atividades[] = [
            'materia' => $row['materia'],
            'color' => $row['color'],  
        ];

    }
    $jsonArray = json_encode($atividades);
    echo  $jsonArray;
}
?>