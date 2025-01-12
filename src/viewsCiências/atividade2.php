<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade</title>
    <link rel="icon" class="size-16" href="../imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body onLoad="carregarConfiguracoes()">
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<nav class="att-navbar" id="navATT">
        <button class="back-att" onclick="sair()">X</button>
        <div class="progress-bar" id="prossBar">
                <div id="barras"></div>
        </div>
    </nav>
    <section class="content">
        <div class="aula exibe" id="att1">
            <div class="titulo-Aula text"><h1>Corpo Humano e Respeito à Diversidade </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                <li class="card">
                    <div class="video">
                    <iframe width="560" height="315" class="video_youtube" src="https://www.youtube.com/embed/4jURRPVmS3o?si=u8sk_HfOlh70Zhpp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </li>
                    <li class="card">
                      <h1 class="text">Explorando o Corpo Humano     
                    <p class="text" id="text-1"> Vamos explorar o corpo humano! Cada um de vocês vai aprender a identificar e nomear partes do corpo, como cabeça, braços e pernas. Vamos desenhar essas partes e descobrir para que elas servem. Preparados para conhecer melhor o nosso corpo?  </p>
                    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">Por que a Higiene é Importante?   
                    <p class="text" id="text-1">Manter nosso corpo limpo é muito importante para a saúde. Vamos brincar de um jogo da memória! Vocês vão encontrar pares de cartas que mostram bons hábitos de higiene, como escovar os dentes e lavar as mãos. Cada vez que encontrar um par, vamos falar por que aquele hábito é importante. Vamos ver quem consegue achar todos os pares e entender a importância da higiene!</p>      
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">Respeitando as Diferenças    
                    <p class="text" id="text-1">Quando usamos algo, como uma casca de banana ou um pedaço de papel, ele não desaparece magicamente quando jogamos fora. Na verdade, esses materiais continuam no nosso planeta e passam por um processo chamado decomposição!, com a ajuda de pequenos seres chamados bactérias e fungos, que trabalham juntos para transformar aquilo em pedacinhos bem pequenininhos. Alguns materiais, como frutas e folhas, se decompõem rapidinho. Mas outros, como plásticos e metais, demoram muitos e muitos anos para se decompor.</p>
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <p class="text" id="text-3">Todos somos diferentes e isso é muito legal! Vamos olhar as características físicas de cada um de nós, como cor de cabelo, altura e cor dos olhos. Vamos aprender como essas diferenças nos tornam únicos e especiais. É importante respeitar e valorizar essas diferenças, porque todos nós somos importantes!</p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                        </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right">></i>
            </div>
            <div class="conc">
                        <button class="btn-conc" onclick="passaAula()">Continuar</button>
                    </div>
        </div>
        
        <div class="aula hidden" id="att12">
    <div class="titulo-Aula text"><h1>Atividade 1</h1></div>
    <div class="tarefa">
        <div class="tituloAtt text"><h1>Identificando as Partes do Corpo Humano</h1></div>
        <div class="descAtt text"><p>Arraste as partes do corpo para os seus respectivos lugares.</p></div>
        <section class="blocos">
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden13">Cabeça</div>
                <img src="https://cdn.pixabay.com/photo/2014/04/02/11/13/girl-305587_1280.png" alt="Imagem do contorno de uma cabeça">
                <div class="bloco resposta" id="resposta13"></div>
                
                <button class="speak-all" onclick="speak('repostaHiden13')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden14">Braços</div>
                <img src="https://media.istockphoto.com/vectors/muscle-arms-strong-bicep-icon-vector-id930736304?k=6&m=930736304&s=170667a&w=0&h=F1dWCgD54grwOTb-MjCSaS_aahdGE0QtYbi9yCnTOIc=" alt="Imagem de dois braços">
                <div class="bloco resposta" id="resposta14"></div>
                
                <button class="speak-all" onclick="speak('repostaHiden14')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden15">Pernas</div>
                <img src="https://i.pinimg.com/originals/b8/09/04/b80904fbd193609a3abd8f7b67a94ffe.png" alt="Imagem de duas pernas">
                <div class="bloco resposta" id="resposta15"></div>
                
                <button class="speak-all" onclick="speak('repostaHiden15')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
        </section>
        <section class="respostas">
            <button class="bloco letra-resposta recic" draggable="true"><h1>Cabeça</h1></button>
            <button class="bloco letra-resposta recic" draggable="true"><h1>Braços</h1></button>
            <button class="bloco letra-resposta recic" draggable="true"><h1>Pernas</h1></button>
        </section>
    </div>
    <div class="conc">
        <button class="hidden reset" id="reset" onclick="resetAtt()">Recomeçar</button>
        <button class="btn-conc btn-att12" id="" onclick="correcao('att12')">Concluído</button>
    </div>
</div>   
        <div class="aula hidden" id="att14">
            <div class="titulo-Aula text"><h1>Atividade 3</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Respeito á Diversidade</h1></div>
                <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Qual ação deve ser tomada para respeitarmos os coleguinhas?<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                <section class="blocos">

                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta hover-letra recic" id="att14-res-1" onclick="selecionarResp('att14-res-1')"><h1>Zoar a aparência dele</h1></button>
                    <button class="bloco letra-resposta hover-letra recic" id="att14-res-2" onclick="selecionarResp('att14-res-2')"><h1>Incluir ele nas atividades </h1></button>
                    <button class="bloco letra-resposta hover-letra recic"  id="att14-res-3"onclick="selecionarResp('att14-res-3')"><h1>Brigar com ele</h1></button>

                </section>

            </div>
                <div class="conc">
                    <button class="btn-conc btn-att14" id="" onclick="correcao('att14')">Concluido</button>
                </div>
        </div>
               
        
        <div class="janela-modal" id="janela-modal" style=" align-items: start !important; height: 100vh;">
            <div class="modal modal-Final">
                <div class="img-fim">
                <img src="../imgs/pngwing.com (3).png" alt="Troféu azul grande com o numero um no centro">
                    
                </div>
                <div class="text text-Final">
                        <h1>Parabéns!</h1>
                        <h2>Você concluiu a Atividade 2</h2>
                        
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
                <button class="btn-conc" id="btn-passaAula" onclick="passaAula()">Concluido</button>
                <button class="btn-conc hidden reinicia" id="" onclick="Reiniciar()">Refazer</button>
    </div> 
    <form id="FormAttPT">
        <input type="hidden" name="materia" id="materia" value="Ciências">
        <input type="hidden" name="pontos" id="pontos" value="50">
        <input type="hidden" name="atividade" id="atividade" value=2>                  
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
        attAtividade('Ciências')
    </script>
    <script src="../js/atividades_ciencias.js"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>