<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade</title>
    <link rel="icon" class="size-16" href="../imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        #grid {
            display: grid;
            gap: 5px;
            padding-right: 5rem;
        }
        .cell {
            width: 80px;
            height: 80px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .robot {
            background-color: #5525d0;
            color: white;
            font-weight: bold;
        }
        .goal {
            background-color: green;
            color: white;
            font-weight: bold;
        }
        #controls {
            
            display: block;
            max-width: 20%;
        }
        #controls button{
            width: 100%;
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            background-color: #5525d0;
            color: white;
            border-radius: 10px;
            border: none;
            font-size: 30px;
            
        }
        #sequence {
            margin-top: 10px;
            margin-right: 40px;
            text-align: center;
            background-color: #5525d0;
            color: white;
            border-radius: 20px;
            padding: 2rem;

            font-family: 30px;
        }
        .telaJogo{
            display: flex;
            width: 100%;
            justify-content: center;
            
        }
        .Executar{
            height: 20%;
            background-color: #0ABF04 !important;
            font-weight: bolder;
        }
        .acao{
            height: 20%;
            background-color: orangered !important;
            font-weight: bolder;

        }
        .tarefa{
            text-align: center;
            min-height: 900px;

        }
        #commandsList{
            display: block;
            max-width: 100%;
            text-align: center;
           
        }
        .aula{
            width: 90%;
        }
    </style>
</head>
<body onLoad="carregarConfiguracoes()">
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

<nav class="att-navbar" id="navATT">
        <button class="back-att" onclick="sair()">X</button>
        <div class="progress-bar" id="prossBar">
                <div id="barras"></div>
        </div>
    </nav>
    <section class="content">
        <div class="aula exibe" id="att2">
            <div class="titulo-Aula text"><h1>Atividade</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Ajude o Robô</h1></div>
                <div class="descAtt text"><p>Leve o robô até a bandeira</p></div>
                <div id="levelControls">
        

    </div>
    <div id="levelInfo">
        <h3>Nível Atual: <span id="currentLevel">1</span></h3>
    </div>
    <div>
    <div class="telaJogo">
    <div class="text" id="sequence">
        <h3>Sequência de Comandos:</h3>
        <div id="commandsList">          
        </div>
        
    </div>
        <div id="grid"></div>
        <div id="controls">
            <button class="text" onclick="addCommand('⬆')">⬆</button>
            <button class="text" onclick="addCommand('⬅')">⬅</button>
            <button class="text" onclick="addCommand('⮕')">⮕</button>
            <button  class="text"onclick="addCommand('⬇')">⬇</button>
            <button onclick="loadLevel(currentLevel - 1)">Nível Anterior</button>
            <button  class="text Executar"onclick="executeSequence()">Executar Comandos</button>
            <button class="text acao" onclick="resetSequence()">Resetar Sequência</button>
        </div>
    </div>
    

    </div>
    
    
    <p id="status"></p>
            
            </div>
        
                <div class="conc">
                    <button class="btn-conc btn-att4" id="" onclick="correcao('att4')">Concluido</button>
                </div>
        </div>
               
        
        <div class="janela-modal" id="janela-modal" style=" align-items: start !important; height: 100vh;">
            <div class="modal modal-Final">
                <div class="img-fim">
                    <img src="../imgs/pngwing.com (3).png" alt="Troféu azul grande com o numero um no centro">
                    
                </div>
                <div class="text text-Final">
                        <h1>Parabéns!</h1>
                        <h2>Você concluiu a Atividade 1</h2>
                        
                    </div>
                    <div class="conc">
                        <button class="reset" onclick="window.location.reload(true)">Refazer</button>
                        <button class="conc-ativ" onclick="enviar('../areaAluno.php')">Continuar</button>
                    </div>
            </div>
        </div>
        <div class="janela-modal" id="janela-modal-sair" style=" align-items: start !important; height: 100vh;">
            <div class="modal modal-sair">
                <div class="text text-Final">
                        <h1>Tem certeza que deseja Sair?</h1>   
                    </div>
                    <div class="conc">
                        <button class="reset" onclick="enviar('../areaAluno.php')">Sair</button>
                        <button class="conc-ativ" onclick="fechaModal('janela-modal-sair')">Continuar</button>
                    </div>
            </div>
        </div>           
    </section>

    <div class="conc correcao text hidden">
                <p id="text-correcao"></p>
                <button class="btn-conc" id="btn-passaAula" onclick="passaAula2()">Concluido</button>
                <button class="btn-conc hidden reinicia" id="" onclick="Reiniciar()">Refazer</button>
    </div> 
    <form id="FormAttPT">
        <input type="hidden" name="materia" id="materia" value="Tecnologia">
        <input type="hidden" name="pontos" id="pontos" value="50">
        <input type="hidden" name="atividade" id="atividade" value=1>                  
    </form>
    <script>
        function attAtividade(materia){
  $.ajax({
    type: 'post',
  
    url: '../php/attAtividade.php',
    data: {
      materia: materia        
    },
    success: function(data){
      var pross =document.getElementById('prossBar')
      var nav =document.getElementById('navATT')
      var barra =document.getElementById('barras')
      var card =document.querySelectorAll('.card')
      var tarefa =document.querySelectorAll('.tarefa')
        for(i = 0; i < card.length; i++){
            card[i].style.border = `3px solid ${data}`
        }
        for(i = 0; i < tarefa.length; i++){
            tarefa[i].classList.add(`borderTarefa${materia}`)
        }
      pross.style.border = `1px solid ${data}`
      nav.style.borderColor = `${data}`
      console.log(barra)
      barra.classList.add(materia)
    },
    
    error: function(){
  
    }
  
  }) 
}
        attAtividade('Tecnologia')
    </script>
    <script src="../js/atividades_Tecnologia.js"></script>
    <script src="../js/atividades.js"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>