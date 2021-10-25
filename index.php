<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emanuel R.</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/mediacss.css" media="screen" />
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed:wght@100;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/ER.ico" type="image/x-icon">
</head>

<body>
  <nav class="navbar" id="MNavbar"> 
    <img class="logo" src="img/ER.png" alt="Logo">
      <div class="links">
        <a class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
       </a>
          <a href="index.php">Início</a>
          <a href="contacts.html">Contatos</a>
          <a target="_blank" href="https://github.com/sprylerIF">Github</a>
          <a href="Consideração.html">Obrigado</a>  
      
      
        </div>
  </nav>

  <div class="bodys">   
    <p class="Paragrafo"> 
        Olá, meu nome é <br/>
      <b style="font-size: 40px;">Emanuel Raimundo</b><br/>
        e seja bem vindo ao meu portifólio!<br/> 
        Aqui destaco alguns trabalhos, expêriencias e um pouco da minha história até o dia de hoje.
      </p>
    <button class="btn" onclick="openmodal('abrirModal')" > Vamos lá!</button>
  </div>

  <div >
    <img class="imgbod" src="img/pictures.png">
  </div>

  <div id="abrirModal" class="modalcontainer">
    <div class="modal1">
      <button title="Fechar"  onclick="closemodal('abrirModal')" class="fechar">x</button>
        <div> 
          <div class="curriculo"><img class="mg1"  src="img/trabalho.jpg"> <a href="curriculo.html"><p> <b> Curriculo </b> </p> </a></div>  
            <div class="pesquisa"> <img class="mg1" src="img/pesquisa.jpg"> <a href="pesquisa.html"> <p> <b> Pesquisa </b> </p> </a></div>
        </div>
      <a href="curriculo.html"> <p class="pr"> <b> Curriculo </b> </p> </a>
      <a href="pesquisa.html"><p class="pr"> <b> Pesquisa </b> </p> </a>
    </div>
  </div>

  <footer>
    <img class="mg"  src="img/emanuelra.png">
  </footer>

</body>

</html>