<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emanuel R.</title>
    <link rel="stylesheet" type="text/css" href="css/newcss.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/linkspagecss.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/animation.css" media="screen" />
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BenchNine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/ER.ico" type="image/x-icon">
</head>

<body id="trade">
    <nav>
        <img class="logo" src="img/ER.png" alt="Logo">
            <a class="links" href="https://github.com/sprylerIF"> Github </a>  
    </nav>
    
    <div class="centralPage">
        <p> Olá, meu nome é <br/>
            <b style="font-size: 40px;">Emanuel Raimundo</b><br/>
            e seja bem vindo ao meu portifólio!<br/> 
            Aqui destaco alguns trabalhos, expêriencias e um pouco da minha história até o dia de hoje. </br></br>
            Vamos lá?
        </p>
    </div>

    <section>   
        <a href="#topicos" onclick="pagedown('projeto');"> <img class="seta" src="img/arrow.png"> </a>
    </section>

    <div id="projeto" class="projetos">
        <div>
            <nav>
                <img class="logo" src="img/ER.png" alt="Logo">
                    <a class="links" href="https://github.com/sprylerIF"> Github </a>  
            </nav>
        </div>

        <div class="topicos1">
            <h2> Fique a vontade para navegar entre os links abaixo!  </h2>
                <a class="tplinks" href="#projeto" onclick="pageleft('TC');"> Projetos </a>
                <a class="tplinks" href="#contatos" onclick="pagedown2('Cont');"> Contatos </a>
                <a class="tplinks" href="#curriculo" onclick="pageleft2('CR');"> Curriculo </a>
                <a class="tplinks" href="#Emanuel" onclick="pageup2('Emanuel');"> Quem é Emanuel </a>
        <section>   
            <a href="#inicio" onclick="pageup();"> <img class="backseta" src="img/arrow.png"> </a>
        </section>
    </div>
</div>

    <div id="TC" class="TCC">
        <nav>
            <img class="logo" src="img/ER.png" alt="Logo">
                <a class="links" href="https://github.com/sprylerIF"> Github </a>  
        </nav>

        <div class="topicos0">
            <h2 style="animation-name: op; animation-duration: 2s;"> Olá, você já viu uma oportunidade de se utilizar a tecnologia de radiofrequência ?</h2>
            <h2 style="animation-name: op; animation-duration: 2s;"> RFID é uma tecnologia que se vem sendo utilizada a pouco tempo, pensando nisso, unimos segurança, controle e monitoramento a esse projeto. </h2>
            <h2 style="animation-name: op; animation-duration: 2s;"> Esse é o WaySafe</h2>
            <h2 style="animation-name: op; animation-duration: 2s;"> fique a vontade para assistir o vídeo elaborado para aprensentação a banca avaliativa de TCC's do IFRN e acessar os links do Github ou artigo do projeto. </h2> 
            
            <a href="https://docs.google.com/document/d/1bMHZsTcEY0kf6XhewyfNU1frD7-KMIeX9jfpri5uUZc/edit?usp=sharing"> <button class="bu" > Artigo </button> </a>
            <a href="https://youtu.be/BPQ6NFekGeg"> <button class="bu1" > Youtube </button> </a>
            <a href="https://github.com/sprylerIF/waysafe"> <button class="bu2" > Código </button> </a>
        </div>
        
        <section>   
            <a href="#topicos1" onclick="pageleftback();"> <img class="backsetap" src="img/arrow.png"> </a>
        </section>
    </div>

    <div id="Cont" class="Contacts">
        <nav>
            <img class="logo" src="img/ER.png" alt="Logo">
                <a class="links" href="https://github.com/sprylerIF"> Github </a>  
        </nav>

        <div class="topicos1">
            <h2> página de contatos </h2>
        </div>
        <section>   
            <a href="#topicos1" onclick="pagedownback();"> <img class="backsetac" src="img/arrow.png"> </a>
        </section>
    </div>

    <div id="CR" class="Curriculo">
        <nav>
            <img class="logo" src="img/ER.png" alt="Logo">
                <a class="links" href="https://github.com/sprylerIF"> Github </a>  
        </nav>

        <div class="topicos1">
            <h2> curriculo! </h2>
        </div>
        <section>   
            <a href="#topicos1" onclick="pageleftback2();"> <img class="backsetap" src="img/arrow.png"> </a>
        </section>
    </div>

    <div id="Emanuel" class="Quem">
        <nav>
            <img class="logo" src="img/ER.png" alt="Logo">
                <a class="links" href="https://github.com/sprylerIF"> Github </a>  
        </nav>

        <div class="topicos1">
            <h2> Página sobre! </h2>
        </div>
        <section>   
            <a href="#topicos1" onclick="pagedownback2();"> <img class="backsetac" src="img/arrow.png"> </a>
        </section>
    </div>
</body>

</html>