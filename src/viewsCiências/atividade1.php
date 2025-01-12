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
        
    </style>
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
            <div class="titulo-Aula text"><h1>Características dos Materiais </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                <li class="card">
                    <div class="video">
                    <iframe width="560" height="315" class="video_youtube" src="https://www.youtube.com/embed/_32toxkV4OY?si=umUcKkxcCOdiCq_C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </li>
                    <li class="card">
                      <h1 class="text">Bem-vindos ao Mundo dos Materias!     
                    <p class="text" id="text-1"> Olá, queridos alunos do 1º ano do Ensino Fundamental! Sejam muito bem-vindos a uma jornada curiosa, vamos brincar de detetive e descobrir sobre os materiais que fazem parte do nosso mundo, também vamos estudar e aprender sobre a Reciclagem e cuidar melhor do nosso planeta!  </p>
                    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">O Que é a Reciclagem?    
                    <p class="text" id="text-1">Reciclagem é como dar uma nova vida a coisas que já usamos. É o processo de transformar materiais antigos em algo novinho em folha, como se fosse mágica! Imagine uma latinha ou uma garrafa se tornando uma nova peça de brinquedo ou um material de escola. Cada pedacinho de plástico, papel e metal que reciclamos ajuda a cuidar do nosso planeta, como se estivéssemos montando um grande quebra-cabeça da natureza, onde cada peça reciclada faz o mundo brilhar um pouquinho mais!</p>      
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">O Que acontece com os materiais do mundo?    
                    <p class="text" id="text-1">Quando usamos algo, como uma casca de banana ou um pedaço de papel, ele não desaparece magicamente quando jogamos fora. Na verdade, esses materiais continuam no nosso planeta e passam por um processo chamado decomposição!, com a ajuda de pequenos seres chamados bactérias e fungos, que trabalham juntos para transformar aquilo em pedacinhos bem pequenininhos. Alguns materiais, como frutas e folhas, se decompõem rapidinho. Mas outros, como plásticos e metais, demoram muitos e muitos anos para se decompor.</p>
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <p class="text" id="text-3">Você já viu aqueles símbolos especiais nos produtos e nas embalagens? Eles parecem setas formando um triângulo e têm um nome importante: são os símbolos da reciclagem! Esses símbolos nos ajudam a entender como cada material pode voltar para o ciclo de uso e se transformar em algo novo. </p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                        </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right">></i>
            </div>
            <div class="conc">
                        <button class="btn-conc" onclick="passaAula()">Continuar</button>
                    </div>
        </div>
        <div class="aula hidden" id="att2">
            <div class="titulo-Aula text"><h1>Atividade 1</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Qual objeto é Reciclável</h1></div>
                <div class="descAtt text"><p>Encontre quais objetos são recicláveis e quais não.</p></div>
                <section class="blocos">
                    <div class="grupo-bloco">
                        <div class="hidden" id="repostaHiden1">Garrafa-Pet</div>
                        <img src="../imgs/g_pet.png" alt="Flor pequena de petálas azuis.">
                        <div class="bloco resposta" id="resposta1"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden2">Latinha</div>
                        <img src="../imgs/latinha.png" alt="Bolo de aniversáio com cobertura rosa e três velas em cima.">
                        <div class="bloco resposta" id="resposta2" ></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden3">Livros</div>
                        <img src="../imgs/livro_C.png" alt="Bota de couro com fivela dourada.">
                        <div class="bloco resposta" id="resposta3"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden4">Canudo</div>
                        <img src="../imgs/canudo.png" alt="Dado de 6 lados em preto e branco.">
                        <div class="bloco resposta" id="resposta4"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden4')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta recic" draggable="true" ><img  src="../imgs\recic.png" alt="Ìcone de reciclagem."><p>A</p></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><img  src="../imgs\recic.png" alt="Ìcone de reciclagem."><p>A</p></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><img  src="../imgs\recic.png" alt="Ìcone de reciclagem."><p>A</p></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><img  src="../imgs/n_recic.png"><p>B</p></button>
                </section>
                
            </div>
            <div class="conc">
                <button class="hidden reset" id="reset" onclick="resetAtt()">Recomeçar</button>
                <button class="btn-conc btn-att2" id="" onclick="correcao('att2')">Concluido</button>
            </div> 
            
        </div>
        <div class="aula hidden" id="att3">
            <div class="titulo-Aula text"><h1>Atividade 2</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Qual é Natural ou Artificial?</h1></div>
                <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Qual elemento é natural?<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                <section class="blocos">

                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta hover-letra recic" id="att2-res-1" onclick="selecionarResp('att2-res-1')"><img src="../imgs\vidro.png" alt="Cacos de vidro"></button>
                    <button class="bloco letra-resposta hover-letra recic" id="att2-res-2" onclick="selecionarResp('att2-res-2')"><img src="../imgs\plastico.png" alt="Utensilíos de plástico"></button>
                    <button class="bloco letra-resposta hover-letra recic"  id="att2-res-3"onclick="selecionarResp('att2-res-3')"><img src="../imgs\madeira.png" alt="Uma tora de madeira"></button>

                </section>

            </div>
            <div class="conc">
                <button class="btn-conc btn-att3" id="" onclick="correcao('att3')">Concluido</button>
            </div> 
        </div>    
       
        <div class="aula hidden" id="att4">
            <div class="titulo-Aula text"><h1>Atividade 3</h1></div>
                <div class="tarefa">
                    <div class="tituloAtt text"><h1>Decomposição</h1></div>
                    <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Quanto tempo demora para esses materias se decomporem?<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                    <section class="blocos">
                    <div class="grupo-bloco">
                        <div class="hidden" id="repostaHiden10">Papel</div>
                        <img src="../imgs/papel.png" alt="Flor pequena de petálas azuis.">
                        <div class="bloco resposta" id="resposta10"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden10')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden11">Bolo</div>
                        <img src="../imgs\bolo-de-aniversario.png" alt="Bolo de aniversáio com cobertura rosa e três velas em cima.">
                        <div class="bloco resposta" id="resposta11" ></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden11')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden12">Plástico</div>
                        <img src="../imgs/plastico.png" alt="Bota de couro com fivela dourada.">
                        <div class="bloco resposta" id="resposta12"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden12')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta recic" draggable="true" ><h1>3 meses</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>1 mês</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>400 anos</h1></button>

                </section>
                
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
                <button class="btn-conc" id="btn-passaAula" onclick="passaAula()">Concluido</button>
                <button class="btn-conc hidden reinicia" id="" onclick="Reiniciar()">Refazer</button>
    </div> 
    <form id="FormAttPT">
        <input type="hidden" name="materia" id="materia" value="Ciências">
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
        attAtividade('Ciências')
    </script>
    <script src="../js/atividades_ciencias.js"></script>
    
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>