
<?php 
session_start();

include_once('../php/config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
} else{
    $logado = $_SESSION['email'];
    $rg = $_SESSION['rg'];
    
    $query_crianca = mysqli_query($mysqli, "SELECT * FROM criancas where rg_pai = '$rg'");
    $result = mysqli_fetch_assoc($query_crianca);
}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade</title>
    <link rel="icon" class="size-16" href="../imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <nav class="att-navbar" id="navATT">
        <button class="back-att" onclick="sair()">X</button>
        <div class="progress-bar" id="prossBar">
                <div id="barras"></div>
        </div>
    </nav>
    <section class="content">
        <div class="aula exibe" id="att1">
            <div class="titulo-Aula text"><h1>Alfabetização </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                <li class="card">
                    <div class="video">
                        <iframe class="video_youtube" width="560" height="315" src="https://www.youtube.com/embed/9tlG7RxLHlk?si=5BHtsOWjaOCwHYj_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </li>
                    <li class="card">
                      <h1 class="text">Bem-vindos ao Mundo das Letras e dos Sons!     
                    <p class="text" id="text-1"> Olá, queridos alunos do 1º ano do Ensino Fundamental! Sejam muito bem-vindos a uma jornada emocionante: o mundo mágico da alfabetização! Aqui, vamos embarcar juntos em uma aventura cheia de descobertas, onde vamos explorar as letras, os sons e as palavras que nos rodeiam. </p>
                    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">O Que é Alfabetização?    
                    <p class="text" id="text-1">Alfabetização é como abrir uma porta para um mundo cheio de conhecimento e magia. É o processo de aprender a ler e escrever, de decifrar os segredos das letras e entender como elas se unem para formar palavras. É como desvendar um quebra-cabeça emocionante, onde cada pedacinho é uma letra e cada letra nos conta uma história.      
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">As Letrinhas Mágicas    
                    <p class="text" id="text-1">No mundo da alfabetização, as letras são como pequenos tesouros esperando para serem descobertos. Cada uma delas tem o seu próprio som, a sua própria personalidade. Juntas, elas formam as palavras que encontramos nos livros, nas placas da rua, nos rótulos dos alimentos e em tantos outros lugares! 
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                        <li class="card">
                        <p class="text" id="text-3">Alfabeto: A B C D E F G H I J K L M N O P Q R S T U V W X Y Z </p>
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
                <div class="tituloAtt text"><h1>Qual é a Letra?</h1></div>
                <div class="descAtt text"><p>Complete as letras que faltam no nome de cada objeto</p></div>
                <section class="blocos">
                    <div class="grupo-bloco">
                        <div class="hidden" id="repostaHiden1">Flor</div>
                        <img src="../imgs/alpine-nao-me-esqueca 2.png" alt="Flor pequena de petálas azuis.">
                        <div class="bloco resposta" id="resposta1"></div>
                        <div class="bloco ">L</div>
                        <div class="bloco">O</div>
                        <div class="bloco">R</div>
                        <button class="speak-all" onclick="speak('repostaHiden1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden2">Bolo</div>
                        <img src="../imgs/bolo-de-aniversario 3.png" alt="Bolo de aniversáio com cobertura rosa e três velas em cima.">
                        <div class="bloco resposta" id="resposta2" ></div>
                        <div class="bloco">O</div>
                        <div class="bloco">L</div>
                        <div class="bloco">O</div>
                        <button class="speak-all" onclick="speak('repostaHiden2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden3">Bota</div>
                        <img src="../imgs/bota 2.png" alt="Bota de couro com fivela dourada.">
                        <div class="bloco resposta" id="resposta3"></div>
                        <div class="bloco">O</div>
                        <div class="bloco">T</div>
                        <div class="bloco">A</div>
                        <button class="speak-all" onclick="speak('repostaHiden3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                    <div class="grupo-bloco">
                    <div class="hidden" id="repostaHiden4">Dado</div>
                        <img src="../imgs/contorno-do-cubo-de-dados 2.png" alt="Dado de 6 lados em preto e branco.">
                        <div class="bloco resposta" id="resposta4"></div>
                        <div class="bloco">A</div>
                        <div class="bloco">D</div>
                        <div class="bloco">O</div>
                        <button class="speak-all" onclick="speak('repostaHiden4')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </div>
                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta" draggable="true" >B</button>
                    <button class="bloco letra-resposta" draggable="true" >D</button>
                    <button class="bloco letra-resposta" draggable="true" >F</button>
                    <button class="bloco letra-resposta" draggable="true" >B</button>
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
                <div class="tituloAtt text"><h1>Qual é a Letra?</h1></div>
                <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Qual letrinha vem antes da letra: G no alfabeto?<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                <section class="blocos">

                </section>
                <section class="respostas">

                    <button class="bloco letra-resposta hover-letra" id="att2-res-1" onclick="selecionarResp('att2-res-1')">B</button>
                    <button class="bloco letra-resposta hover-letra" id="att2-res-2" onclick="selecionarResp('att2-res-2')">D</button>
                    <button class="bloco letra-resposta hover-letra"  id="att2-res-3"onclick="selecionarResp('att2-res-3')">F</button>
                    <button class="bloco letra-resposta hover-letra" id="att2-res-4" onclick="selecionarResp('att2-res-4')">B</button>
                </section>

            </div>
            <div class="conc">
                <button class="btn-conc btn-att3" id="" onclick="correcao('att3')">Concluido</button>
            </div> 
        </div>    
       
        <div class="aula hidden" id="att4">
            <div class="titulo-Aula text"><h1>Atividade 3</h1></div>
                <div class="tarefa">
                    <div class="tituloAtt text"><h1>Qual é a Letra?</h1></div>
                    <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Qual letrinha vem depois da letra: R no alfabeto?<button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
                    <section class="blocos">

                    </section>
                    <section class="respostas">

                        <button class="bloco letra-resposta hover-letra" id="att3-res-1" onclick="selecionarResp('att3-res-1')">Q</button>
                        <button class="bloco letra-resposta hover-letra" id="att3-res-2" onclick="selecionarResp('att3-res-2')">H</button>
                        <button class="bloco letra-resposta hover-letra" id="att3-res-3" onclick="selecionarResp('att3-res-3')">C</button>
                        <button class="bloco letra-resposta hover-letra" id="att3-res-4" onclick="selecionarResp('att3-res-4')">S</button>
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
        <input type="hidden" name="materia" id="materia" value="Português">
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
        attAtividade('Português')
    </script>
     <script src="../js/atividades.js"></script>

    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>