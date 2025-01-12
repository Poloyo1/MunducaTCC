
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
  btn_conc_att3.classList.remove('conc-ativ')
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
        tarefaFin()
        btn_conc.style.display = 'none'
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
    Respostas = ['F', 'B', 'B', 'D']
    blocosResposta.forEach(bloco => {
      if( bloco.id == 'resposta1'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'F'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta2'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'B'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta3'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'B'){
          acertos +=1
          console.log(acertos)
        }
      } else if( bloco.id == 'resposta4'){
        console.log(bloco)
        resposta = document.querySelector("#"+ bloco.id +" button")
        console.log(resposta)
        if(resposta.textContent == 'D'){
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
    if(select.id == 'att2-res-3'){
      acertou()
      textoCorrigido.textContent = 'Você acertou. Parabéns!'
    }else{
      errou()
      textoCorrigido.textContent = 'Oh não! Essa não é a letra que vem antes'
    }
  }
  if(att == 'att4'){
    select = document.querySelector('.resp-select')
    console.log(select)
    if(select.id == 'att3-res-4'){
      acertou()
      textoCorrigido.textContent = 'Você acertou. Parabéns!'
    }else{
      errou()
      textoCorrigido.textContent = 'Oh não! Essa não é a letra que vem depois'
    }
  }
}
function Reiniciar(){
  resetAtt()
  divCorrecao.classList.add('hidden')
  btn_conc_att2.classList.remove('conc-ativ')
  btn_conc_att3.classList.remove('conc-ativ')
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
