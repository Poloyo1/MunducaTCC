
function speak(id){
    let text = document.getElementById("" + id + "").innerText

    const speaks = new SpeechSynthesisUtterance(text)
    speaks.lang = 'pt-br'
    window.speechSynthesis.speak(speaks)

}

function enviar(pagina){

  window.location.href = "https://munduca.page.gd/"+pagina

}




// Código para o modal - 22/06
var modal = document.getElementById("myModal");


var btn = document.querySelectorAll(".dia");


var span = document.getElementsByClassName("close")[0];

btn.forEach(btns =>{
  btns.onclick = function() {
    modal.style.display = "block";
  }
  
}

)
btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function mostrarElemento(idElemento) {
  var elemento = document.getElementById(idElemento);
  var elementos = document.querySelectorAll('.resumo'); // seleciona todas as divs com a classe 'resumo'

  elementos.forEach(function(el) {
    if (el.id === idElemento) {
      if (el.style.display !== "block") {
        el.style.display = "block";
      } else {
        el.style.display = "none";
      }
    } else {
      el.style.display = "none"; // fecha as outras divs que não é a selecionada
    }
  });
}

// Função para abrir e fechar os cards de resumo das matérias - 22/06 
let activeSection = null;

function toggleSection(id) {
    const content = document.getElementById(id);

    if (activeSection && activeSection !== id) {
        document.getElementById(activeSection).style.display = 'none';
    }

    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }

    activeSection = id;
}


const elem = document.getElementById('myModal')
const alturaTotal = $(document).height();
console.log("Altura total da página:", alturaTotal);
  elem.style.height = (alturaTotal * 2) + 'px'

  document.addEventListener("DOMContentLoaded", function() {
    var openModalButton = document.getElementById("openModalButton");
    var adicionarMateriaButton = document.getElementById("adicionarMateria");
    var reabrirModalButton = document.getElementById("reabrirModal");

    var modal = document.getElementById("myModal");
    var disciplinasEscolhidas = document.getElementById("disciplinasEscolhidas");
    var disciplinasMostrar = document.getElementById("disciplinasMostrar");
    var escolherMateria = document.getElementById("escolherMateria");
    var resumoPT = document.getElementById("resumoPT");
    var materiaImagem = document.getElementById("ptImagem");

    if (openModalButton) {
        openModalButton.addEventListener("click", function() {
            modal.style.display = "flex";
        });
    }

  
    if (reabrirModalButton) {
        reabrirModalButton.addEventListener("click", function() {
            // Mostrar o modal
            modal.style.display = "block";
        });
    }

    // Adicionar eventos de hover e click à imagem na div disciplinasMostrar
    if (adicionarMateriaButton) {
      adicionarMateriaButton.addEventListener("click", function() {
          // Fechar o modal
          modal.style.display = "none";

          // Esconder resumo e escolher matéria
          resumoPT.style.display = "none";
          escolherMateria.style.display = "none";

          // Mostrar disciplinas escolhidas
          disciplinasEscolhidas.style.display = "flex";

          // Mover a imagem para a div disciplinasMostrar
          disciplinasMostrar.appendChild(materiaImagem);
          disciplinasMostrar.appendChild(reabrirModalButton);
          disciplinasMostrar.style.justifyContent = 'start'
      });
  }

  if (reabrirModalButton) {
      reabrirModalButton.addEventListener("click", function() {
          // Mostrar o modal
          modal.style.display = "block";
      });
  }

  // Adicionar eventos de hover e click à imagem na div disciplinasMostrar
  if (materiaImagem) {
      materiaImagem.addEventListener("mouseover", function() {
          disciplinasMostrar.style.display = "flex";
      });

      materiaImagem.addEventListener("click", function() {
          // Verifica se a imagem está dentro da div disciplinasMostrar
          if (this.parentElement === disciplinasMostrar) {
            var div2 = document.getElementById("atividadesEscolhidas");
            // Toggle para mostrar ou ocultar div2
            if (div2.style.display === "none") {
                div2.style.display = "flex";
                resumoPT.style.display = "none";
            } else {
                div2.style.display = "none";
                resumoPT.style.display = "none";
            }
        }
      });
  }
});

function AbreModal(id){
  modal = document.getElementById(id)
  modal.style.display = 'flex'
  let doc = document.documentElement
  let value = doc.scrollHeight 
  modal.style.height = value +'px'
} 

function fechaModal(id){
  modal = document.getElementById(id)
  modal.style.display = 'none'
} 


const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];
cont = 0;

let isDragging = fals

function adicionarEvent(materia){

  $.ajax({
    type: 'post',

    url: 'php/cadastrarEventos.php',
    data: $("#"  + materia).serialize(),
    success: function(){
      
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        initialView: 'dayGridMonth',
        locale: 'pr-br',
        select: function(startdt){
          console.log('ta fun');
          start = startdt.startStr;
          var inputDataStart = document.querySelectorAll('.start')
          for (var i = 0; i < inputDataStart.length; i++) {
            inputDataStart[i].value = start;
       }
          modal.style.display = "block";
          calendar.unselect()
  
        },

        eventClick: function(info) {
          const eventDate = info.event.start;
      
      // Formata a data no formato yyyy-mm-dd
      const formattedDate = eventDate.toISOString().split('T')[0];
  
      console.log(formattedDate); 
  
          $.ajax({
              type: 'post',
          
              url: 'php/removeEvent.php',
  
              data: {
                  start: formattedDate        
              },
              success: function(data){
                  calendar.refetchEvents();
              },
              
              error: function(){
          
              }
          
          }) 
          },
       events: 'php/capturarEventos.php'
     });
  calendar.render();
  modal.style.display = "none";
    },
    
    error: function(){

    }

  })
}

function dataAtualiza(){
  $.ajax({
  type: 'post',

  url: 'php/dataAtivi.php',
  data: $('#Date').serialize(),
  success: function(data){
      const session = document.getElementById('session')
      var responseArray = JSON.parse(data);
      
      for (var i = 0; i < responseArray.length; i++) {

        var materia = responseArray[i]['materia']
        var color = responseArray[i]['color']
        const newDiv = document.createElement('section')
        newDiv.innerHTML = `<section>
    <div class="text-ar" id="text-ar">
       <b> <h1 class="titu text" id="data-Atual" style='color: ${color};'>${materia}</h1></b>
    </div>
    <section class="conteiner">
    <div class="tarefas-recentes">
        <div class="adicionar">
        <div  class="texto-recentes" style="padding: 2rem;margin-bottom: 2rem;">
               <b> <h1 class="text disciplinasR" id="disciplinas-recentes" >Atividades Pendentes </h1></b>
                <button class="speak" onclick="speak('disciplinas-recentes')"><span class="material-symbols-outlined">
volume_up
</span></button>   
            </div>
            <div class="separador">
                <div onclick="enviar('Views${materia}/atividade1.php')" style="background-color: ${color};" class="attEnviar attEnviar${materia}  text"><h1>Atividade 1</h1><img src="" alt=""></div>
                <div class="intersecao">
                    <div class="elementS inter1 inter1${materia}"></div>
                    <svg class="cadeado" xmlns="http://www.w3.org/2000/svg" width="42" height="50" viewBox="0 0 42 50" fill="none">
<path class="cad1 cad1${materia}" d="M35.4166 17.55V14.5833C35.4166 6.5292 28.8875 0 20.8333 0C12.7791 0 6.25 6.5292 6.25 14.5833V17.55C2.4584 19.2048 0.00546875 22.9464 0 27.0833V39.5833C0.00683594 45.3334 4.6665 49.9932 10.4166 50H31.2499C37 49.9932 41.6597 45.3334 41.6666 39.5833V27.0833C41.6612 22.9464 39.2082 19.2048 35.4166 17.55ZM22.9166 35.4167C22.9166 36.5673 21.9839 37.5 20.8333 37.5C19.6827 37.5 18.75 36.5673 18.75 35.4167V31.25C18.75 30.0994 19.6827 29.1667 20.8333 29.1667C21.9839 29.1667 22.9166 30.0994 22.9166 31.25V35.4167ZM31.25 16.6667H10.4166V14.5834C10.4166 8.83047 15.0803 4.1667 20.8333 4.1667C26.5863 4.1667 31.25 8.83037 31.25 14.5834V16.6667Z" fill="#374957"/>
</svg>
                    <div class="elementS inter1 inter1${materia}"></div>
                </div>
                <div class="attEnviar attEnviar${materia} text"><h1>Atividade 2</h1><img src="" alt=""></div>
                <div class="intersecao">
                    <div class="elementS inter2 inter2${materia}"></div>
                    <svg class=" cadeado" xmlns="http://www.w3.org/2000/svg" width="42" height="50" viewBox="0 0 42 50" fill="none">
<path class="cad2 cad2${materia}" d="M35.4166 17.55V14.5833C35.4166 6.5292 28.8875 0 20.8333 0C12.7791 0 6.25 6.5292 6.25 14.5833V17.55C2.4584 19.2048 0.00546875 22.9464 0 27.0833V39.5833C0.00683594 45.3334 4.6665 49.9932 10.4166 50H31.2499C37 49.9932 41.6597 45.3334 41.6666 39.5833V27.0833C41.6612 22.9464 39.2082 19.2048 35.4166 17.55ZM22.9166 35.4167C22.9166 36.5673 21.9839 37.5 20.8333 37.5C19.6827 37.5 18.75 36.5673 18.75 35.4167V31.25C18.75 30.0994 19.6827 29.1667 20.8333 29.1667C21.9839 29.1667 22.9166 30.0994 22.9166 31.25V35.4167ZM31.25 16.6667H10.4166V14.5834C10.4166 8.83047 15.0803 4.1667 20.8333 4.1667C26.5863 4.1667 31.25 8.83037 31.25 14.5834V16.6667Z" fill="#374957"/>
</svg>
                    <div class="elementS inter2 inter2${materia}"></div>
                </div>
                <div class="attEnviar attEnviar${materia}  text"><h1>Atividade 3</h1><img src="" alt=""></div>
                <div class="intersecao">
                    <div class="elementS inter3 inter3${materia}"></div>
                    <svg class=" cadeado" xmlns="http://www.w3.org/2000/svg" width="42" height="50" viewBox="0 0 42 50" fill="none">
<path class="cad3 cad3${materia}" d="M35.4166 17.55V14.5833C35.4166 6.5292 28.8875 0 20.8333 0C12.7791 0 6.25 6.5292 6.25 14.5833V17.55C2.4584 19.2048 0.00546875 22.9464 0 27.0833V39.5833C0.00683594 45.3334 4.6665 49.9932 10.4166 50H31.2499C37 49.9932 41.6597 45.3334 41.6666 39.5833V27.0833C41.6612 22.9464 39.2082 19.2048 35.4166 17.55ZM22.9166 35.4167C22.9166 36.5673 21.9839 37.5 20.8333 37.5C19.6827 37.5 18.75 36.5673 18.75 35.4167V31.25C18.75 30.0994 19.6827 29.1667 20.8333 29.1667C21.9839 29.1667 22.9166 30.0994 22.9166 31.25V35.4167ZM31.25 16.6667H10.4166V14.5834C10.4166 8.83047 15.0803 4.1667 20.8333 4.1667C26.5863 4.1667 31.25 8.83037 31.25 14.5834V16.6667Z" fill="#374957"/>
</svg>
                    <div class="elementS inter3 inter3${materia}"></div>
                </div>
                <div class="attEnviar attEnviar${materia}  text"><h1>Atividade 4</h1><img src="" alt=""></div>
                <div class="intersecao">
                    <div class="elementS inter4 inter4${materia}"></div>
                    <svg class=" cadeado" xmlns="http://www.w3.org/2000/svg" width="42" height="50" viewBox="0 0 42 50" fill="none">
<path class="cad4 cad4${materia}" d="M35.4166 17.55V14.5833C35.4166 6.5292 28.8875 0 20.8333 0C12.7791 0 6.25 6.5292 6.25 14.5833V17.55C2.4584 19.2048 0.00546875 22.9464 0 27.0833V39.5833C0.00683594 45.3334 4.6665 49.9932 10.4166 50H31.2499C37 49.9932 41.6597 45.3334 41.6666 39.5833V27.0833C41.6612 22.9464 39.2082 19.2048 35.4166 17.55ZM22.9166 35.4167C22.9166 36.5673 21.9839 37.5 20.8333 37.5C19.6827 37.5 18.75 36.5673 18.75 35.4167V31.25C18.75 30.0994 19.6827 29.1667 20.8333 29.1667C21.9839 29.1667 22.9166 30.0994 22.9166 31.25V35.4167ZM31.25 16.6667H10.4166V14.5834C10.4166 8.83047 15.0803 4.1667 20.8333 4.1667C26.5863 4.1667 31.25 8.83037 31.25 14.5834V16.6667Z" fill="#374957"/>
</svg>
                    <div class="elementS inter4 inter4${materia}"></div>
                </div>
                <div class="attEnviar text"><h1>Atividade 5</h1><img src="" alt=""></div>
            </div>

        </div>
    </div>
        
    </section>
    </section>
`
session.appendChild(newDiv);
blockatts(materia, color)
   }
     
  },
  
  error: function(){

  }

}) }


function attCadastro(){
  $.ajax({
    type: 'post',
  
    url: 'php/attCadastro.php',
    data: $('#form-atualiza').serialize(),
    success: function(data){

      window.location.reload(true);
    },
    
    error: function(){
  
    }
  
  }) 

}

function mudatamanho(tamanho){

let tamanhoFontePadrao = 100; // 100% equivale a 1rem

  tamanhoFontePadrao += tamanho * 30; // Aumenta ou diminui 
  document.documentElement.style.fontSize = tamanhoFontePadrao + "%";
  document.documentElement.style.transition = '0.5s';
  document.getElementById('font-size').value = tamanho;

  console.log(document.getElementById('font-size').value)
}
function alternarContraste() {
  const body = document.body;
  const botao = document.getElementById("btn-ligar");
  body.style.transition = '0.5s';
  if (body.classList.contains("alto-contraste")) {
    botao.innerText = "Ativar Alto Contraste";
    body.classList.remove("alto-contraste");
    body.style.backgroundColor = '';
    document.getElementById('alto_contra').value = 0;
    console.log(document.getElementById('alto_contra').value)
    
  } else {
    botao.innerText = "Desativar Alto Contraste";
    body.classList.add("alto-contraste");
    body.style.backgroundColor = 'black';
    document.documentElement.style.color = '';
    document.getElementById('alto_contra').value = 1;
    console.log(document.getElementById('alto_contra').value)
  }

  // Altera o texto do botão conforme o modo ativado
 
}
function aplicarFiltro(filtro) {
  const body = document.body;
  body.style.transition = '0.5s';
  // Remove todas as classes de filtro
  body.classList.remove("protanopia", "deuteranopia", "tritanopia", "monocromacia");
  document.getElementById('tip_daltonismo').value = filtro;
  // Aplica a classe de filtro selecionada, se não for "normal"
  if (filtro !== "normal") {
    body.classList.add(filtro);
    
  }
}
function salvarAlt(){
  $.ajax({
    type: 'post',
  
    url: 'php/attConfig.php',
    data: $('#form-acess').serialize(),
    success: function(data){

    },
    
    error: function(){
  
    }
  
  }) 
}

 function carregarConfiguracoes() {

  $.ajax({
    type: 'post',
  
    url: 'php/carregarConfigs.php',
    success: function(data){
        
      var array = JSON.parse(data);
      console.log(array)
      var tamanho = array[0];
      let tamanhoFontePadrao = 100; // 100% equivale a 1rem
      tamanhoFontePadrao += tamanho * 30; // Aumenta ou diminui 
      document.documentElement.style.fontSize = tamanhoFontePadrao + "%";
      if(array[1] == 1){
        const body = document.body;
        

        if (body.classList.contains("alto-contraste")) {
          body.classList.remove("alto-contraste");
          body.style.backgroundColor = '';        
        } else {
       
          body.classList.add("alto-contraste");
          body.style.backgroundColor = 'black';
          document.documentElement.style.color = '';
        }

      }
      const body = document.body;
      var filtro = array[2]
      body.classList.remove("protanopia", "deuteranopia", "tritanopia", "monocromacia");
      if (filtro !== "normal") {
        body.classList.add(filtro);
      }
    },
    
    error: function(){
  
    }
  
  }) 
}

// Chamar a função para carregar as configurações ao carregar a página
window.onload = carregarConfiguracoes();

function sairConta(){
  $.ajax({
    type: 'post',
  
    url: 'php/sairConta.php',
    success: function(data){
      enviar('index.php')
    },
    
    error: function(){
  
    }
  
  }) 
}
function blockatts(materia, cor){
  $.ajax({
    type: 'post',
  
    url: 'php/blockAtts.php',
    data: {
      materia: materia        
    },
    success: function(data){
      var responseArray = JSON.parse(data);
      console.log(responseArray)

      
      var btnAttsEnviar = document.querySelectorAll(`.attEnviar${materia}`)
      for (let i = 0; i < responseArray.length; i++) {
        console.log(btnAttsEnviar[responseArray[i]['num_att']])
        var inters = document.querySelectorAll(`.inter${i+1}${materia}`)
        var cad = document.querySelectorAll(`.cad${i+1}${materia}`)
        materia = responseArray[i]['materia']
        let num_att = (Number(responseArray[i]['num_att']) + 1)
        btnAttsEnviar[Number(responseArray[i]['num_att'])].addEventListener("click",  () => window.location.href =`Views${materia}/atividade${num_att}.php`)
        for(var x = 0; x < inters.length; x++){
          inters[x].style.backgroundColor = cor;
          
        }
        for(var x = 0; x < cad.length; x++){
          cad[x].setAttribute('fill', cor);
          
        }
        btnAttsEnviar[Number(responseArray[i]['num_att'])].style.backgroundColor = cor;

      }

    },
    
    error: function(){
  
    }
  
  }) 
}
function mudaFoto(animal){
  var fotos = document.querySelectorAll('.perfilImg')
  for (var i = 0; i < fotos.length; i++) {
    fotos[i].setAttribute('src', `imgs/perfil/${animal}.png`)
}
  btnAttFoto = document.getElementById('attBtn')
  btnAttFoto.classList.remove('nSelecionavel')
  btnAttFoto.addEventListener("click",  () =>  $.ajax({
    type: 'post',
  
    url: 'php/mudaFoto.php',
    data: {
      animal: animal        
    },
    success: function(data){
      fechaModal('modal-foto-perfil')
    },
    
    error: function(){
  
    }
  
  }) )

}
function mudaexib(destino, apaga, btn1, btn2){
    var destinoElem = document.getElementById(destino)
    var apagaElem = document.getElementById(apaga)
    var sele = document.getElementById(btn1)
    var notSele = document.getElementById(btn2)
    destinoElem.classList.remove('hidden')
    apagaElem.classList.add('hidden')
    sele.classList.add('btnSel')
    notSele.classList.remove('btnSel')
}

