<?php 
session_start();

include_once('php/config.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
} else{
    $logado = $_SESSION['email'];
    $rg = $_SESSION['rg'];
    $query_crianca = mysqli_query($mysqli, "SELECT * FROM criancas where rg_pai = '$rg'");
    $result = mysqli_fetch_assoc($query_crianca);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.css' rel='stylesheet' />

    <title>Munduca | Home</title>
</head>
<body onLoad="carregarConfiguracoes()" id="texo-acessibilidade">

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="js/index.global.min.js"></script>
<script src="core/locales-all.global.min.js"></script>
<nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <a href="HubHome.php">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;"></a>
            <div class="flex items-center">
            <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;">Pontos: <?php echo  $result['pontos']; ?> </button>
                <div class="foto_perfil">
                    <img class="perfilImg" onclick="AbreModal('modal-foto-perfil')" src="<?php echo  $result['foto_perfil']; ?>" alt="">
                </div> 
                <button class="btnAreaAluno" onclick="enviar('areaAluno.php')">Área do Aluno</button>
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                <button><a href="configuracao.php"><img class="size-8" src="imgs/configuracao.png" alt="Configuração"></a></button>
            </div>
           

        </div>
    </nav>
    <div class="text-ar" id="text-ar">
       <b> <h1 class="titu text">Seja Bem-vindo(a) <?php    
         

    $sql = $mysqli->query("SELECT * FROM pais_responsaveis where email = '$logado'");
    $result =  mysqli_fetch_assoc($sql);
    echo $result['nome']; 

?>

        </h1></b>
    </div>
     <div id='calendar'>
        <script>document.addEventListener('DOMContentLoaded', function() {
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
        console.log(startdt);
        start = startdt.startStr;
        console.log(start);
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
  });</script>

     </div>
    <section class="estatisticas">
        <b> <h1 class="titu text">Emblemas de <?php    
         
         $rg = $_SESSION['rg'];
         $sql = $mysqli->query("SELECT * FROM criancas where rg_pai = '$rg'");
         $result =  mysqli_fetch_assoc($sql);
         echo $result['nome_aluno']; 
     
     ?> </h1> </b>
        <div class="exibirEmblemas divExibir">
        <?php 
            $rg = $_SESSION['rg'];
            $queryEmblema = $mysqli->query("SELECT * FROM emblemas where rg_pai = '$rg'");
            if(mysqli_num_rows($queryEmblema) > 1){
                while($row = mysqli_fetch_assoc($queryEmblema)){
                    $emblema = $row['emblema'];
                    echo '<div class="embleminha"><img src="'.$emblema.'" alt=""></div>'; 
                }
            }else{
                echo 'Sem emblemas ainda';
            }

         
            ?>
            
        </div>
        <b> <h1 class="titu text">Desenhos de <?php    
         
         $rg = $_SESSION['rg'];
         $sql = $mysqli->query("SELECT * FROM criancas where rg_pai = '$rg'");
         $result =  mysqli_fetch_assoc($sql);
         echo $result['nome_aluno']; 
     
     ?> </h1> </b>
        <div class="exibirDesenhos divExibir">
        <?php 
            $rg = $_SESSION['rg'];
            $queryDesenhos = mysqli_query($mysqli, "SELECT * FROM desenhos WHERE rg_pai = '$rg'");
            if(mysqli_num_rows( $queryDesenhos) > 0){
                
                while($row = mysqli_fetch_assoc( $queryDesenhos)){
                    $desenho = $row['desenho'];
                    
                    echo '<div class="embleminha"><img class="desenhoArt" src="src/'.$desenho.'" alt=""></div>'; 
                }
            }else{
                echo 'Sem desenhos ainda';
            }

         
            ?>
        </div>
    </section>

<!-- Modal -  22/06 -->
<div id="myModal" class="janela-modal">

  <!-- Conteúdo Modal -  22/06 -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Escolha as matérias que deseja estudar :</h2>
    </div>
    <div class="modal-body">
       
    <div class="tarefas" id="tarefas">
            <section class="escolher_disciplinas">
            <div class="wrap">
                    <div class="disciplina popup" id="ptImagem" style="background-color:#0476D9;" onclick="mostrarElemento('resumoPT')"><b><span class="popuptext" id="myPopup">Português</span></b> <button id="btn-pt" class="btn-materia"><img src="imgs/portugues.png" alt=""></button></div>
                        <div class="disciplina popup" style="background-color:#F20519;" onclick="mostrarElemento('resumoMT')"><b><span class="popuptext" id="myPopup">Matemática</span></b><button class="btn-materia"><img src="imgs/matematica.png" width="100px" height="100px" alt=""></button></div>
                        <div class="disciplina popup" style="background-color:#693FD2;" onclick="mostrarElemento('resumoTC')"><b><span class="popuptext" id="myPopup">Tecnologia</span></b><button class="btn-materia"><img src="imgs/tecnologia.png" width="100px" height="100px" alt=""></button></div>
                        <div class="disciplina popup" style="background-color:#FFC000;" onclick="mostrarElemento('resumoGH')"><span class="popuptext" id="myPopup">Geografia e História</span><button class="btn-materia"><img src="imgs/geografia_historia.png" width="100px" height="100px" alt=""></button></div>
                        <div class="disciplina popup" style="background-color:#0ABF04;" onclick="mostrarElemento('resumoCI')"><b><span class="popuptext" id="myPopup">Ciências</span></b><button class="btn-materia"><img src="imgs/ciencias.png" width="100px" height="100px" alt=""></button></div>
                    </div>
                    
            </section>
                 
        </div>
       <!-- Mostrar os resumos das matérias - 22/06 -->
        <!--PORTUGUÊS-->
        <div id="resumoPT" class="resumo">
        <div  class="texto-recentes_">
            <b> <h1 class="text-title" style="font-size: 1.5em; margin-left: 4em; color: #004356">Língua Portuguesa</h1></b>
        </div>
            <div class="tarefas-recentes">
            <div class="adicionar_desaparecer">
            <div class="tarefas1" id="tarefas">
            <div class="atts-scroll" id="scroll"></div>
            <section class="escolher_disciplinas">
        <div class="conteudo_">
            <div class="section">
                <div class="section-header" onclick="toggleSection('section1')">
                    1. Alfabetização
                </div>
                <div class="section-content" id="section1">
                    <b><h2>Vídeo Educativo sobre o Abecedário:</b></h2>
                        <li>O ABECEDÁRIO de A a Z - Vídeo educativo para aprender as letras</li>
                    <b><h2>Bem-vindos ao Mundo das Letras e dos Sons:</h2></b>
                        <li>O Que é Alfabetização?</li>
                            <li class="sub-lista">Alfabetização é o processo de aprender a ler e escrever.</li>
                        <li>As Letrinhas Mágicas</li>
                            <li class="sub-lista">As letras são como pequenos tesouros, cada uma com seu som e personalidade.</li>
                        <li>Explorando os Sons
                            <li class="sub-lista">Aprender a identificar os sons ao nosso redor e relacioná-los com as letras.</li>
                </div>
            </div>

            <div class="section">
                <div class="section-header" onclick="toggleSection('section2')">
                    2. Vogais e Consoantes
                </div>
                <div class="section-content" id="section2">
                    <!-- Conteúdo da seção Vogais e Consoantes -->
                    <b><h2>Descobrindo as vogais:</b></h2>
                        <li>As Vogais: As Letrinhas Cantantes (A, E, I, O, U)</li>
                            <li class="sub-lista">As vogais têm um som forte e claro, essenciais para formar palavras.</li>
                        <li>Vídeo Sobre Vogais e Consoantes </li>
                            <li class="sub-lista">Vogais e Consoantes | Vídeo Educativo para Crianças. </li>
                    <b><h2>Descobrindo as Consoantes:</b></h2>
                        <li>As Consoantes: As Letrinhas Amigas</li>
                            <li class="sub-lista">As consoantes acompanham as vogais e ajudam a formar palavras interessantes.</li>
                    <b><h2>Juntos Somos Mais Fortes:</b></h2>
                        <li>Combinação de Vogais e Consoantes</li>
                            <li class="sub-lista">Vogais e consoantes se juntam para formar palavras que nos ajudam a nos comunicar.</li>
                </div>
            </div>

            <div class="section">
                <div class="section-header" onclick="toggleSection('section3')">
                    3. Sílabas
                </div>
                <div class="section-content" id="section3">
                    <!-- Conteúdo da seção Sílabas -->
                    <b><h2>O que são Sílabas:</b></h2>
                        <li>Sílabas são blocos de construção das palavras.</li>
                            <li class="sub-lista">Cada sílaba tem um som que podemos ouvir ao pronunciá-las.</li>
                        <b><h2>As Sílabas Cantantes: Vogais</b></h2>
                        <li>Exemplos:</li>
                            <li class="sub-lista">A: a-mor, a-ve, a-qui.</li>
                            <li class="sub-lista">E: e-le-fan-te, e-sco-la, e-squi-lo.</li>
                            <li class="sub-lista">I: i-gre-ja, i-pê, i-glo.</li>
                            <li class="sub-lista">O: o-vo, o-lho, o-tô-no.</li>
                            <li class="sub-lista">U: u-va, u-ni-ver-si-da-de, u-lu-lan-te.</li>
                    <b><h2>As Sílabas Amigas: Consoantes</b></h2>
                        <li>Exemplos:</li>
                            <li class="sub-lista">B: ba-la, bo-né, bu-que.</li>
                            <li class="sub-lista">C: ca-sa, co-zi-nha, cu-po.</li>
                            <li class="sub-lista">D: da-do, de-do, du-que.</li>
                            <li class="sub-lista">F: fa-cha, fo-lha, fu-turo.</li>
                            <li class="sub-lista">G: ga-to, go-lfe, guer-ra.</li>
                            <li class="sub-lista">M: ma-mãe, me-sa, mu-seu.</li>
                            <li class="sub-lista">P: pa-to, po-ço, pu-lar.</li>
                            <li class="sub-lista">S: sa-po, so-pa, su-co.</li>
                            <li class="sub-lista">T:  ta-tu, to-ca, tu-nel.</li>
                    <b><h2>Vídeo Sobre a Família Silábica</b></h2>
                    <li>Família silábica completa / Alfabetização infantil</li>
                </div>
            </div>

            <div class="section">
                <div class="section-header" onclick="toggleSection('section4')">
                    4. Ortografia
                </div>
                <div class="section-content" id="section4">
                    <!-- Conteúdo da seção Ortografia -->
                    <b><h2>Aprendendo a Escrever Palavras Corretamente</b></h2>
                    <b><h2>Palavras com Vogais:</b></h2>
                        <li>casa, bola, gato, sol, pato.</li>
                    <b><h2>Palavras com Consoantes:</b></h2>
                        <li>bolo, casa, cão, mesa, sapo.</li>
                    <b><h2>Palavras com Sílabas:</b></h2>
                        <li>mamãe, bola, gato, cachorro, casa.</li>
                    <b><h2>Palavras Comuns</b></h2>
                        <li>amigo, escola, brinquedo, família, feliz.</li>
                </div>
            </div>

            <div class="section">
                <div class="section-header" onclick="toggleSection('section5')">
                    5. Escrita
                </div>
                <div class="section-content" id="section5">
                    <!-- Conteúdo da seção Escrita -->
                    <b><h2>O que são Sílabas:</b></h2>
                        <li>Sílabas são blocos de construção das palavras.</li>
                            <li class="sub-lista">Cada sílaba tem um som que podemos ouvir ao pronunciá-las.</li>
                        <b><h2>As Sílabas Cantantes: Vogais</b></h2>
                        <li>Exemplos:</li>
                            <li class="sub-lista">A: a-mor, a-ve, a-qui.</li>
                            <li class="sub-lista">E: e-le-fan-te, e-sco-la, e-squi-lo.</li>
                            <li class="sub-lista">I: i-gre-ja, i-pê, i-glo.</li>
                            <li class="sub-lista">O: o-vo, o-lho, o-tô-no.</li>
                            <li class="sub-lista">U: u-va, u-ni-ver-si-da-de, u-lu-lan-te.</li>
                    <b><h2>As Sílabas Amigas: Consoantes</b></h2>
                        <li>Exemplos:</li>
                            <li class="sub-lista">B: ba-la, bo-né, bu-que.</li>
                            <li class="sub-lista">C: ca-sa, co-zi-nha, cu-po.</li>
                            <li class="sub-lista">D: da-do, de-do, du-que.</li>
                            <li class="sub-lista">F: fa-cha, fo-lha, fu-turo.</li>
                            <li class="sub-lista">G: ga-to, go-lfe, guer-ra.</li>
                            <li class="sub-lista">M: ma-mãe, me-sa, mu-seu.</li>
                            <li class="sub-lista">P: pa-to, po-ço, pu-lar.</li>
                            <li class="sub-lista">S: sa-po, so-pa, su-co.</li>
                            <li class="sub-lista">T:  ta-tu, to-ca, tu-nel.</li>
                    <b><h2>Vídeo Sobre a Família Silábica</b></h2>
                    <li>Família silábica completa / Alfabetização infantil</li>
                </div>
            </div>
        </div>
        <button id="adicionarMateria" onclick="adicionarEvent('form-MateriaPortugues')">Adicionar esta matéria</button>
        <form action="" id="form-MateriaPortugues">
            <input type="hidden" id="materia" name="materia" value="Português"></input>
            <input type="hidden" class="start"  id="start" name="start" value=""></input>
            <input type="hidden" id="end" name="end" value=""></input>
            <input type="hidden" id="color" name="color" value="#0476D9"></input>
            <input type="hidden" id="rg_pai" name="rg_pai" value="<?php echo $result['rg_pai']; ?>"></input>
        </form>
    </section>
    
            </div>               
            </div>
            </div>        
            </div>
        
            <!--MATEMÁTICA-->
        <div id="resumoMT" class="resumo">
            <div  class="texto-recentes_">
                <b> <h1 class="text-title" style="font-size: 1.5em; margin-left: 4em; color: #004356">Matemática</h1></b>
            </div>
                <div class="tarefas-recentes">
                <div class="adicionar_desaparecer">
                <div class="tarefas1" id="tarefas">
                <section class="escolher_disciplinas">
                    <div class="conteudo_">
                            <div class="section" style="border: 3px solid #F20519;">
                                <div class="section-header" onclick="toggleSection('section6')" style="background-color:#F20519;">
                                    1. Introduzindo os Números
                                </div>
                                <div class="section-content" id="section6">
                                    <li class="sub-lista">Presença dos Números: Utilidade dos números no dia a dia, como contar brinquedos e frutas.</li>
                                    <li class="sub-lista">Contando Objetos: Exemplos de como contar lápis e bolinhas coloridas.</li>
                                    <li class="sub-lista">Ordem dos Números: Sequência dos números do menor para o maior.</li>
                                    <li class="sub-lista">Quantidades: Diferenciação entre pequenas e grandes quantidades.</li>
                                    <li class="sub-lista">Números em Todo Lugar: Exemplos de onde os números aparecem no cotidiano.</li>
                                </div>
                            </div>
                            
                        </div>
                        <div class="conteudo_">
                            <div class="section" style="border: 3px solid #F20519;">
                                <div class="section-header" onclick="toggleSection('section7')" style="background-color:#F20519;">
                                2. Operações Básicas: Adição e Subtração
                                </div>
                                <div class="section-content" id="section7">
                                Adição: 
                                    <li class="sub-lista">Juntar elementos para formar um total maior.</li>
                                Subtração
                                    <li class="sub-lista">Tirar algo de um grupo para encontrar quanto resta.</li>
                                </div>
                            </div>
                            
                        </div>
                        <div class="conteudo_">
                            <div class="section" style="border: 3px solid #F20519;">
                                <div class="section-header" onclick="toggleSection('section8')" style="background-color:#F20519;">
                                3. Explorando Formas e Geometria
                                </div>
                                <div class="section-content" id="section8">
                                    <li class="sub-lista">Círculo: Forma redonda sem cantos ou ângulos.</li>
                                    <li class="sub-lista">Quadrado: Quatro lados iguais e quatro ângulos retos.</li>
                                    <li class="sub-lista">Triângulo: Três lados e três ângulos que somam 180 graus.</li>
                                    <li class="sub-lista">Retângulo: Quatro lados, com ângulos retos e lados opostos iguais.</li>
                                    <li class="sub-lista">Cilindro: Duas bases circulares conectadas por uma superfície curva.</li>
                                </div>
                            </div>
                            
                        </div>
                        <div class="conteudo_">
                            <div class="section" style="border: 3px solid #F20519;">
                                <div class="section-header" onclick="toggleSection('section9')" style="background-color:#F20519;">
                                4. Descobrindo Grandezas e Medidas
                                </div>
                                <div class="section-content" id="section9">
                                    <li class="sub-lista">Comprimento: Medido em centímetros (cm) e metros (m).</li>
                                    <li class="sub-lista">Peso: Medido em gramas (g) e quilogramas (kg).</li>
                                    <li class="sub-lista">Tempo: Medido em segundos (s), minutos (min) e horas (h).</li>
                                    <li class="sub-lista">Capacidade: Medida em mililitros (ml) e litros (l).</li>
                                </div>
                            </div>
                        </div>
                        <button id="adicionarMateria" onclick="adicionarEvent('form-MateriaMatematica')">Adicionar esta matéria</button>
                        <form action="" id="form-MateriaMatematica">
                            <input type="hidden" id="materia" name="materia" value="Matemática"></input>
                            <input type="hidden" class="start" id="start" name="start" value=""></input>
                            <input type="hidden" id="end" name="end" value=""></input>
                            <input type="hidden" id="color" name="color" value="#F20519"></input>
                            <input type="hidden" id="rg_pai" name="rg_pai" value="<?php echo $result['rg_pai']; ?>"></input>
                        </form>
                </section>
                </div>
                </div>
                </div>
        </div>
            
                    <!--TECNOLOGIA-->
                    <div id="resumoTC" class="resumo">
        <div  class="texto-recentes_">
            <b> <h1 class="text-title" style="font-size: 1.5em; margin-left: 4em; color: #004356">Tecnologia</h1></b>
        </div>
            <div class="tarefas-recentes">
            <div class="adicionar_desaparecer">
            <div class="tarefas1" id="tarefas">
            <div class="atts-scroll" id="scroll"></div>
            <section class="escolher_disciplinas">
        <div class="conteudo_">
            <div class="section" style="border: 3px solid #693FD2;">
                <div class="section-header" onclick="toggleSection('section10')" style="background-color:#693FD2;">
                    1. O que é Programação?
                </div>
                <div class="section-content" id="section10">
                    <b><h2>O que é um programa de computador?</b></h2>
                        <li>Introdução aos algoritmos: sequência de passos</li>
                   </div>
            </div>

            <div class="section" style="border: 3px solid #693FD2;">
                <div class="section-header" onclick="toggleSection('section11')" style="background-color:#693FD2;">
                    2. Introdução à programação em blocos
                </div>
                <div class="section-content" id="section11">
                        <li>Apresentar ums linguagem de programação visual simples para criar projetos interativos.</li>
                            <li class="sub-lista">Blocos de comandos: movimentação, aparência e som.</li>
                            <li class="sub-lista">Diferença entre eventos e ações. </li>
                    </div>
            </div>

            <div class="section" style="border: 3px solid #693FD2;">
                <div class="section-header" onclick="toggleSection('section12')" style="background-color:#693FD2;">
                    3. Lógica de Programação
                </div>
                <div class="section-content" id="section12">
                        <li>Conceito de condições (if/else)</li>
                        <li>Laços (loops): repetir ações.</li>
                </div>
            </div>

            <div class="section" style="border: 3px solid #693FD2;">
                <div class="section-header" onclick="toggleSection('section13')" style="background-color:#693FD2;">
                    4. Resolução de Problemas
                </div>
                <div class="section-content" id="section13">
                        <li>O que são bugs e como identificá-los.</li>
                        <li>Importância de testar o código constantemente.</li>
                </div>
            </div>

            <div class="section" style="border: 3px solid #693FD2;">
                <div class="section-header" onclick="toggleSection('section14')" style="background-color:#693FD2;">
                    5. Projeto Final
                </div>
                <div class="section-content" id="section14">
                    <b><h2>Um jogo interativo que contemple todos os módulos anteriores envolvendo uma história para se tornar atrativo o aprendizado.</b></h2>
                </div>
            </div>
        </div>
        <button id="adicionarMateria" onclick="adicionarEvent('form-MateriaTecnologia')">Adicionar esta matéria</button>
        <form action="" id="form-MateriaTecnologia">
                            <input type="hidden" id="materia" name="materia" value="Tecnologia"></input>
                            <input type="hidden" class="start" id="start" name="start" value=""></input>
                            <input type="hidden" id="end" name="end" value=""></input>
                            <input type="hidden" id="color" name="color" value="#693FD2"></input>
                            <input type="hidden" id="rg_pai" name="rg_pai" value="<?php echo $result['rg_pai']; ?>"></input>
                        </form>
    </section>
    
            </div>               
            </div>
            </div>        
            </div>
            
            <!--HISTÓRIA E GEOGRAFIA-->
        <div id="resumoGH" class="resumo">
        <div  class="texto-recentes_">
            <b> <h1 class="text-title" style="font-size: 1.5em; margin-left: 4em; color: #004356">História e Geografia</h1></b>
        </div>
            <div class="tarefas-recentes">
            <div class="adicionar_desaparecer">
            <div class="tarefas1" id="tarefas">
            <div class="atts-scroll" id="scroll"></div>
            <section class="escolher_disciplinas">
        <div class="conteudo_">
            <div class="section" style="border: 3px solid #FFC000;">
                <div class="section-header" onclick="toggleSection('section15')" style="background-color:#FFC000;">
                    1. Paisagem
                </div>
                <div class="section-content" id="section15">
                        <li>Uma paisagem é a forma como vemos e descrevemos uma área ao nosso redor.</li>
                        <li>Inclui tudo o que podemos ver, como montanhas, rios, árvores, e casas.</li>
                        <li>Paisagens Naturais:</li>
                            <li class="sub-lista">Montanhas: Grandes elevações de terra.</li>
                            <li class="sub-lista">Rios e Lagos: Corpos de água que podem ser grandes ou pequenos.</li>
                            <li class="sub-lista">Florestas e Bosques: Áreas com muitos árvores e plantas.</li>
                            <li class="sub-lista">Praias e Desertos: Áreas de areia e pouca vegetação.</li>
                        <li>Paisagens Urbanas:</li>
                            <li class="sub-lista">Cidades e Vilarejos: Áreas com muitas construções, ruas e casas.</li>
                            <li class="sub-lista">Parques e Jardins: Áreas de lazer com plantas e árvores em meio à cidade.</li>
                            <b><h2>Elementos Naturais:</b></h2>
                        <li>Água: Rios, lagos, mares e oceanos.</li>
                        <li>Vegetação: Árvores, flores e gramados.</li>
                        <li>Solo: Tipos de terra como areia, rocha ou terra fértil.</li>
                        <b><h2>Componentes da Paisagem</b></h2>
                        <li>Construções: Casas, edifícios, pontes.</li>
                        <li>Estradas: Ruas e caminhos que as pessoas usam para se deslocar.</li>
                        <b><h2>Como as Paisagens Mudam</b></h2>
                        <li>Mudanças Naturais:</li>
                            <li class="sub-lista">Estações do Ano: Como o inverno, a primavera, o verão e o outono alteram a aparência das paisagens.</li>
                            <li class="sub-lista">Clima e Tempo: Chuva, sol, vento e neve podem mudar a paisagem.</li>
                        <li>Mudanças Humanas:</li>
                            <li class="sub-lista">Construção: Novos edifícios e estradas podem modificar a paisagem.</li>
                            <li class="sub-lista">Agricultura: Plantar e colher pode transformar áreas naturais.</li>
                </div>
            </div>

            <div class="section" style="border: 3px solid #FFC000;">
                <div class="section-header" onclick="toggleSection('section16')" style="background-color:#FFC000;">
                    2. Colonização e Meio Ambiente
                </div>
                <div class="section-content" id="section16">
                    <!-- Conteúdo da seção Colonização e Meio Ambiente -->
                    <b><h2>Exploração e Colonização</b></h2>
                        <li>Análise dos motivos da colonização, como a busca por novas rotas comerciais e a exploração de recursos.</li>
                        <li>Impacto na População Indígenas</li>
                        <li>Consequências Sociais e Culturais</li>
                    <b><h2>Biomas Explorados</b></h2>
                        <li>Esutdo dos biomas que foram afetados pela colonização, como florestas tropicais e savanas.</li>
                        <li>Mudanças no Uso da Terra: Análise de como a colonização alterou o uso da terra, como o destamatamento e a agricultura.</li>
                    </div>
            </div>

            <div class="section" style="border: 3px solid #FFC000;">
                <div class="section-header" onclick="toggleSection('section17')" style="background-color:#FFC000;">
                    3. Rotas Comerciais e Expansão Territorial 
                </div>
                <div class="section-content" id="section17">
                    <!-- Conteúdo da seção Rotas Comerciais e Expansão Territorial -->
                        <li>Mudanças Naturais:</li>
                            <li class="sub-lista">Estações do Ano: Como o inverno, a primavera, o verão e o outono alteram a aparência das paisagens.</li>
                            <li class="sub-lista">Clima e Tempo: Chuva, sol, vento e neve podem mudar a paisagem.</li>
                        <li>Mudanças Humanas:</li>
                            <li class="sub-lista">Construção: Novos edifícios e estradas podem modificar a paisagem.</li>
                            <li class="sub-lista">Agricultura: Plantar e colher pode transformar áreas naturais.</li>
                   </div>
            </div>
    </div>
    <button id="adicionarMateria" onclick="adicionarEvent('form-MateriaGeo')">Adicionar esta matéria</button>
        <form action="" id="form-MateriaGeo">
                            <input type="hidden" id="materia" name="materia" value="Geografia"></input>
                            <input type="hidden" class="start" id="start" name="start" value=""></input>
                            <input type="hidden" id="end" name="end" value=""></input>
                            <input type="hidden" id="color" name="color" value="#FFC000"></input>
                            <input type="hidden" id="rg_pai" name="rg_pai" value="<?php echo $result['rg_pai']; ?>"></input>
                        </form>
    </section>
    
            </div>               
            </div>
            </div>        
            </div>
            
            <!--CIÊNCIAS-->
        <div id="resumoCI" class="resumo">
        <div  class="texto-recentes_">
            <b> <h1 class="text-title" style="font-size: 1.5em; margin-left: 4em; color: #004356">Ciências</h1></b>
        </div>
            <div class="tarefas-recentes">
            <div class="adicionar_desaparecer">
            <div class="tarefas1" id="tarefas">
            <div class="atts-scroll" id="scroll"></div>
            <section class="escolher_disciplinas">
        <div class="conteudo_">
            <div class="section" style="border: 3px solid #0ABF04;">
                <div class="section-header" onclick="toggleSection('section20')" style="background-color:#0ABF04;">
                    1. Matéria e Energia
                </div>
                <div class="section-content" id="section20">
                    <!-- Conteúdo da seção Matéria e Energia-->
                        <li>Exploração dos materiais dos objetos do dia a dia.</li>
                        <li>Identificação de quais materiais podem ser reciclados para ajudar o planeta.</li>
                </div>
            </div>

            <div class="section" style="border: 3px solid #0ABF04;">
                <div class="section-header" onclick="toggleSection('section21')" style="background-color:#0ABF04;">
                    2. Vida e Evolução
                </div>
                <div class="section-content" id="section21">
                    <!-- Conteúdo da seção Vida e Evolução -->
                    <b><h2>Corpo Humano e Respeito à Diversidade</b></h2>
                        <li>Explorar o Corpo Humano</li>
                        <li> Identificar,nomear e desenhar partes do corpo (cabeça, braços, pernas).</li>
                    <b><h2>Importância dos hábitos de higiene para a saúde.</b></h2>
                        <li>Manter o corpo limpo é essencial para a saúde.</li>
                        <li>Discutir a importância de cada hábito encontrado.</li>
                </div>
            </div>

            <div class="section" style="border: 3px solid #0ABF04;">
                <div class="section-header" onclick="toggleSection('section22')" style="background-color:#0ABF04;">
                    3. Terra e Universo:
                </div>
                <div class="section-content" id="section22">
                    <!-- Conteúdo da seção Terra e Universo -->
                    <b><h2>Escalas de Tempo</b></h2>
                        <li>O dia é dividido em manhã, tarde e noite.</li>
                        <li>Organizar figuras representando essas partes do dia e aprender sobre a sucessão de dias, semanas, meses e anos.</li>
                        <li>Montar um diário das atividades diárias (café da manhã, almoço, jantar).</li>
                        <li>Comparar como o ciclo de dias e noites influencia as rotinas pessoais e as atividades de animais e plantas.</li>
                    <b><h2>Vídeo Sobre a Família Silábica</b></h2>
                    <li>Família silábica completa / Alfabetização infantil</li>
                </div>
            </div>

            </div>
        </div>
        <button id="adicionarMateria" onclick="adicionarEvent('form-MateriaCien')">Adicionar esta matéria</button>
        <form action="" id="form-MateriaCien">
                            <input type="hidden" id="materia" name="materia" value="Ciências"></input>
                            <input type="hidden" class="start" id="start" name="start" value=""></input>
                            <input type="hidden" id="end" name="end" value=""></input>
                            <input type="hidden" id="color" name="color" value="#0ABF04"></input>
                            <input type="hidden" id="rg_pai" name="rg_pai" value="<?php echo $result['rg_pai']; }?>"></input>
                        </form>
    </section>
    
            </div>               
            </div>
            </div>        
            </div>
            
            </div>  
        </div>



    <footer>
    <div class="waves">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 320">
        <path class="wave1" fill="#F20519" fill-opacity="1"  d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,138.7C420,171,480,245,540,256C600,267,660,213,720,176C780,139,840,117,900,128C960,139,1020,181,1080,181.3C1140,181,1200,139,1260,128C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave2" fill="#F20519" fill-opacity="0.5" d="M0,320L30,272C60,224,120,128,180,122.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,85.3C780,75,840,117,900,117.3C960,117,1020,75,1080,74.7C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        
      </svg>

    </div>
</footer>
    
    <script src="js/script.js">  
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>


 



