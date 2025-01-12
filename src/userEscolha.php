
<?php 
session_start();
include_once('php/config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
} else{
    
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
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <title>Munduca | Inicar</title>
    <style>
        .caixa{
    height: 36vh;
    text-align: 
    center;
  }
  .buttonsEscolha{
    justify-content: center;
    display: flex;
    align-items: center;
    height: 70%;
  }
  .buttonsEscolha button{
    font-size: large;
    padding: 1rem;
    background-color: white;
    color: #00232c;
    margin: 2rem;
    border-radius: 50px;
    width: 200px;
    border: 2px solid #00232c;
  }
  .buttonsEscolha button:hover{
   scale: 1.1;
   transition: 0.5s;

  }
    </style>
</head>
<body id="texo-acessibilidade">
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;">
            <div class="flex items-center">
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up
</span></button>
            </div>
           

        </div>
    </nav>
        <div class="login">
            <div class="caixa">
                <h1 class="text">Quem está usando o Munduca:</h1>
                <div class="buttonsEscolha text"> 
                <button class="btnEscolha1" onclick="senha()">Pai/responsável</button>
                <button class="btnEscolha2" onclick="enviar('areaAluno.php')">criança</button>
                </div>

            </div>
        </div>
        <div class="login hidden">
            <div class="caixa">
            <h1 class="text">Sua senha:</h1>
                    <div class="input-box">
                        <form>
                            <input oninput="capturarInput()" id="senhaVer" name="senha" type="password" placeholder="Senha" required style="color: #000;">  
                        </form>
                        
                    </div>
                    <p id="falha"></p>
                </div>

            </div>
        </div>

    <footer>
    
    <div class="waves">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 320">
        <path class="wave1 wav" fill="#F20519" fill-opacity="1"  d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,138.7C420,171,480,245,540,256C600,267,660,213,720,176C780,139,840,117,900,128C960,139,1020,181,1080,181.3C1140,181,1200,139,1260,128C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave2 wav" fill="#F20519" fill-opacity="0.5" d="M0,320L30,272C60,224,120,128,180,122.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,85.3C780,75,840,117,900,117.3C960,117,1020,75,1080,74.7C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        
      </svg>

    </div>
    </footer>


    <script src="js/script.js"></script>
    <script>

        var $JQuery2 = jQuery.noConflict()
        function senha(){

            const divs =document.querySelectorAll('.login')
            divs[0].classList.add('hidden')
            divs[1].classList.remove('hidden')
        }
        function capturarInput(){
                const senha = document.getElementById("senhaVer").value;
                console.log(senha)
                jQuery.ajax({
                    type: 'post',
                
                    url: 'php/confirmaEntrada.php',
                    data: {
                    senha: senha        
                    },
                    success: function(data){
                        const falha =document.getElementById('falha')
                        if(data == 1){
                            enviar('hubHome.php')
                        }else{
                            falha.innerText = data;
                            console.log(data)
                        }
                        
                    },
                    
                    error: function(){
                
                    }
                
                }) 
                
            }
        $JQuery2(function() {
        $JQuery2(".btnEscolha1").hover(
            // função que adiciona a classe
            function(){
                var waves = document.querySelectorAll('.wav')
                for (var i = 0; i < waves.length; i++) {
                    waves[i].setAttribute('fill', '#00232c')
                }
            },
            // função que remove a classe
            function(){
                var waves = document.querySelectorAll('.wav')
                for (var i = 0; i < waves.length; i++) {
                    waves[i].setAttribute('fill', '#F20519')
                }
            });
            });
            var $JQuery3 = jQuery.noConflict()
        $JQuery3(function() {
        $JQuery3(".btnEscolha2").hover(
            // função que adiciona a classe
            function(){
                var waves = document.querySelectorAll('.wav')
                for (var i = 0; i < waves.length; i++) {
                    waves[i].setAttribute('fill', '#FFC000')
                }
            },
            // função que remove a classe
            function(){
                var waves = document.querySelectorAll('.wav')
                for (var i = 0; i < waves.length; i++) {
                    waves[i].setAttribute('fill', '#F20519')
                }
            });
            });
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>
