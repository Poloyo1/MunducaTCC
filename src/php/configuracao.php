<?php 
session_start();

include_once('php/config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
} else{
    $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br" onLoad="carregarConfiguracoes()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <title>Munduca | Home</title>
</head>
<body onLoad="carregarConfiguracoes()" id="texo-acessibilidade">

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <a href="HubHome.php">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;"></a>
            <div class="flex items-center">
                <button class="mr-5" style="margin-left: 0.5em; margin-right: 1em;"><a href="HubHome.php">Disciplinas</a></button>
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up
</span></button>  
            </div>
           

        </div>
    </nav>
    <div class="text-ar" id="text-ar">
       <b> <h1 class="titu text" id="titulo-BoaVinda">Configurações
        </h1></b>
    </div>

    <section class="config">
        <div class="config-box">
            <div class="box-config">
                <div class="top-config">
                    <b><h1 class="config-text">Configurações de Perfil</h1></b>
                </div>
                    <b><label for="Novo Nome" class="text-input-config">Alterar nome de usuário</label></b>
                    <input type="text" id="Novo_Nome" name="Novo_Nome"  class="config-input" placeholder="Novo Nome">
                    <b><label for="Novo Email" class="text-input-config">Alterar email</label></b>
                    <input type="email" id="Novo_Email" name="Novo_Email"  class="config-input" placeholder="Novo Email">
                    <b><label for="Nova Senha" class="text-input-config">Alterar senha</label></b>
                    <input type="password" id="Nova_Senha" name="Nova_Senha" class="config-input" placeholder="Nova Senha">
                    </form>
                    <div style="width: 100%;text-align: center;">
                    <b><button class="btn-salvar sairConta" onclick="sairConta()">Sair</button></b>
                    <b><button class="btn-salvar" onclick="attCadastro()">Atualizar</button></b></div>
                    
            </div>

            <div class="box-config">
                <div class="top-config">
                    <b><h1 class="config-text">Preferências de Acessibilidade</h1></b>
                </div>
                <b><h1 class="text-input-config">Alterar o tamanho da fonte</h1></b> 
                <div class="font-control">
                    <button id="decrease-font" class="font-button"  onclick="mudatamanho(-1)">Aa</button>
                    <button id="decrease-medium" class="font-button small"  onclick="mudatamanho(-0.5)">Aa</button>
                    <button id="reset-font" class="font-button medium" onclick="mudatamanho(0)">Aa</button>
                    <button id="increase-medium" class="font-button small"  onclick="mudatamanho(0.5)">Aa</button>
                    <button id="increase-font" class="font-button"  onclick="mudatamanho(1)">Aa</button>
                </div>
                <div class="alto-contraste-option">
                    <b><h1 class="text-input-config">Modo Alto Contraste</h1></b>
                    <div class="btn-contraste">
                        <button class="btn-ligar" id="btn-ligar" onclick="alternarContraste()">Ativar Alto Contraste</button>
                    </div>
                </div>
                <div class="dropdown">
                    <b><h1 class="text-input-config">Daltonismo</h1></b>
                    <div class="dropdown-container">
                        <span class="daltomismo" onclick="aplicarFiltro('normal')">Cor Padrão</span>
                        <div class="dropdown-item">
                            <a onclick="aplicarFiltro('protanopia')">Protanopia</a>
                            <a  onclick="aplicarFiltro('deuteranopia')">Deuteranopia</a>
                            <a onclick="aplicarFiltro('tritanopia')">Tritanopia</a>
                            <a  onclick="aplicarFiltro('monocromacia')">Monocromacia</a>
        
                        </div>
                    </div>
                </div>
            </div>
                <div class="salvar-btn">
                    <b><button class="btn-salvar" onclick="salvarAlt()">Salvar Alterações</button></b>
                </div>
                <form id="form-acess">
                    <input type="hidden" id="font-size" name="font-size" value=""> 
                    <input type="hidden" id="alto_contra" name="alto_contra" value=""> 
                    <input type="hidden" id="tip_daltonismo" name="tip_daltonismo" value=""> 
                </form>
        </div>
    </section>

    <footer>
    <div class="waves">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 320">
        <path class="wave1" fill="#F20519" fill-opacity="1"  d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,138.7C420,171,480,245,540,256C600,267,660,213,720,176C780,139,840,117,900,128C960,139,1020,181,1080,181.3C1140,181,1200,139,1260,128C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave2" fill="#F20519" fill-opacity="0.5" d="M0,320L30,272C60,224,120,128,180,122.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,85.3C780,75,840,117,900,117.3C960,117,1020,75,1080,74.7C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        
      </svg>

    </div>
</footer>
    
    <script src="js/script.js"></script> 

    <script type="text/javascript" src="hiddenDiv.js"></script>

    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>


 



