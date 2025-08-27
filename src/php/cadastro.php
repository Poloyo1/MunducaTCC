


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
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Munduca | Inicar</title>
    <style>
        .selected{
            background-color: #004356 !important;
            color: white !important;
        }
    </style>
</head>
<body id="texo-acessibilidade">
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <nav class="navbar">
        <div class=" flex justify-between px-7 ">
            <a href="index.php"><img class="size-16" src="imgs/Logo Munduca.png" alt="Logo Munduca" style="width: 130px; height: 120px;"></a>
            <div class="flex items-center">
                <button class="speak-all" onclick="speak('texo-acessibilidade')" style="margin-right: 1em;"><span class="material-symbols-outlined">volume_up
</span></button>

            </div>
           

        </div>
    </nav>
        <div class="login">
        <div class="container_">
        <h2>Cadastrar</h2>
        <form id="formCadastro">
        <div id="paisForm" class="form-content">
            <h3>Pais ou Responsáveis</h3>
            <label for="nome-pais">Nome</label>
            <input type="text" id="nome-pais" name="nome" placeholder="Digite seu nome" required>

            <label for="sobrenome-pais">Sobrenome</label>
            <input type="text" id="sobrenome-pais" name="sobrenome" placeholder="Digite seu sobrenome" required>

            <label for="sobrenome">Seu RG:</label>
            <input type="text" id="sobrenome" name="rg_pai" placeholder="Ex: 111.111.111-11" required>

            <label for="email-pais">E-mail</label>
            <input type="email" id="email-pais" name="email" placeholder="Digite seu e-mail" required>
            <label id="email-fail"></label>
            <label for="celular-pais">Celular com DDD</label>
            <input type="text" id="celular-pais" name="telefone" placeholder="(00) 00000-0000" required>

            <h3 style="color: white;">Aluno</h3>

            <label for="nome-aluno">Nome</label>
            <input type="text" id="nome-aluno" name="nome_crianca" placeholder="Digite o nome do aluno" required>

            <label for="sobrenome-aluno">Sobrenome</label>
            <input type="text" id="sobrenome-aluno" name="sobrenome_crianca" placeholder="Digite o sobrenome do aluno" required>

            <label for="instituicao-aluno">Instituição de Ensino</label>
            <input type="text" id="instituicao-aluno" name="insti_crianca" placeholder="Digite a instituição do aluno" required>

            <div class="ensino-container">
                <button class="active" id="fund1" onclick="alterarNivel('fundamental 1', 'nivel_ensino_crianca')">Fundamental 1</button>
            </div>

            <div class="serie-container">
                <button id="ano1" onclick="alterarAno('1', 'ano_ensino_crianca')">1°</button>
                <button id="ano2" onclick="alterarAno('2', 'ano_ensino_crianca')" class="active">2°</button>
                <button id="ano3" onclick="alterarAno('3', 'ano_ensino_crianca')">3°</button>
                <button id="ano4" onclick="alterarAno('4', 'ano_ensino_crianca')">4°</button>
                <button id="ano5"  onclick="alterarAno('5', 'ano_ensino_crianca')">5°</button>
            </div>
            
            <input type="hidden" id="nivel_ensino_crianca" name="nivel_ensino" value="" ></input>
            <input type="hidden" id="ano_ensino_crianca" name="ano_ensino" value=""></input>


            <label for="senha-pais">Senha</label>
            <input type="password" id="senha-pais" name="senha_pai" placeholder="Digite sua senha" oninput="capturarInput()" required>

            <label for="confirmar-senha-pais">Confirme a senha</label>
            <input type="password" id="confirmar-senha-pais" placeholder="Confirme sua senha" oninput="capturarInput()" required>
            <label class="hidden" id="senhas"></label>
            <div class="checkbox-container">
                <input type="checkbox" id="termos-pais" required>
                <label for="termos-pais">Aceito os Termos e Política de Privacidade.</label>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="dados-pais" required>
                <label for="dados-pais">Aceito o tratamento dos meus dados de uso.</label>
            </div>

            
        </div>
        </form>
        <div class="submit-container">
                <button class="btn_login" onclick="cadastrar()">Enviar</button>
                <a href="entrar.php">Já tem conta? ENTRAR</a>
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

    <script>
        const fund1 = document.getElementById('fund1')

            function alterarNivel(nivel, id){
                fund1.classList.add('selected')
                event.preventDefault()
                nEnsino = document.getElementById(id)
                nEnsino.value = nivel;

                console.log(nEnsino)
            }
            function alterarAno(ano, id){
            const anodiv = document.getElementById(`ano${ano}`)
            
            const anos =document.querySelectorAll('.anoBtn')
            console.log(anodiv)
            for(i = 0; i < anos.length; i++){
                anos[i].classList.remove('selected')
                
            }
            anodiv.classList.add('selected')
            event.preventDefault()
            anoEnsino = document.getElementById(id)
            anoEnsino.value = ano;
            console.log(anoEnsino)
            }
            function capturarInput(){
                const senha = document.getElementById("senha-pais").value;
                const confirmaSenha = document.getElementById("confirmar-senha-pais").value;
                
                const labelsenhas = document.getElementById("senhas");
                    if (senha === confirmaSenha) {
                        labelsenhas.classList.remove('hidden')
                        labelsenhas.textContent = "As senhas coincidem!";
                        labelsenhas.style.color = "green";
                        console.log('sim')
                    } else {
                        labelsenhas.classList.remove('hidden')
                        labelsenhas.textContent = "As senhas não coincidem.";
                        labelsenhas.style.color = "red";
                        console.log('não')
                    }
                
            }
            function cadastrar(){
                $.ajax({
                    type: 'post',
                
                    url: 'php/cadastroPaiResponsavel.php',
                    data: $('#formCadastro').serialize(),
                    success: function(data){
                        console.log(data)
                    if(data == 0){
                        var email = document.getElementById('email-pais')
                        var labelemail = document.getElementById('email-fail')
                        var sobre = document.getElementById('sobrenome')
                        email.style.border = '2px solid #F20519';
                        labelemail.textContent = "Email já cadastrado";
                        labelemail.style.color = "red";
                        sobre.scrollIntoView({ behavior: "smooth", block: "start" });
                        
                    } else{
                        enviar('entrar.php')
                    }
                    },
                    
                    error: function(){
                
                    }
                
                }) 
            }

    </script>


    <script src="js/script.js">  
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>
