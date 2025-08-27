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
    <link rel="icon" class="size-16" href="imgs/letra.png" type="image/x-icon">
    <title>Munduca | Inicar</title>
</head>
<body id="texo-acessibilidade">
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
            <div class="caixa">
                <form action="php/testeLogin.php" method="POST">
                    <h1>Entrar</h1>
                    <div class="input-box">
                        <h3 style="padding-left: 1.75em; padding-bottom:0.5em;">Email:</h3>
                        <input name='email' type="text" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <h3 style="padding-left: 1.75em; padding-bottom:0.5em; padding-top: 1em;">Senha:</h3>
                        <input  name="senha" type="password" placeholder="Senha" required style="color: #000;">
                    </div>
                    <div class="remember-forgot" style="padding-top:3em">
                        <a href="#">Esqueceu a senha?</a>
                        <br>
                    </div>
                    <br>
                    <div class="button-login">
                    <input type="submit" name="submit" class="btn_login" value="Entrar">
                        
                    </input>
                    </div>
                    <div class="register-link">
                        <br>
                        <p>Não tem uma conta? <a href="cadastro.php"><b>CADASTRAR-SE</a></p>
                    <br><br>
                    </div>
                </form>
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


    <script src="script.js">  
    </script>
    <div vw class="enabled"><div vw-access-button class="active"></div><div vw-plugin-wrapper><div class="vw-plugin-top-wrapper"></div></div></div><script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script><script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
</body>
</html>
