
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade 1</title>
    <link rel="icon" class="size-16" href="../imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .wrapper1{
  display: grid;
  grid-template-columns: 82% 18%;
}

.equation{
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.9);
  font-size: 5.2vw;
  background: #fff;
  border-radius: 3px;
  text-align: center;
  margin: 10px 10px 10px 10px;
  max-height: 400px;
}

.equation h1{
  display: inline;
  padding: 20px;
}

.answer-options{
  font-size: 5.2vw;
  margin-right: 10px;
}

.options{
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  border-radius: 3px;
  margin-top: 10px;
  margin-bottom: 5px;
  color: #fff;
  transition: 2s;
  box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.9);
}
.options h1{
    margin: 0;
}
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
            <div class="titulo-Aula text"><h1>Introduzindo os Números </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                    <li class="card">
                        <p class="text" id="text-1"> Olá, pequenos matemáticos! Você já parou para pensar em como os números estão presentes em quase tudo ao nosso redor? Eles nos ajudam a contar quantos brinquedos temos, a saber quantas frutas comemos e até mesmo a dizer nossa idade! Vamos explorar os números de uma forma divertida e descobrir como eles podem ser nossos amigos na matemática! </p>
                        <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <h1 class="text">Contando Objetos  </h1>  
                        <p class="text" id="text-1">Os números nos ajudam a contar objetos e saber quantos temos. Por exemplo: 
                        Se você tem 3 lápis na sua mochila, você pode contar "um, dois, três" para saber quantos lápis você tem. 
                        Se há 5 bolinhas coloridas em uma caixa, você pode contar "um, dois, três, quatro, cinco" para saber quantas bolinhas estão lá. </p>      
                        <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card" style="height: max-content !important;">
                        <h1 class="text">Ordem dos Números e Suas Quantidades </h1>
                        <p class="text" id="text-1">Os números nos ajudam a contar objetos e saber quantos temos. Por exemplo: 
                        Se você tem 3 lápis na sua mochila, você pode contar "um, dois, três" para saber quantos lápis você tem. 
                        Se há 5 bolinhas coloridas em uma caixa, você pode contar "um, dois, três, quatro, cinco" para saber quantas bolinhas estão lá. Os números nos ajudam a saber quanto de algo temos. Por exemplo: 
                        Se você tem 2 bonecas para brincar, você sabe que tem uma quantidade pequena. 
                        Se você tem 10 balões em uma festa, você sabe que tem uma quantidade grande.  </p> 
                        <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card"  style="height: max-content !important;">
                        <h1 class="text">Operações básicas: adição e subtração </h1>
                        <p class="text" id="text-3">Adição - Imagine quando você está brincando de casinha e vai adicionando mais bonecos à sua casa de brinquedo. Isso é como a adição na Matemática! É quando juntamos elementos, como bonecos ou números, para aumentar a quantidade. Na adição, usamos o símbolo + para indicar que estamos adicionando algo. É como se estivéssemos constantemente somando mais coisas para ver quanto teremos no final. É bem legal!  </p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <div class="img-text">
                        <p class="text" id="text-3">A adição envolve descobrir a soma de dois números. Para fazer isso, colocamos os números um em cima do outro, como uma pilha, e somamos os números de cada coluna, começando pelas unidades. Por exemplo, se quisermos somar 23 com 15, colocamos 23 em cima de 15 e somamos os números, começando pelas unidades: 3 + 5 = 8. Então, a resposta é que 23 + 15 é igual a 38. É assim que fazemos uma conta de adição!</p>
                        <img src="imgs/adicao.png" class="text-img" alt="Adição">
                        </div>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <div class="video">
                        <iframe class="video_youtube" width="560" height="315" src="https://www.youtube.com/embed/prsJNR0Zbqg?si=4qfwSmqmCIozgwdj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        </div>
                    </li>
                    <li class="card">
                        <p class="text" id="text-3">Subtração - Subtração é quando tiramos algo de um grupo ou de um número. Por exemplo, se temos 10 maçãs e comemos 3, sobram 7 maçãs. 
                        Na subtração, usamos um traço (-) e lemos "menos". O número inicial é chamado de minuendo e o número que tiramos é chamado de subtraendo. Por exemplo, se temos 10 balas e damos 5 para um amigo, o minuendo é 10 e o subtraendo é 5.</p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card" style="height: max-content !important;">
                        <div class="img-text" style="flex-direction:column;">
                        <p class="text" id="text-3">A subtração é importante porque nos ajuda a descobrir quanto resta de algo depois de tirarmos uma parte. É como um bolo: se cortarmos um pedaço, quanto sobra do bolo? É aí que usamos a subtração! É muito legal aprender a subtrair para saber coisas como quanto sobrou, quanto falta ou qual é a diferença entre dois números. 
                        Exemplo: Havia 6 maçãs e Joana comeu 2. Quantas maçãs sobraram? 
                        O 6 é o minuendo, pois é a quantidade inicial de maçãs, e o 2 é o subtraendo, pois é a quantidade de maçãs que Joana comeu.</p>
                        </div>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                        <div class="video">
                        <iframe class="video_youtube" width="560" height="315" src="https://www.youtube.com/embed/nOvXPFkaxJs?si=GULjKbMv9LNgvpSk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </li>
                    <li class="card">
                        <div class="video">
                        <iframe class="video_youtube" width="560" height="315" src="https://www.youtube.com/embed/rljiBbTOFvc?si=T6RT2gMhAX_8ybNP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </li>
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
                <div class="tituloAtt text"><h1>Resolva a conta</h1></div>
                <div class="descAtt text"><p>clique na caixa de resposta ao lado para resolver a questão</p></div>
                <audio id="myAudio">
    <source src="wrong.mp3" type="audio/mpeg">
  </audio>  
  <div class="wrapper1">
      <div class="equation">
        <h1  id="num1" style="color:#FE4A49"></h1>
        <h1 style="color: #2AB7CA;">*</h1>
        <h1  id="num2" style="color: #FED766">1</h1>
        <h1  style="color: #F86624">=</h1>
        <h1  style="color: gray">?</h1>
      </div>
      <div class="answer-options">
        <div class="options" style="background-color: #FE4A49;">
          <h1 id="option1">1</h1>
        </div>
        <div class="options" style="background-color: #2AB7CA;">
          <h1 id="option2">2</h1>
        </div>
        <div class="options" style="background-color: #FED766;">
          <h1 id="option3">3</h1>
        </div>
      </div>
  </div>
            </div>
            <div class="conc">
                <button class="hidden reset" id="reset" onclick="resetAtt()">Recomeçar</button>
                <button class="btn-conc btn-att2" id="" onclick="correcao('att2')">Concluido</button>
            </div> 
            
        </div>
        <div class="aula hidden" id="att3">
        <div class="titulo-Aula text"><h1>Atividade 2</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Resolva a conta</h1></div>
                <div class="descAtt text"><p>clique na caixa de resposta ao lado para resolver a questão</p></div>
                <audio id="myAudio">
    <source src="wrong.mp3" type="audio/mpeg">
  </audio>  
  <div class="wrapper1">
      <div class="equation">
        <h1  id="num12" style="color:#FE4A49"></h1>
        <h1 style="color: #2AB7CA;">÷</h1>
        <h1  id="num22" style="color: #FED766">1</h1>
        <h1  style="color: #F86624">=</h1>
        <h1  style="color: gray">?</h1>
      </div>
      <div class="answer-options">
        <div class="options" style="background-color: #FE4A49;">
          <h1 id="option12">1</h1>
        </div>
        <div class="options" style="background-color: #2AB7CA;">
          <h1 id="option22">2</h1>
        </div>
        <div class="options" style="background-color: #FED766;">
          <h1 id="option32">3</h1>
        </div>
      </div>
  </div>
            </div>
            <div class="conc">
                <button class="btn-conc btn-att3" id="" onclick="correcao('att3')">Concluido</button>
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
        <input type="hidden" name="materia" id="materia" value="Matemática">
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
        attAtividade('Matemática')
    </script>
     <script src="../js/atividades.js"></script>

    <script>
          textoCorrigido = document.getElementById('text-correcao')
        const option1 = document.getElementById("option1"),
      option2 = document.getElementById("option2"),
      option3 = document.getElementById("option3"),
      audio = document.getElementById("myAudio");  
var answer = 0;
gum = 0
function generate_equation(){ 
  var num1 = Math.floor(Math.random() * 13),
      num2 = Math.floor(Math.random() * 13),
      dummyAnswer1 = Math.floor(Math.random() * 10),
      dummyAnswer2 = Math.floor(Math.random() * 10),
      allAnswers = [],
      switchAnswers = [];
      

  answer = eval(num1 * num2);
  
  document.getElementById("num1").innerHTML = num1; 
  document.getElementById("num2").innerHTML = num2; 

  allAnswers = [answer, dummyAnswer1, dummyAnswer2];

  for (i = allAnswers.length; i--;){
    switchAnswers.push(allAnswers.splice(Math.floor(Math.random() * (i * 1)), 1)[0]);
  };

  option1.innerHTML = switchAnswers[0];
  option2.innerHTML = switchAnswers[1];
  option3.innerHTML = switchAnswers[2]; 
};

option1.addEventListener("click", function(){
    if(option1.innerHTML == answer){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            gum = 0
            textoCorrigido.textContent = 'Parabéns, você é muito bom multiplicando'
        }else{
            generate_equation();
        }

    }
    else{
      audio.play();
    }
});

option2.addEventListener("click", function(){
    if(option2.innerHTML == answer){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            gum = 0
            textoCorrigido.textContent = 'Parabéns, você é muito bom multiplicando'
        }else{
            generate_equation();
        }
      
    }
    else{
      audio.play();
    }
});

option3.addEventListener("click", function(){
    if(option3.innerHTML == answer){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            gum = 0
            textoCorrigido.textContent = 'Parabéns, você é muito bom multiplicando'
        }else{
            generate_equation();
        }
    }
    else{
      audio.play();
    }
});

generate_equation()

const option12 = document.getElementById("option12"),
      option22 = document.getElementById("option22"),
      option32 = document.getElementById("option32")
var answer2 = 0;


function generate_equation2(){ 
  var num1 = Math.floor(Math.random() * 13),
      num2 = Math.floor(Math.random() * 13),
      dummyAnswer1 = Math.floor(Math.random() * 10),
      dummyAnswer2 = Math.floor(Math.random() * 10),
      allAnswers = [],
      switchAnswers = [];
      

  answer2 = eval(num1 / num2).toFixed(1);
  
  document.getElementById("num12").innerHTML = num1; 
  document.getElementById("num22").innerHTML = num2; 

  allAnswers = [answer2, dummyAnswer1, dummyAnswer2];

  for (i = allAnswers.length; i--;){
    switchAnswers.push(allAnswers.splice(Math.floor(Math.random() * (i / 1)), 1)[0]);
  };

  option12.innerHTML = switchAnswers[0];
  option22.innerHTML = switchAnswers[1];
  option32.innerHTML = switchAnswers[2]; 
};

option12.addEventListener("click", function(){
    if(option12.innerHTML == answer2){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            textoCorrigido.textContent = 'Parabéns, você é muito bom dividindo'
        }else{
            generate_equation2();
        }

    }
    else{
      audio.play();
    }
});

option22.addEventListener("click", function(){
    if(option22.innerHTML == answer2){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            textoCorrigido.textContent = 'Parabéns, você é muito bom dividindo'

        }else{
            generate_equation2();
        }
      
    }
    else{
      audio.play();
    }
});

option32.addEventListener("click", function(){
    if(option32.innerHTML == answer2){
        gum++
        console.log(gum)
        if(gum > 2){
            acertou()
            textoCorrigido.textContent = 'Parabéns, você é muito bom dividindo'

        }else{
            generate_equation2();
        }
    }
    else{
      audio.play();
    }
});

generate_equation2()

    </script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>