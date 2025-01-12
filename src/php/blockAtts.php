<?php 
session_start();
include_once('config.php');
$rg = $_SESSION['rg'];
$materia = $_POST['materia'];


$sql = $mysqli->query("SELECT * FROM atividades where  materia = '$materia' and rg_pai = '$rg'");

if ($sql->num_rows > 0) {
    $listaData = array();
    
    // Faz o loop para pegar todos os resultados
    while ($result = $sql->fetch_assoc()) {
        // Adiciona cada resultado no array
        $listaData[] = array(
            'num_att' => $result['num_att'],
            'materia' => $result['materia']
        );
    }

    // Codifica o array em JSON
    $jsonArray = json_encode($listaData);

    // Retorna o JSON
    echo $jsonArray;
} else {
    // Caso não haja registros para a consulta
    echo json_encode(array("message" => "Nenhuma atividade encontrada"));
}



?>