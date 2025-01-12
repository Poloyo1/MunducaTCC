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
    </nav>
    <section class="content">
        <div class="aula exibe" id="att1">
            <div class="titulo-Aula text"><h1>Impactos da Colonização no Meio Ambiente </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                <li class="card">
                    <div class="video">
                    <iframe width="560" height="315" class="video_youtube" src="https://www.youtube.com/embed/lpbyx9O8PP0?si=HchPo8ii0TfHntv9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </li>
                    <li class="card">
    <h1 class="text">Bem-vindos à História da Colonização e seus Impactos!</h1>  
    <p class="text" id="text-1">
    Olá, exploradores! Vamos embarcar em uma viagem pelo passado e entender como a colonização de diferentes regiões do mundo afetou os ambientes naturais. Durante este percurso, vamos descobrir como os recursos naturais foram explorados, o que aconteceu com as populações locais e como as mudanças ambientais moldaram a nossa história.
    </p>
    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">O Que a Colonização Fez com o Meio Ambiente?</h1>  
    <p class="text" id="text-2">
    Quando os colonizadores chegaram, muitos lugares sofreram mudanças profundas. Florestas foram derrubadas para abrir espaço para plantações, e rios foram alterados para novos usos. Vamos aprender como essas mudanças impactaram o meio ambiente e como as populações locais lidaram com isso ao longo do tempo.
    </p>
    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">Como a Colonização Afetou os Povos Indígenas?</h1>  
    <p class="text" id="text-3">
    A chegada dos colonizadores alterou a vida dos povos indígenas de muitas maneiras. Além das mudanças no meio ambiente, eles enfrentaram novas culturas, doenças e lutas pela terra. Vamos explorar como essas populações resistiram às transformações impostas e como suas culturas sobreviveram.
    </p>
    <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;">
        <span class="material-symbols-outlined">volume_up</span>
    </button>
</li>

<li class="card">
    <h1 class="text">Como Proteger o Meio Ambiente Hoje?</h1>  
    <p class="text" id="text-4">
    Agora que conhecemos o impacto da colonização, é importante refletir sobre o que podemos fazer para proteger o nosso planeta. Como as práticas sustentáveis podem ajudar a reverter danos passados e proteger as futuras gerações? Vamos discutir formas de usar os recursos naturais com responsabilidade, sem destruir os ecossistemas ao nosso redor.
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


                         <!-- Atividade que tá dando erro -->

        <div class="aula hidden" id="att10">
            <div class="titulo-Aula text"><h1>Atividade 1</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Geografia Colonial e Suas Consequências</h1></div>
                <div class="descAtt text"><p>Observe imagens de diferentes ambientes e descubra as características de cada um!</p></div>
                <section class="blocos">
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden10">Bacia Amazônica</div>
                <img src="https://i.pinimg.com/originals/3b/4e/55/3b4e554220e600d667c47f80c242ca01.jpg" alt="Imagem da Bacia Amazônica">
                <div class="bloco resposta" id="resposta10"></div>
                <button class="speak-all" onclick="speak('repostaHiden10')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden11">África Subsariana</div>
                <img src="https://africanahistoria.com/wp-content/uploads/2023/12/A-Reconstrucao-da-Africa-Pos-Colonizacao-e-Desenvolvimento.jpg" alt="Imagem da África Subsariana durante a colonização">
                <div class="bloco resposta" id="resposta11"></div>
                <button class="speak-all" onclick="speak('repostaHiden11')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
            <div class="grupo-bloco">
                <div class="hidden" id="repostaHiden12">Ásia Oriental</div>
                <img src="https://c8.alamy.com/comp/W7D1BA/the-chinese-cake-1898-artist-henri-meyer-W7D1BA.jpg" alt="Imagem da Ásia Oriental sob domínio colonial">
                <div class="bloco resposta" id="resposta12"></div>
                <button class="speak-all" onclick="speak('repostaHiden12')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
            </div>
        </section>
        <section class="respostas">
            <button class="bloco letra-resposta recic" draggable="true"><h1>Exploração de recursos</h1></button>
            <button class="bloco letra-resposta recic" draggable="true"><h1>Colonização forçada</h1></button>
            <button class="bloco letra-resposta recic" draggable="true"><h1>Exposição a doenças</h1></button>
        </section>
                
            </div>
            <div class="conc">
                <button class="hidden reset" id="reset" onclick="resetAtt()">Recomeçar</button>
                <button class="btn-conc btn-att10" id="" onclick="correcao('att10')">Concluido</button>
            </div> 
            
        </div>
        <div class="aula hidden" id="att11">
    <div class="titulo-Aula text"><h1>Atividade 2</h1></div>
    <div class="tarefa">
        <div class="tituloAtt text"><h1>Viagem pelo Tempo e Espaço</h1></div>
        <div class="descAtt text"><p style="display: flex; align-items: center; justify-content: center;" id="pergunta">Observe as imagens abaixo e diga qual pertence ao período colonial. <button class="speak-all" onclick="speak('pergunta')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button></p> </div>
        <section class="blocos">
           
        </section>
        <section class="respostas a">
            <button class="bloco letra-resposta hover-letra recic" id="att11-res-1" onclick="selecionarResp('att11-res-1')">
                <img src="https://3.bp.blogspot.com/-nVuY-Ids7n0/XM4WE-VpIxI/AAAAAAAAXGU/gXmykCI5Km066z2qAeLHUy-SeJXSNBmtgCEwYBhgL/s640/A%2BCruz%2Bde%2BCristo%2Bpresente%2Bnas%2Bvelas%2Bde%2Bnau%2Bportuguesa%252C%2Bpor%2BAlfredo%2BRoque%2BGameiro.jpg" alt="Navio colonial português navegando pelo oceano"></button>
            <button class="bloco letra-resposta hover-letra recic" id="att11-res-2" onclick="selecionarResp('att11-res-2')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Pico_da_Bandeira_desfiladeiro.jpg" alt="Imagem de uma paisagem do Planalto Brasileiro"></button>
            <button class="bloco letra-resposta hover-letra recic" id="att11-res-3" onclick="selecionarResp('att11-res-3')">
                <img src="https://th.bing.com/th/id/OIP.-SXKYqnmm90_j5c_2ykeEQHaFj?rs=1&pid=ImgDetMain" alt="Palácio moderno com arquitetura atual"></button>
        </section>
    </div>
    <div class="conc">
        <button class="btn-conc btn-att11" id="" onclick="correcao('att11')">Concluído</button>
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
        <input type="hidden" name="materia" id="materia" value="Geografia">
        <input type="hidden" name="pontos" id="pontos" value="50">
        <input type="hidden" name="atividade" id="atividade" value=2>                  
    </form>

    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
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
    <script>
        
function speak(id){
    let text = document.getElementById("" + id + "").innerText

    const speaks = new SpeechSynthesisUtterance(text)
    speaks.lang = 'pt-br'
    window.speechSynthesis.speak(speaks)

}

function enviar(pagina){

    window.location.href = pagina

}

function AbreModal(id){
  modal = document.getElementById(id)
  modal.style.display = 'flex'
} 
function fechaModal(id){
  modal = document.getElementById(id)
  modal.style.display = 'none'
} 


const carousel2 = document.getElementById('carousel2');



function showSlide2(index, totalCards) {
  if (index < 0) {
    currentIndex = totalCards - 1;
  } else if (index >= totalCards) {
    currentIndex = 0;
  } else {
    currentIndex = index;
  }

  const translateValue = -currentIndex * 200 + 'px';
  
 
    carousel2.style.transform = 'translateX(' + translateValue + ')';
   console.log(currentIndex);
   console.log(totalCards);

}

function prevSlide2() {
  const totalCards = document.querySelectorAll('.card2').length;
  showSlide2(currentIndex - 1, totalCards);
}

function nextSlide2() {
  const totalCards = document.querySelectorAll('.card2').length;
  showSlide2(currentIndex + 1, totalCards);
}


function addAula(){
    $.ajax({
        url: 'php/adicionarAula.php',
        success: function(div){
            var divTarefas = document.getElementById('tarefas')
            var scroll = document.getElementById('scroll')
            var btnAdd = document.getElementById('addCard')
            btnAdd.style.display = 'none'
            scroll.style.display = 'block'
            $("#carousel3").html(div);
        },
        error: function(){
            alert('error')
        }
    })
}
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];
cont = 0;

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
        cont += 1
        if(cont == (carouselChildrens.length - 1)){
          concAtt()
        }
    });
});
const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }
}


carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
c = 0

function passaAula(){
  btnAtivo = document.querySelectorAll('.conc-ativ')
  divCorrecao.classList.add('hidden')

  if (btnAtivo.length > 1){
      aulas = document.querySelectorAll('.aula')
      aulaExibida = document.querySelectorAll('.exibe')
      
      estaExibindo = true
      btn_conc.classList.remove('conc-ativ')
      btn_reset.classList.add('hidden')
      aulas.forEach(aula => {
        if (aulaExibida[0] == aula){
        
          aula.classList.remove('exibe')
          aula.classList.add('hidden')
          estaExibindo = false
          c +=1
          console.log(c)
        }else if(estaExibindo == false){
        
          aula.classList.remove('hidden');
          aula.classList.add('exibe');
          estaExibindo = true;
        }
      })

      if(c == aulas.length){
        AbreModal('janela-modal');
        btn_conc.style.display = 'none'
        tarefaFin()
      }
      prossBar()
  }

}
/*mover os blocos */
const blocos = document.querySelectorAll('.letra-resposta')
const btn_reset = document.getElementById('reset') 
const btn_conc_att2 = document.querySelector('.btn-att2') 
const btn_conc_att3 = document.querySelector('.btn-att3') 
const btn_conc_att4 = document.querySelector('.btn-att4') 
const btn_conc_att12 = document.querySelector('.btn-att12') 
const btn_conc = document.querySelector('.btn-conc') 
var acertosGerais = 0
const dropresposta = document.querySelectorAll('.resposta')
const respostas = document.querySelector('.respostas')
valor = 0


blocos.forEach(bloco =>{
    bloco.addEventListener('dragstart', dragstart)
    bloco.addEventListener('drag', drag)
    bloco.addEventListener('dragend', dragend)

})


function dragstart(){
  //console.log('Start Drag')
  dropresposta.forEach(drop => drop.classList.add('colocar'))
  this.classList.add('is-drag')
}
function drag(){
 // console.log('Dragging')
}
function dragend(){
 // console.log('End Drag')
 dropresposta.forEach(drop => drop.classList.remove('colocar'))
 this.classList.remove('is-drag')
}

/* local onde deixar os blocos*/
dropresposta.forEach(drop => {
  drop.addEventListener('dragenter', dragenter)
  drop.addEventListener('dragover', dragover)
  drop.addEventListener('dragleave', dragleave)
  drop.addEventListener('drop', drop)

})


function dragenter(){
 // console.log('entrou na zona')
 
}
function dragover(){
  //console.log('está na zona')
  this.classList.add('estaDentro')
  // get o isdragin
  const blocoDrag = document.querySelector('.is-drag')
  const elem = this.children;

  
  if(elem.length > 0){
  } else {
    this.appendChild(blocoDrag)
    blocoDrag.classList.add('adicionado')
  }
  
  verificaAtt()
}
function dragleave(){
 // console.log('saiu na zona')
 this.classList.remove('estaDentro')
}
function drop(){
 // console.log('caiu na zona')
 
}

function verificaAtt(){
  const elem = document.getElementsByClassName('adicionado');
  console.log(elem.length)
  if(elem.length != 0){
    btn_reset.classList.remove('hidden')
  }
  if(elem.length == 4){
    
    btn_conc_att2.classList.add('conc-ativ')
  }
}
function resetAtt(){
  const elem = document.querySelectorAll('.adicionado');
  console.log(elem)
  elem.forEach(form => {
    respostas.appendChild(form)
    form.classList.remove('adicionado')
  })
  
  btn_conc.classList.remove('conc-ativ')
  btn_reset.classList.add('hidden')
}
function concAtt(){
  btn_conc.classList.add('conc-ativ')
}

function prossBar(){
    aulaQTS = document.querySelectorAll('.aula')
    
    const progBar = document.querySelector('.progress-bar div')
    espacoBar = document.getElementsByClassName('.progress-bar')
    tamanho = 100 / aulaQTS.length
    valor += tamanho
    console.log(valor)
    progBar.setAttribute('style', "width: " + valor + "%")
}
function selecionarResp(id){
    
    resp = document.getElementById(id)
    outrosSelects = document.querySelectorAll('.resp-select')
    outrosSelects.forEach(outros => {
      outros.classList.remove('resp-select')
    })
    resp.classList.add('resp-select')
  
    btn_conc_att3.classList.add('conc-ativ')
    btn_conc_att4.classList.add('conc-ativ')

}
function print(){

  html2canvas(document.body, {
    taintTest: true,
      onrendered: function(canvas) {
                    
                    return canvas.toDataURL()
                    
      }			
    });
}

divCorrecao = document.querySelector('.correcao')

function acertou(){
  passaaula = document.getElementById('btn-passaAula')
  reinicia = document.querySelector('.reinicia')
  divCorrecao.classList.add('acerto')  
  divCorrecao.classList.remove('hidden')
  divCorrecao.classList.remove('errou') 
  reinicia.classList.add('hidden')
  passaaula.style.display = 'block'
}
function errou(){
  passaaula = document.getElementById('btn-passaAula')
  reinicia = document.querySelector('.reinicia')
  divCorrecao.classList.add('errou') 
  divCorrecao.classList.remove('hidden') 
  divCorrecao.classList.remove('acerto') 
  passaaula.style.display = 'none'
  reinicia.classList.remove('hidden')
}

function correcao(att){
  acertos = 0
  textoCorrigido = document.getElementById('text-correcao')
  if(att == 'att2'){
    blocosResposta = document.querySelectorAll('.resposta')
    console.log(blocosResposta)
    Respostas = ['Tem Árvores', 'É Quente', 'É Alto', 'Tem Peixes']
    blocosResposta.forEach(bloco => {
      if( bloco.id == 'resposta1'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'É Alto'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta2'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Tem Peixes'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta3'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Tem Árvores'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta4'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'É Quente'){
          acertos +=1
          console.log(acertos)
        }
      }
    })
  
  if (acertos == 4){
   
    acertou()
    acertos = 0
    acertosGerais +=1
    textoCorrigido.textContent = 'Você acertou tudo Parabéns!'
  } else{
    errou()
    acertos = 0
    textoCorrigido.textContent = 'Oh não! Parece que alguma palavra está errada'
  }
  
  }
  if(att == 'att3'){
    select = document.querySelector('.resp-select')
    console.log(select)
    if(select.id == 'att2-res-2'){
      acertou()
      textoCorrigido.textContent = 'Você acertou. Parabéns!'
    }else{
      errou()
      textoCorrigido.textContent = 'Oh não! Essa não é a letra que vem antes'
    }
  }

  acertos = 0
  textoCorrigido = document.getElementById('text-correcao')
  if(att == 'att4'){
    blocosResposta = document.querySelectorAll('.resposta')
    console.log(blocosResposta)
    Respostas = ['Uma vila', 'Uma cidade pequena', 'Uma metropóle grande']
    blocosResposta.forEach(bloco => {
      if( bloco.id == 'resposta10'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Uma vila'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta11'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Uma cidade pequena'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta12'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Uma metrópole grande'){
          acertos +=1
          console.log(acertos)
        }
      } 
    })
  
  if (acertos == 3){
   
    acertou()
    acertos = 0
    acertosGerais +=1
    textoCorrigido.textContent = 'Você acertou tudo Parabéns!'
  } else{
    errou()
    acertos = 0
    textoCorrigido.textContent = 'Oh não! Parece que alguma palavra está errada'
  }
  
  }



  //erro ta acontecendo aqui

  acertos = 0
  textoCorrigido = document.getElementById('text-correcao')
  if(att == 'att10'){
    blocosResposta = document.querySelectorAll('.resposta')
    console.log(blocosResposta)
    Respostas = ['Exploração de recursos', 'Colonização forçada', 'Exposição a doenças']
    blocosResposta.forEach(bloco => {
      if( bloco.id == 'resposta10'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Exploração de recursos'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta11'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Colonização forçada'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta12'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Exposição a doenças'){
          acertos +=1
          console.log(acertos)
        }
      } 
    })
  
  if (acertos == 3){
   
    acertou()
    acertos = 0
    acertosGerais +=1
    textoCorrigido.textContent = 'Você acertou tudo Parabéns!'
  } else{
    errou()
    acertos = 0
    textoCorrigido.textContent = 'Oh não! Parece que alguma palavra está errada'
  }
  
  }


  if(att == 'att11'){
    select = document.querySelector('.resp-select')
    console.log(select)
    if(select.id == 'att11-res-1'){
      acertou()
      textoCorrigido.textContent = 'Você acertou. Parabéns!'
    }else{
      errou()
      textoCorrigido.textContent = 'Oh não! Essa não é a letra que vem antes'
    }
  }

  acertos = 0
  textoCorrigido = document.getElementById('text-correcao')
  if(att == 'att12'){
    blocosResposta = document.querySelectorAll('.resposta')
    console.log(blocosResposta)
    Respostas = ['Brasil Colônia', 'Brasil Escravista', 'Brasil República']
    blocosResposta.forEach(bloco => {
      if( bloco.id == 'resposta14'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Brasil Colônia'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta15'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Brasil Escravista'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta16'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'Brasil República'){
          acertos +=1
          console.log(acertos)
        }
      } 
    })
  
  if (acertos == 3){
   
    acertou()
    acertos = 0
    acertosGerais +=1
    textoCorrigido.textContent = 'Você acertou tudo Parabéns!'
  } else{
    errou()
    acertos = 0
    textoCorrigido.textContent = 'Oh não! Parece que alguma palavra está errada'
  }
  
  }


}
function Reiniciar(){
  resetAtt()
  divCorrecao.classList.add('hidden')
  outrosSelects = document.querySelectorAll('.resp-select')
    outrosSelects.forEach(outros => {
      outros.classList.remove('resp-select')
    })
}
function sair(){
  AbreModal("janela-modal-sair")
}
function tarefaFin(){
  $.ajax({
    type: 'post',
  
    url: '../php/finTarefa.php',
    data: $('#FormAttPT').serialize(),
    success: function(){

    },
    
    error: function(){
  
    }
  
  }) 

}
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>