<?php 
session_start();
include_once('config.php');
$rg = $_SESSION['rg'];
$materia = $_POST['materia'];



$sql = $mysqli->query("SELECT * FROM calendar where  materia = '$materia' and rg_pai = '$rg' LIMIT 1");
$result = mysqli_fetch_assoc($sql);
if ($sql->num_rows > 0) {
    echo $result['color'];
} else {
    echo json_encode(array("message" => "Nenhuma atividade encontrada"));
}



?>