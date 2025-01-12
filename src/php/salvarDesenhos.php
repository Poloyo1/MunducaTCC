<?php
session_start();
include_once('config.php');
$rg = $_SESSION['rg'];

// Verifica se a imagem foi enviada via POST
if(isset($_POST['image'])) {
    // Recebe a string Base64 da imagem
    $imageData = $_POST['image'];

    // Remove o prefixo 'data:image/png;base64,' da string Base64
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = base64_decode($imageData); // Converte de volta para binário

    // Gera um nome único para o arquivo
    $fileName = 'drawing_' . time() . '.png';
    $filePath = '../imgs/desenhos/' . $fileName; // Caminho para salvar a imagem

    // Salva o arquivo no sistema de arquivos
    if(file_put_contents($filePath, $imageData)) {
        echo $filePath;

        // Salva o caminho do arquivo no banco de dados
        $stmt = $mysqli->prepare("INSERT INTO desenhos (desenho, rg_pai) VALUES (?, '$rg')");
        $stmt->bind_param("s", $filePath); // Insere o caminho no banco
        $stmt->execute();

        // Fecha a conexão
        $stmt->close();
        $mysqli->close();
    } else {
        echo "Erro ao salvar a imagem.";
    }
} else {
    echo "Nenhuma imagem recebida.";
}
?>
