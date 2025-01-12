<?php


include_once('config.php');

//informações do pai

$nome_pai = $_POST['nome']. " " .$_POST['sobrenome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha_pai'], PASSWORD_DEFAULT);
$telefone = $_POST['telefone'];
$rg = password_hash($_POST['rg_pai'], PASSWORD_DEFAULT);

//informações criança

$nome_crianca = $_POST['nome_crianca']. " " .$_POST['sobrenome_crianca'];
$nivel_escola = $_POST['nivel_ensino'];
$ano_Estudo = $_POST['ano_ensino'];
$insti = $_POST['insti_crianca'];


$verify = "SELECT * FROM pais_responsaveis WHERE email = '$email'";
$result = $mysqli->query($verify);

if(mysqli_num_rows($result) > 0){
   echo 0;
}else{
    echo 1;
    $cadastro_Pai = mysqli_query($mysqli, "INSERT INTO pais_responsaveis(nome,email,senha,telefone, rg_pai, tipo_de_conta) VALUES ('$nome_pai','$email','$senha','$telefone','$rg', 'Pai/responsável')");
    $cadastro_crianca = mysqli_query($mysqli, "INSERT INTO criancas(nome_aluno, instituicao_ensino, rg_pai, nivel_escolaridade, ano_ensino, foto_perfil) VALUES ('$nome_crianca','$insti','$rg', '$nivel_escola', '$ano_Estudo', 'imgs/perfil/raposa.png')");
    
    $config_padrao = mysqli_query($mysqli, "INSERT INTO configurações(font_size, alto_contra, tip_daltonismo, rg_pai) VALUES ('padrao','0','nenhum', '$rg')");
}



?>