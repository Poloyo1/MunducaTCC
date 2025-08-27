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
    <title>Munduca | Home</title>
    <style>
        nav{
            margin-bottom: 2rem !important;
        }
    </style>
</head>
<body onLoad="carregarConfiguracoes()" id="texo-acessibilidade">
<audio id="myAudio">
    <source src="brilho.mp3" type="audio/mpeg">
  </audio> 
<div class="overlay hidden" id="overlay">
    <div style="text-align: center;">
        <h1 class="text overtext">Emblema Conquistado!</h1>
        <img src="sua-imagem.jpg" alt="Imagem central" class="center-image" id="imgefeito"> 
        <button class="overbtn text" onclick="fecha()">Continuar</button>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
    </div>    
</div>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<nav class="navbar">
<div class=" flex justify-between px-7 ">
            <a href="index.php">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;"></a>
            <div class="flex items-center">
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;"><a href="areaAluno.php">Atividades</a></button>
                <img class="moedas" src="imgs/moedas.png" alt="Logo Munduca"></a>
                <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;"><?php echo  $result['pontos']; ?> </button>
                <div class="foto_perfil">
                    <img class="perfilImg" onclick="AbreModal('modal-foto-perfil')" src="<?php echo  $result['foto_perfil']; ?>" alt="">
                </div> 
            </div>
           

        </div>
        </div>
    </nav>
    <div class="tarefas-recentes" id="escolherMateria">
        <div class="adicionar_emblema">
            <div class="texto-recentes-emblema">
               <b> <h1 class="text disciplinasR" id="disciplinas-recentes">Ranking de Pontos</h1></b>
                <button class="speak" onclick="speak('disciplinas-recentes')"><span class="material-symbols-outlined">
volume_up
</span></button>

            </div>
                <div class="container_ranking">
                    <div class="ranking">
                        <section class="adicionar_ranking">
                            <div class="cabeca_rankink">
                                <div class="letra">
                                    <b><h1 class="pontuacao" style="padding-left: 3em;"> Nome </h1></b>
                                    <b><h1 class="pontuacao"> Pontuação </h1></b>
                                </div>
                            </div>
                            <?php 

                                $sql = $mysqli->query("SELECT * FROM criancas ORDER BY pontos DESC");
                                $cont = 1;
                                while($row = mysqli_fetch_assoc( $sql)){
                                    echo '<div class="user bg'. $cont . '">
                                <div class="esquerda">
                                    <img class="user_imagem" src="'. $row['foto_perfil'] .'">
                                    <h1 class="name">'. $row['nome_aluno'] .'</h1>
                                </div>
                                <div class="direita">
                                    <h1 class="pontuacao">'. $row['pontos'] .' pontos</h1>
                                </div>
                            </div>';
                            $cont++;
                            if($cont > 5){
                                $cont = 1;
                            }
                                };
                              
                            ?>
                        </section>
                    </div>
                </div>
            
                

        </div>
        
    </div>
    <div class="tarefas-recentes" id="escolherMateria2">
        <div class="adicionar_emblema2">
            <div class="texto-recentes-emblema">
               <b> <h1 class="text disciplinasR" id="disciplinas-recentes">Emblemas</h1></b>
                <button class="speak" onclick="speak('disciplinas-recentes')"><span class="material-symbols-outlined">
volume_up
</span></button>
            </div>
            <div class="emblemas" id="divteste">
                <img src="imgs/Group289.png" alt="" class="grupo-de-imagens">
                <img src="imgs/seta-esquerda.png" alt="" class="grupo-de-imagens">
                <img src="imgs/Group288.png" alt="" class="grupo-de-imagens">
            </div>
            <div class="text-emblemas" >
                <b><h1 class="emblema-text">"Troque os seus pontos por emblemas"</h1></b>
                <button class="btn-trocar" id="btn-trocar" onclick="hiddenEscolherMateria();">Trocar</button>
            </div>
        </div>
        
    </div>

    <div class="div-cent">
        <div class="tarefas-recentes" id="escolherMateria3">
            <div class="adicionar_emblema3">
                <div class="pontuacao">
                    <button class="btn-pontuacao">
                        <h4 style="color: #FFC000;">Pontos</h4>
                        <h1 style="font-size:32px;" id="valor"><?php 
                        $query_crianca = mysqli_query($mysqli, "SELECT * FROM criancas where rg_pai = '$rg'");
                        $result = mysqli_fetch_assoc($query_crianca); 
                        echo  $result['pontos']; 
                        
                        ?></h1>
                    </button>
                </div>
                <section class="adicionar_ranking2">
                <div class="texto-recentes-emblema">
                <b> <h1 class="text disciplinasR" id="disciplinas-recentes">Emblemas disponíveis</h1></b>
                    <button class="speak" onclick="speak('disciplinas-recentes')"><span class="material-symbols-outlined">
    volume_up
    </span></button>
                </div>
                <div class="conjunto_emblemas1">
                    <img class="figurinhas" onclick="selecionarEmblema()" src="imgs/abc.png">
                    <img class="figurinhas" src="imgs/livro.png">
                    <img class="figurinhas" src="imgs/leitura 2.png">
                    <img class="figurinhas" src="imgs/livros.png">
                    <img class="figurinhas" src="imgs/exame.png"> 
                </div>
                <div class="conjunto_emblemas2">
                    <img class="figurinhas" src="imgs/ferramentas-de-desenho.png">
                    <img class="figurinhas" src="imgs/quadro-negro.png">
                    <img class="figurinhas" src="imgs/matematicas.png">
                    <img class="figurinhas" src="imgs/matematicas2.png">
                    <img class="figurinhas" src="imgs/matematicas3.png"> 
                </div>
                <div class="conjunto_emblemas3">
                    <img class="figurinhas" src="imgs/floresta.png">
                    <img class="figurinhas" src="imgs/instalacao 2.png">
                    <img class="figurinhas" src="imgs/esquilo.png">
                    <img class="figurinhas" src="imgs/cervo.png">
                    <img class="figurinhas" src="imgs/frasco.png"> 
                </div>
                <div class="botoes">
                    <div class="btn-valor">
                            <div class="valor">
                                <h1 class="h_" style="color: #FFC000;"> Valor: </h1>
                                <h1 class="h_" > 25 </h1>
                            </div>
                    </div>
                    <button class="btn-trocar2">
                        <h1 class="h_" onclick="trocarEmblema()">Trocar</h1>
                    </button>
                </div>
            </section>
            <div class="emblemas-btn">
                <button class="btn-emblemas h_">Emblemas</button>
            </div>
        </div>
    </div>
    <div class="janela-modal"  id="modal-foto-perfil" style=" align-items: start !important; height: 100vh;">
            <div class="modal modal-fotoPerfil" style="height: 40%;">
                <div class="fechar">
                    <button onclick="fechaModal('modal-foto-perfil')">X</button>
                    <div class="menu">
                            <div>
                                <button class="btnSel" id="btnpicture" onclick="mudaexib('imgsExib', 'emblemasexib', 'btnpicture', 'btnstar')"><img src="imgs/picture.png" alt=""></button>
                                <button id="btnstar" onclick="mudaexib('emblemasexib','imgsExib', 'btnstar', 'btnpicture')"><img src="imgs/star.png" alt=""></button>
                            </div>
                </div>
                
                </div>
                
                <div class="selecionar-imgs" id="imgsExib">
                    <div class="org2">
                    <h1 class="text">Mudar Foto de Perfil</h1>
                    <section class="imgsSelecionar">
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('cervo')"><img src="imgs/perfil/cervo.png" alt=""></div>
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('lobo')"><img src="imgs/perfil/lobo.png" alt=""></div>
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('urso')"><img src="imgs/perfil/urso.png" alt=""></div>
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('leao')"><img src="imgs/perfil/leao.png" alt=""></div>
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('raposa')"><img src="imgs/perfil/raposa.png" alt=""></div>
                        <div class="imgPerfilSelecionavel" onclick="mudaFoto('coelho')"><img src="imgs/perfil/coelho.png" alt=""></div>
                    </section>
                    </div>
 
                </div>
                <div class="selecionar-imgs hidden" id="emblemasexib">
                    <div class="org2">
                    <h1 class="text">Meus Emblemas</h1>
                    <section class="imgsSelecionar emle">
                        <?php 
                            $queryEmbles = mysqli_query($mysqli, "SELECT * FROM emblemas WHERE rg_pai = '$rg'");
                            
                            if($queryEmbles != null){
                                While($row = mysqli_fetch_assoc($queryEmbles)){
                                    echo '<div class="imgPerfilSelecionavel"><img src="'. $row['emblema'] .'" alt=""></div>';
                            }
                            } else{
                                echo 'sem emblemas ainda!';
                            }

                        ?>
                    </section>
                    </div>
                    
                </div>
                <div class="text text-Final altura">
                        <div class="perfilImgdiv"><img class="perfilImg" src="<?php echo  $result['foto_perfil']; ?>" alt=""></div>
                        <h1 class="nomeCrianca text"><?php echo  $result['nome_aluno']; }?></h1>
                        <div style="width: 100%;text-align: center;">
                            <b><button class="btn-salvar nSelecionavel" id="attBtn">Atualizar</button></b></div>
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
    <form id="formEmblema">
        <input type="hidden" name="emblema" id="emblema" value="">
    </form>

     <script src="js/script.js"></script> 
     <script>
      audio = document.getElementById("myAudio");  
const buttons = document.querySelectorAll(".figurinhas");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        // Remove a classe 'selected' de todos os botões
        buttons.forEach(btn => btn.classList.remove("selected"));
        // Adiciona a classe 'selected' apenas ao botão clicado
        button.classList.add("selected");
        var src = button.getAttribute('src');
        document.getElementById('emblema').value = src
        console.log(document.getElementById('emblema').value)
        });
    });


    function trocarEmblema(){
        $.ajax({
    type: 'post',
  
    url: 'php/trocaEmblema.php',
    data: $('#formEmblema').serialize(),
    success: function(data){
  
      if(data == 0){
        document.getElementById('valor').style.color = '#F20519';
        document.getElementById('valor').style.scale = '1.1';
      }else{
        if(data == 1){
            alert('emblema já obtido')
        }else{
            audio.play()
            var over =document.getElementById('overlay')
            over.classList.remove('hidden')
            var imgEfeito = document.getElementById('imgefeito')
            imgEfeito.setAttribute('src', data)
            buttons.forEach(btn => btn.classList.remove("selected"));
        }
      }
    },
    
    error: function(){
        
    }
  
  })
    }
    function fecha(){
        window.location.reload(true);

    }
     </script>
    <script type="text/javascript" src="js/hiddenDiv.js"></script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>


 



