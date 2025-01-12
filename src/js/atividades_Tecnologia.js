
let robotPosition = { x: 0, y: 0 };
let goalPosition = { x: 4, y: 4 };
let obstacles = [];
let currentLevel = 1;
const levels = [];
let commandSequence = [];
const MAX_GRID_SIZE = 7; // Tamanho máximo da grade
const MIN_GRID_SIZE = 5; // Tamanho inicial da grade
let maxLevelGridSize = MIN_GRID_SIZE + 3; // Limite de crescimento em 3 níveis
cont = 0

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
// Função para criar níveis dinamicamente com limite de crescimento
function generateLevels(totalLevels) {
    for (let i = 1; i <= totalLevels; i++) {
        const levelSize = Math.min(MIN_GRID_SIZE + i - 1, maxLevelGridSize); // Limita o crescimento
        const robotStart = { x: 0, y: 0 };
        const goal = {
            x: Math.floor(Math.random() * levelSize),
            y: Math.floor(Math.random() * levelSize),
        };

        const obstacleCount = Math.min(levelSize, 5 + i); // Número ajustado de obstáculos
        const obstacles = [];
        for (let j = 0; j < obstacleCount; j++) {
            const obstacle = {
                x: Math.floor(Math.random() * levelSize),
                y: Math.floor(Math.random() * levelSize),
            };

            if (
                (obstacle.x !== robotStart.x || obstacle.y !== robotStart.y) &&
                (obstacle.x !== goal.x || obstacle.y !== goal.y)
            ) {
                obstacles.push(obstacle);
            }
        }

        levels.push({
            gridSize: levelSize,
            robotStart,
            goal,
            obstacles,
        });
    }
}

// Carregar o nível atual
function loadLevel(level) {
    if (level < 1 || level > levels.length) return;

    currentLevel = level;
    const levelConfig = levels[currentLevel - 1];
    gridSize = levelConfig.gridSize;
    robotPosition = { ...levelConfig.robotStart };
    goalPosition = { ...levelConfig.goal };
    obstacles = [...levelConfig.obstacles];

    document.getElementById("currentLevel").textContent = currentLevel;
    createGrid();
}
valor = 0
function prossBar2(){
  
    const progBar = document.querySelector('.progress-bar div')
    espacoBar = document.getElementsByClassName('.progress-bar')
    tamanho = 100 / 5
    valor += tamanho
    console.log(valor)
    progBar.setAttribute('style', "width: " + valor + "%")
}

// Criar grid com obstáculos e robô
function createGrid() {
    const grid = document.getElementById("grid");
    grid.innerHTML = "";
    grid.style.gridTemplateColumns = `repeat(${gridSize}, 80px)`;
    grid.style.gridTemplateRows = `repeat(${gridSize}, 80px)`;

    for (let row = 0; row < gridSize; row++) {
        for (let col = 0; col < gridSize; col++) {
            const cell = document.createElement("div");
            cell.classList.add("cell");

            if (row === robotPosition.y && col === robotPosition.x) {
                cell.classList.add("robot");
                cell.textContent = "🤖";
            }

            if (row === goalPosition.y && col === goalPosition.x) {
                cell.classList.add("goal");
                cell.textContent = "🏁";
            }

            if (obstacles.some(obs => obs.x === col && obs.y === row)) {
                cell.style.backgroundColor = "red";
            }

            grid.appendChild(cell);
        }
    }
}

// Adicionar comando à sequência
function addCommand(command) {
    commandSequence.push(command);
    updateCommandList();
}


// Atualizar lista de comandos
function updateCommandList() {
    const commandsList = document.getElementById("commandsList");
    commandsList.innerHTML = commandSequence.length
        ? commandSequence.join("<br>")
        : "Nenhum comando inserido";
}
function passaAula2(){
        const att = document.getElementById("att2");
        divCorrecao.classList.add('hidden')
        att.classList.remove('exibe')
        att.classList.add('hidden')
        AbreModal('janela-modal');
        tarefaFin()
    }

// Executar sequência de comandos
async function executeSequence() {
    const status = document.getElementById("status");
    let validSequence = true;

    for (let command of commandSequence) {
        validSequence = await executeStep(command);
        if (!validSequence) break;
    }

    if (validSequence) {
        if (robotPosition.x === goalPosition.x && robotPosition.y === goalPosition.y) {
            status.textContent = "Parabéns! Você alcançou o objetivo! 🏆";
            cont++
            prossBar2()
            if(cont > 4){
                textoCorrigido = document.getElementById('text-correcao')
                acertou()
                textoCorrigido.textContent = 'Mandou Bem!'
             
            }
            loadLevel(currentLevel + 1)
            
        } else {
            status.textContent = "Ainda não chegou ao objetivo. Tente novamente!";
        }
    } else {
        status.textContent = "Sequência inválida! O robô voltou ao início.";
        resetSequence();
        robotPosition = { ...levels[currentLevel - 1].robotStart };
        createGrid();
    }

    commandSequence = [];
    updateCommandList();
}

// Executar passo com validação
async function executeStep(command) {
    return new Promise((resolve) => {
        setTimeout(() => {
            let nextPosition = { ...robotPosition };
            switch (command) {
                case "⬆":
                    nextPosition.y--;
                    break;
                case "⬇":
                    nextPosition.y++;
                    break;
                case "⬅":
                    nextPosition.x--;
                    break;
                case "⮕":
                    nextPosition.x++;
                    break;
            }

            if (
                nextPosition.x >= 0 &&
                nextPosition.x < gridSize &&
                nextPosition.y >= 0 &&
                nextPosition.y < gridSize &&
                !obstacles.some(obs => obs.x === nextPosition.x && obs.y === nextPosition.y)
            ) {
                robotPosition = nextPosition;
                createGrid();
                resolve(true);
            } else {
                resolve(false);
            }
        }, 500);
    });
}

// Resetar sequência de comandos
function resetSequence() {
    commandSequence = [];
    updateCommandList();
    document.getElementById("status").textContent = "";
}

// Inicializar níveis e carregar o primeiro
generateLevels(10);
loadLevel(currentLevel);
