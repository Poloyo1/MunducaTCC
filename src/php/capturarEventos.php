<?php 

session_start();
include_once('config.php');
$logado = $_SESSION['email'];
$sql = $mysqli->query("SELECT * FROM pais_responsaveis where email = '$logado'");
$result =  mysqli_fetch_assoc($sql);
$rg = $result['rg_pai'];
$query_events = mysqli_query($mysqli, "SELECT * FROM calendar where rg_pai = '$rg'");


$eventos= [];

while($row = mysqli_fetch_assoc($query_events)){
    $eventos[] = [
        'title' => $row['materia'],
        'color' => $row['color'],
        'start' => $row['start'],
     
    ];
}
echo json_encode($eventos);
?>