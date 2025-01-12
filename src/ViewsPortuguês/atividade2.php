
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
    <title>Atividade 2 - Português</title>
    <link rel="icon" class="size-16" href="../imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>

.container_2 {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #007BFF;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-bottom: 2rem;
}

h1 {
    color: #007BFF;
}

#word-image {
    width: 50%;
    height: auto;
    max-height: 200px;
    border-radius: 10px;
}

h2 {
    font-size: 2em;
    margin: 20px 0;
}
.modal-final{
    height: 80%;
}
button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.option {
    display: inline-block;
    margin: 10px;
    padding: 15px;
    border: 1px solid #007BFF;
    border-radius: 5px;
    background-color: #e0f7fa;
    cursor: pointer;
    transition: background-color 0.3s;
}

.option:hover {
    background-color: #b2ebf2;
}

#score {
    font-size: 1.2em;
    margin-top: 20px;
}
</style>
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
            <div class="titulo-Aula text"><h1>Sílabas </h1></div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"><</i>
                <ul class="carousel">
                    <li class="card">
                      <h1 class="text">Vamos Explorar as Sílabas Mágicas!</h1>
                      <p class="text" id="text-1">Hoje vamos embarcar em uma emocionante jornada pelo mundo das sílabas, que são como pequenos pedacinhos de palavras que se unem para formar histórias incríveis. Vamos descobrir juntos como as sílabas funcionam e como podemos brincar com elas para criar palavras! </p>
                    <button class="speak-all" onclick="speak('text-1')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">O Que são sílabas? </h1>   
                    <p class="text" id="text-1">Alfabetização é como abrir uma porta para um mundo cheio de conhecimento e magia. É o processo de aprender a ler e escrever, de decifrar os segredos das letras e entender como elas se unem para formar palavras. É como desvendar um quebra-cabeça emocionante, onde cada pedacinho é uma letra e cada letra nos conta uma história.</p>  
                    <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                      <h1 class="text">As Sílabas Cantantes: As Vogais </h1>   
                        <p class="text" id="text-1">Vamos começar conhecendo as sílabas formadas pelas vogais. As vogais são como os cantores principais de uma música, e quando elas se unem, formam sílabas encantadoras. Vamos praticar juntos: </p>
                        <button class="speak-all" onclick="speak('text-2')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                        <li class="card">
                        <p class="text" id="text-3">A: a-mor, a-ve, a-qui. <br>
                        E: e-le-fan-te, e-sco-la, e-squi-lo. <br>
                        i-gre-ja, i-pê, i-glo. <br>
                         o-vo, o-lho, o-tô-no. <br>
                        u-va, u-ni-ver-si-da-de, u-lu-lan-te.</p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    </li>
                        <li class="card">
                        <p class="text" id="text-3">Agora, vamos conhecer as sílabas formadas pelas consoantes, que são como os amigos das vogais. Elas são muito importantes para formar palavras interessantes. Vamos praticar juntos: <br>
                        B: ba-la, bo-né, bu-que.  <br>
                        C: ca-sa, co-zi-nha, cu-po. <br>
                         D: da-do, de-do, du-que. <br>
                        F: fa-cha, fo-lha, fu-turo.</p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    </li>
                        <li class="card">
                        <p class="text" id="text-3">G: ga-to, go-lfe, guer-ra. <br>
                        M: ma-mãe, me-sa, mu-seu.  <br>
                        P: pa-to, po-ço, pu-lar. <br>
                        S: sa-po, so-pa, su-co. <br>
                        T: ta-tu, to-ca, tu-nel.</p>
                        <button class="speak-all" onclick="speak('text-3')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                    </li>
                    <li class="card">
                    <div class="video">
                    <iframe class="video_youtube" width="560" height="315" src="https://www.youtube.com/embed/jv7-2Y5LTQw?si=vmrs1L5utJQzXLn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        </div>
                    </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right">></i>
            </div>
            <div class="conc">
                        <button class="btn-conc" onclick="passaAula2()">Continuar</button>
                    </div>
        </div>
        <div class="aula hidden" id="att2">
            <div class="titulo-Aula text"><h1>Atividade 2</h1></div>
            <div class="tarefa">
                <div class="tituloAtt text"><h1>Qual é a Letra?</h1></div>
                    <div class="container_2">
                        <h1 class="text">Jogo de Contagem de Sílabas</h1>
                        <div id="image-container">
                            <img id="word-image" src="" alt="Imagem da Palavra" />
                        </div>
                        <div id="word-container">
                            <h2 class="text" id="word"></h2>
                        </div>
                        <div id="options-container"></div>
                        <button  id="next-button">Próxima Palavra</button>
                        <p class="text" id="score">Pontuação: 0</p>
                    </div>
            </div>
        </div>

            
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
                <button class="btn-conc" id="btn-passaAula" onclick="exibirPalavra()">Concluido</button>
                <button class="btn-conc hidden reinicia" id="" onclick="exibirPalavra()">Refazer</button>
    </div> 
    <form id="FormAttPT">
        <input type="hidden" name="materia" id="materia" value="Português">
        <input type="hidden" name="pontos" id="pontos" value="50">
        <input type="hidden" name="atividade" id="atividade" value=2>                  
    </form>
    
   
    <script>
         function passaAula2(){
  btnAtivo = document.querySelectorAll('.conc-ativ')
  divCorrecao.classList.add('hidden')
  if (btnAtivo.length > 1){
      aulas = document.querySelectorAll('.aula')
      aulaExibida = document.querySelectorAll('.exibe')
      
      estaExibindo = true
      btn_conc.classList.remove('conc-ativ')
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
        const palavras = [
    { palavra: "Maçã", silabas: 2, imagem: "https://static.vecteezy.com/system/resources/previews/014/386/901/original/hand-drawn-style-fruit-apple-free-png.png" },
    { palavra: "Banana", silabas: 3, imagem: "https://static.vecteezy.com/system/resources/previews/009/584/950/original/cute-and-smile-cartoon-fruit-colorful-character-banana-free-png.png" },
    { palavra: "Uva", silabas: 2, imagem: "https://th.bing.com/th/id/OIP.f7CPda_YI8i2vHyBXnx6UgHaHv?rs=1&pid=ImgDetMain" },
    { palavra: "Laranja", silabas: 3, imagem: "https://static.vecteezy.com/system/resources/previews/024/912/311/original/slice-orange-cartoon-free-png.png" },
    { palavra: "Morango", silabas: 3, imagem: "https://png.pngtree.com/png-clipart/20220730/original/pngtree-strawberry-vector-png-image_8443445.png" },
    { palavra: "Kiwi", silabas: 2, imagem: "https://static.vecteezy.com/system/resources/previews/021/252/059/non_2x/cute-fruits-kiwi-cartoon-free-png.png" },
    { palavra: "Pêssego", silabas: 3, imagem: "https://th.bing.com/th/id/OIP.qiUsGBJQb2rXkKwTVhb1ngHaGm?rs=1&pid=ImgDetMain" },
    { palavra: "Melancia", silabas: 4, imagem: "https://th.bing.com/th/id/R.93094d24b8658c6255ccaa847b37a8ef?rik=qRMRUhQUNVnTGw&pid=ImgRaw&r=0" },
];

let pontuacao = 0;
let indicePalavraAtual = 0;
const totalPalavras = palavras.length;
textoCorrigido = document.getElementById('text-correcao')
function exibirPalavra() {
    divCorrecao = document.querySelector('.correcao')
    const palavraElement = document.getElementById("word");
    const imagemElement = document.getElementById("word-image");
    const opcoesContainer = document.getElementById("options-container");
    divCorrecao.classList.add('hidden')
    opcoesContainer.innerHTML = '';

        // Se todas as palavras foram exibidas, exibe uma mensagem final.
        if (indicePalavraAtual >= totalPalavras) {
            passaAula2()
          
       
        return;
    }

    // Obtém a palavra atual e exibe a imagem correspondente.
    const palavraAtual = palavras[indicePalavraAtual];
    palavraElement.textContent = palavraAtual.palavra;
    imagemElement.src = palavraAtual.imagem;

    // Gera opções de sílabas para o usuário escolher.
    const opcoesSilabas = gerarOpcoesSilabas(palavraAtual.silabas);
    opcoesSilabas.forEach(opcao => {
        const opcaoElement = document.createElement("div");
        opcaoElement.textContent = opcao;
        opcaoElement.classList.add("option");
        opcaoElement.onclick = () => verificarResposta(opcao, palavraAtual.silabas);
        opcoesContainer.appendChild(opcaoElement);
    });
}

function gerarOpcoesSilabas(silabasCorretas) {
    const opcoes = new Set();
    opcoes.add(silabasCorretas); // Adiciona a opção correta.

    // Gera opções incorretas.
    while (opcoes.size < 4) {
        const opcaoIncorreta = Math.floor(Math.random() * 5) + 1; // Gera números de 1 a 5.
        opcoes.add(opcaoIncorreta);
    }

    return Array.from(opcoes).sort((a, b) => a - b); // Retorna as opções ordenadas.
}

function verificarResposta(opcaoSelecionada, silabasCorretas) {
    const scoreElement = document.getElementById("score");
    if (opcaoSelecionada == silabasCorretas) {
        acertou()
        textoCorrigido.textContent='Correto!'
        pontuacao++;
    } else {
        errou()
        textoCorrigido.textContent='Incorreto, Tente novamente!'
    }
    scoreElement.textContent = `Pontuação: ${pontuacao}`;
    indicePalavraAtual++;

}


// Inicia o jogo exibindo a primeira palavra.
exibirPalavra();

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