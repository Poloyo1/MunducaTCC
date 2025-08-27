<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include_once('php/config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    
} else{
    header('Location: userEscolha.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Munduca | Inicar</title>
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body id="texo-acessibilidade">
    <nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;">
            <div class="flex items-center">
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up
</span></button>
                <img class="size-8" src="imgs/Group 95.png" alt="Login">
                <button class="mr-5" style="margin-left: 0.5em; margin-right: 1em;"><a href="entrar.php">Entrar</a></button>
                <img class="size-8" src="imgs/Ellipse 19.png" src="" alt="Idiomas">
            </div>
           

        </div>
    </nav>

    <div class="flex items-center container mx-auto h-screen" style="height:77vh;">
        <div class="containerr h-full flex items-center" >
            <img class="img_materias" src="imgs/Group 87.png " style="width: 35%;" alt="Máterias">
            
            
            <div class=" grid grid-rows-2 grid-flow-col gap-2 containerr">
                <div>
                    <p class="text frase" style="text-align: center;">Nas primeiras letras, encontramos um mundo de possibilidades</p> <!--"O aprendizado é a jornada que transforma o presente em futuro, e cada criança é uma estrela brilhante no céu do conhecimento."-->
                </div>
                <div class="text-center" style="text-align: center;">
                    <button class="comecar text " onclick="enviar('entrar.php')">Começar</button>
                </div>
            
            </div>
        </div>

        </div>

    <div class=" h-screen div-2" style="height: 73vh;">
        <div class="flex items-center h-screen"style="height: 73vh;">
            <div class="texto-div2">   
            <h1 class="text titulo">Comece por onde quiser!</h1>
            <div class="cont-text2">
                <p class="text text-div2">Com Munduca você pode começar de onde preferir e como preferir</p>
            </div>
         
            </div>
            <div class="img_card"><img class="card_azul" src="imgs/Logo Munduca.png" alt="Quadrado azul" style="width: 25vw;"></div>
        </div>
       
    </div>
    <div class=" h-screen div-3" style="height: 61vh;">
    <div class="flex items-center h-screen div2" style="height:61vh;">
            
            <div class="img-div"><img src="imgs/Group 90.png" alt="Coleção de emblemas" style="width:30vw;"></div>
            <div class="texto-div2">
                
            
            <div class="cont-text2">
                <p class="text text-div2">A cada conteúdo conquistado ganhe um emblema da matéria</p>
            </div>
         
            </div>
        </div>
    </div>
    <div class="foot" style="margin-top: 2em;">
        <div class="" id="text-foot">
            <h1 class="text text-div2">Inicie a sua jornada de estudos agora no</h1>
        </div>
        <div class="munduca">
            <img src="imgs/Logo Munduca (1).png" alt="Logo Munduca e as disciplinas em volta do Logo">
        </div>
       
        <button class="comecar text iniciar"onclick="enviar('entrar.php')" >Comece agora</button>
        <div class="munduca">
            <img src="imgs/img-fundo.png" alt="" style="height: 100%;width: 55%; z-index: 1000;">
        </div>
        
    </div>

    <footer>
    
    <div class="waves">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 320">
        <path class="wave1" fill="#F20519" fill-opacity="1"  d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,138.7C420,171,480,245,540,256C600,267,660,213,720,176C780,139,840,117,900,128C960,139,1020,181,1080,181.3C1140,181,1200,139,1260,128C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave2" fill="#F20519" fill-opacity="0.5" d="M0,320L30,272C60,224,120,128,180,122.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,85.3C780,75,840,117,900,117.3C960,117,1020,75,1080,74.7C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        
      </svg>

    </div>
    </footer>


    <script src="js/script.js">  
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>
