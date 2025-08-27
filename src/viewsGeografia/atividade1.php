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
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<nav class="att-navbar" id="navATT">
        <button class="back-att" onclick="sair()">X</button>
        <div class="progress-bar" id="prossBar">
                <div id="barras"></div>
        </div>
    </nav>
    <section class="content">
        <div class="aula exibe" id="att1">
            <div class="titulo-Aula text"><h1>Caminhos da Terra e do Tempo </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                <li class="card">
                    <div class="video">
                    <iframe width="560" height="315" class="video_youtube" src="https://www.youtube.com/embed/WYkUVasw-DY?si=xu8vglAJtQqOp-gk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </li>
                    <li class="card">
    <h1 class="text">Bem-vindos aos Caminhos da Terra e do Tempo!</h1>  
    <p class="text" id="text-1">
        Olá, pequenos exploradores! Vocês estão prontos para embarcar em uma viagem incrível pelo nosso planeta e pela história? Juntos, vamos descobrir como o ambiente e as pessoas mudaram ao longo do tempo. Vamos investigar mapas, explorar ambientes diferentes e aprender como cuidar do mundo em que vivemos. Preparem-se para aventuras cheias de descobertas!
    </p>
    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">O Que é o Ambiente ao Nosso Redor?</h1>  
    <p class="text" id="text-2">
        O ambiente é tudo o que está ao nosso redor: as árvores, as montanhas, os rios e até as ruas da nossa cidade. Ele muda dependendo do lugar e do tempo. Vamos aprender como as pessoas usaram e mudaram o ambiente ao longo da história, e como podemos proteger os lugares que amamos para que continuem bonitos e cheios de vida!
    </p>
    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">Como o Tempo Transforma o Mundo?</h1>  
    <p class="text" id="text-3">
        O tempo é como um grande artista que desenha o mundo de jeitos diferentes. Ele cria montanhas, muda rios de lugar e até transforma o clima. Com o passar dos anos, as pessoas também mudam os lugares onde vivem, construindo cidades ou cultivando plantações. Vamos explorar juntos como o tempo e as pessoas criam as histórias que vemos nos mapas e nos lugares ao nosso redor!
    </p>
    <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">Exploradores do Tempo e do Espaço!</h1>  
    <p class="text" id="text-4">
    Vocês sabiam que o lugar onde vivemos não foi sempre do mesmo jeito? Florestas podem virar cidades, e cidades podem voltar a ser florestas! Vamos observar imagens de lugares e descobrir como o tempo e as pessoas mudaram o ambiente. Depois, vamos imaginar o futuro e criar novos mundos juntos. Preparados para essa aventura de detetives do tempo e do espaço?
    </p>
    <button class="speak-all" onclick="speak('text-4')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
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
                <div class="tituloAtt text"><h1>O Ambiente ao Nosso Redor</h1></div>
                <div class="descAtt text"><p>Observe imagens de diferentes ambientes e descubra as características de cada um!</p></div>
                <section class="blocos">
                    <div class="grupo-bloco">
                        <div class="hidden" id="repostaHiden1">Montanhas</div>
                        <img src="../imgs/montanha.jpg" alt="Imagem de algumas montanhas">
                        <div class="bloco resposta" id="resposta1"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden2">Oceano</div>
                        <img src="../imgs/oceano.jpg" alt="Imagem de um oceano">
                        <div class="bloco resposta" id="resposta2" ></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden3">Floresta</div>
                        <img src="../imgs/floresta_HG.jpg" alt=Imagem de uma clareira em uma floresta">
                        <div class="bloco resposta" id="resposta3"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden4">Deserto</div>
                        <img src="../imgs/deserto.jpg" alt="Imagem de um deserto árido">
                        <div class="bloco resposta" id="resposta4"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden4')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta recic" draggable="true" ><h1>É Quente</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>Tem Árvores</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>É Alto</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>Tem Peixes</h1></button>
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
                <div class="tituloAtt text"><h1>Viagem pelo Tempo</h1></div>
                <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Observe as imagens abaixo e diga qual é do passado.<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                <section class="blocos">

                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta hover-letra recic" id="att2-res-1" onclick="selecionarResp('att2-res-1')"><img src="../imgs\foguete.png" alt="Uma nave espacial"></button>
                    <button class="bloco letra-resposta hover-letra recic" id="att2-res-2" onclick="selecionarResp('att2-res-2')"><img src="../imgs\piramide.png" alt="Um templo egipício dos tempos antigos"></button>
                    <button class="bloco letra-resposta hover-letra recic"  id="att2-res-3"onclick="selecionarResp('att2-res-3')"><img src="../imgs\predio.png" alt="Um prédio atual cheio de janelas"></button>

                </section>

            </div>
            <div class="conc">
                <button class="btn-conc btn-att3" id="" onclick="correcao('att3')">Concluido</button>
            </div> 
        </div>    
       
        <div class="aula hidden" id="att4">
            <div class="titulo-Aula text"><h1>Atividade 3</h1></div>
                <div class="tarefa">
                    <div class="tituloAtt text"><h1>Mudança no espaço conforme o tempo</h1></div>
                    <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Observe a imagem e encontre as suas características conforme o tempo<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                    <section class="blocos">
                    <div class="grupo-bloco">
                        <div class="hidden" id="repostaHiden10">Vila</div>
                        <img src="../imgs\vilarejo.png" alt="Uma vila pequena do interior">
                        <div class="bloco resposta" id="resposta10"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden10')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden11">Cidade</div>
                        <img  src="../imgs\cidade.jpg" alt="Uma cidade pequena">
                        <div class="bloco resposta" id="resposta11" ></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden11')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden12">Metrópole</div>
                        <img src="../imgs\metropolis.png" alt="Uma grande metrópole">
                        <div class="bloco resposta" id="resposta12"></div>
                        
                        <button class="speak-all" onclick="speak('repostaHiden12')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta recic" draggable="true" ><h1>Uma vila</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>Uma cidade pequena</h1></button>
                    <button class="bloco letra-resposta recic" draggable="true" ><h1>Uma metrópole grande</h1></button>

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
        <input type="hidden" name="materia" id="materia" value="Geografia">
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
        attAtividade('Geografia')
    </script>
    <script src="../js/atividades_hg.js"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>