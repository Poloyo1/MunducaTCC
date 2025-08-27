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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munduca | Área do Aluno</title>
    <link rel="stylesheet" href="style.css">
    <link href="./output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.css' rel='stylesheet' />
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <style>
        #canvas {
            border: 1px solid #00232c;
            width: 100%;
            height: 80%;
            border-radius: 20px;
        }
    </style>
</head>
<body class="" onLoad="carregarConfiguracoes()">
    <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <a href="HubHome.php">
            <img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;"></a>
            <div class="flex items-center">
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up</span></button>
                <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;"><a href="areaAluno.php">Atividades</a></button>
                <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;"><a href="ranking.php">Emblemas</a></button>
                <img class="moedas" src="imgs/moedas.png" alt="saco de moedas"></a>
                <button class="mr-5 text link" style="margin-left: 0.5em; margin-right: 1em;"><?php echo  $result['pontos']; ?> </button>
                <div class="foto_perfil">
                    <img class="perfilImg" onclick="AbreModal('modal-foto-perfil')" src="<?php echo  $result['foto_perfil']; ?>" alt="">
                </div> 
            </div>
           

        </div>
    </nav>

        <section class="quadroDesenho">
        <h1 class="text titu">Faça um desenho aqui sobre o que você aprendeu!</h1>
            <div class="boardDesenho">
                <div class="desenhosSalvos" >
                    <h1 class="text">Seus desenhos</h1>
                    <div id="desenhosSalvos"> 
                    <?php 
                    
                        $queryDesenhos = mysqli_query($mysqli, "SELECT * FROM desenhos WHERE rg_pai = '$rg'");
                                
                        if($queryDesenhos  != null){
                            While($row = mysqli_fetch_assoc($queryDesenhos )){
                                echo '<img class="imgSalva" src="src/'.$row['desenho'].'" alt="">';
                        }
                        } else{
                            echo 'sem emblemas ainda!';
                        }
                    ?>
                    </div>
                </div>
                <div class="desenhar">
                    <canvas id="canvas" width="500" height="500"></canvas>
                    <div class="btnsDesenho"> <label for="color-picker" class="text labelCor">Escolha a cor:</label>
    <input type="color" id="color-picker" value="#000000"><br>

    <button id="save-btn">Salvar Desenho</button>
    <button id="clear-btn">Limpar Canvas</button></div>
                </div>
            </div>
        </section>
    
    <div class="janela-modal"  id="modal-foto-perfil" style=" align-items: start !important; height: 100vh;">
            <div class="modal modal-fotoPerfil">
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
        <path class="wave1 wave" fill="#F20519" fill-opacity="1"  d="M0,96L30,101.3C60,107,120,117,180,117.3C240,117,300,107,360,138.7C420,171,480,245,540,256C600,267,660,213,720,176C780,139,840,117,900,128C960,139,1020,181,1080,181.3C1140,181,1200,139,1260,128C1320,117,1380,139,1410,149.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path class="wave2 wave" fill="#F20519" fill-opacity="0.5" d="M0,320L30,272C60,224,120,128,180,122.7C240,117,300,203,360,234.7C420,267,480,245,540,202.7C600,160,660,96,720,85.3C780,75,840,117,900,117.3C960,117,1020,75,1080,74.7C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        
      </svg>

    </div>
</footer>
    <script>
        // Seleciona o canvas e o contexto de desenho
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

// Variáveis para armazenar se o mouse está pressionado
let isDrawing = false;
let lastX = 0;
let lastY = 0;

// Variável para armazenar a cor selecionada
let currentColor = '#000000'; // Cor inicial preta

// Função para começar a desenhar
function startDrawing(e) {
    isDrawing = true;
    [lastX, lastY] = [e.offsetX, e.offsetY];
}

// Função para parar de desenhar
function stopDrawing() {
    isDrawing = false;
}

// Função para desenhar
function draw(e) {
    if (!isDrawing) return; // Se o mouse não estiver pressionado, não desenha
    ctx.beginPath();
    ctx.moveTo(lastX, lastY); // Começa do último ponto
    ctx.lineTo(e.offsetX, e.offsetY); // Linha até o ponto atual
    ctx.strokeStyle = currentColor; // Define a cor de desenho
    ctx.lineWidth = 5; // Espessura da linha
    ctx.stroke(); // Executa o desenho
    [lastX, lastY] = [e.offsetX, e.offsetY]; // Atualiza o último ponto
}

// Função para salvar o desenho
function saveDrawing() {
    const dataUrl = canvas.toDataURL('image/png'); // Converte para Base64
    sendToServer(dataUrl);
}

function sendToServer(imageData) {
    $.ajax({
        url: 'php/salvarDesenhos.php',
        type: 'POST',
        data: {
            image: imageData
        },
        success: function(response) {
            console.log(response);
            var path = response.replace('../', '')
            console.log(path);
            divSalvas = document.getElementById('desenhosSalvos')
            const newDiv = document.createElement('div')
            newDiv.innerHTML = `<img class='imgSalva' src="${path}" alt="">`
            divSalvas.appendChild(newDiv);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

// Função para alterar a cor atual do desenho
function changeColor(e) {
    currentColor = e.target.value; // Altera a cor para a selecionada
}

// Função para limpar o canvas
function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpa o canvas
}

// Adiciona eventos para começar, desenhar e parar o desenho
canvas.addEventListener('mousedown', startDrawing);
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mouseup', stopDrawing);
canvas.addEventListener('mouseout', stopDrawing);

// Adiciona o evento para o botão de salvar
document.getElementById('save-btn').addEventListener('click', saveDrawing);

// Adiciona o evento para o seletor de cor
document.getElementById('color-picker').addEventListener('input', changeColor);

// Adiciona o evento para o botão de limpar
document.getElementById('clear-btn').addEventListener('click', clearCanvas); // Limpa o canvas quando clicado

    </script>
    <script src="js/script.js"></script>
    <script>
        let dataAtual = new Date();
        let dataFormat = "" + dataAtual.getFullYear() + "-" + (dataAtual.getMonth() + 1) + "-" +  dataAtual.getDate()
       
        document.getElementById("date").value = dataFormat;
    
    dataAtualiza()
    </script>
    
    </div>
</body>
</html>