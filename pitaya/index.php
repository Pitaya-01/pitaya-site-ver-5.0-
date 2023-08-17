<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pitaya</title>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    
</head>


<body style="font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif'">

<!-- NAVBAR -->
<header>


<nav id="navbar" class="navbar navbar-expand-lg navbar-dark" style="z-index: 2;position: fixed; width:100%; margin-top: -1%;background-color: #ffff; box-shadow: 0px 4px 4px #FF548A; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
    <div class="container px-1">

      <a class="navbar-brand" style="margin-left: -20%;" href="#hero">
      <button class="btn third d-flex" style="margin: -0%"> <img src="imgs/pitayanav.png" width="100%" style="" alt=""> </button>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 1%">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4"  style="font-weight: 600; margin-right: -5%">
          <li class="nav-item" style="" id="navhover"> <a href="#produto" class="btn btn3 fs-4" style=""><b class="navtext">PRODUTO</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="#objetivos" class="btn btn3 fs-4"><b  class="navtext">OBJETIVOS</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="#equipe" class="btn btn3 fs-4"><b  class="navtext">EQUIPE</b></a></li>
          <li style="width:70px"> </li>
          <li class="nav-item" id="navhover"><a href="#footer" class="btn btn3 fs-4"><b  class="navtext">CONTATO</b></a></li>
        </ul>
      </div>
    </div>
  </nav>

</header>

<!-- NAVBAR-->


<!-- HERO SECTION -->
<section id="hero">

<div class="container-fluid" id="hero" style="margin-top: -2%;padding-top: 5%;box-shadow: 0px 4px 4px #FF548A; ">

<video autoplay loop muted plays-inline id="video-hero">
  <source src="imgs/videos/cinematico2.mp4" type="video/mp4">
</video>

<div class="col-md-5" style="padding-top: 6%; color: #ffffff; " id="divtitulo">
  <figure class="text-left">
    <h1 class="titulo_intro"><u>O QUE É PITAYA?</u></h1>
  </figure>
  <figure class="texto_intro">
  PITAYA é uma equipe de desenvolvedores criada com o objetivo de desenvolver novas tecnologias voltadas para facilitar o cotidiano das pessoas.
  </figure>

  </div>

</div>

</section>
<!-- HERO SECTION -->


<br>
<br>
<br>
<br>


<!-- WRAPPER ---------------------------------------------------------------------------------->
<!-- <div class="container-fluid" style="display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;"> -->

    <div class="container-fluid" style="margin-left:0%"> 
<!-- WRAPPER ---------------------------------------------------------------------------------->


<!-- PRODUTO -->
<section class="container-fluid">



<div class="row row d-flex justify-content-center" style="margin-left: 0%">



<div class="col-md-5" style="color: #000000; padding-right: 3%;">
  <figure class="text-left">
    <h1 class="display-6" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" id="produto"><u>ALIMENTADOR AUTOMÁTICO PARA PETS</u></h1>
  </figure> 
  <figure class="text-left fs-3">
  Este produto tem a finalidade de facilitar a alimentação dos animais e economizar o tempo dos pais de pets. Através de um aplicativo 
  que você pode baixar no seu celular diretamente da play store, você poderá liberar a ração e água do pet da distância que você estiver,  
  podendo também definir as quantidades necessárias, e tudo isso fora ou dentro do mesmo ambiente que o animal. 
  </figure>
  </div>

    <img class="col-md-3" src="imgs/produto.jpg" width="10"  style="  
    border-style: solid;
    border-color: #FF548A; 
    border-width: 5px 5px 5px 5px; 
    box-shadow: 0px 0px 70px 6px #FF548A; 
    border-radius: 20px;" alt="">



</div>

<br>
<br>
<br>

<div class="row row d-flex justify-content-center" style="margin-left: 9%" id="como_funciona">

<div class="col-md-10" style="color: #000000;">
  <figure class="text-left">
    <h1 class="display-6" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><u>COMO FUNCIONA?</u></h1>
  </figure>
  <figure class="text-left fs-3">
  O equipamento será construído por meio de canos e mangueiras, os quais terão sensores e outras<br> peças do Arduino. Esse equipamento 
  pode estar em vários ambientes, como: em casa, hotéis de <br>pets, adestramentos e petshops.
  </figure>
  </div>

</div>


</section>

<!-- PRODUTO -->



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- OBJETIVOS DO PRODUTO -->

<section class="container-fluid" style="">


<div class="row position-relative text-center" style="">
<div class="col-md-11" style="color: #ffffff;">
  <figure class="text-left">
    <h1 class="display-5 position-relative text-center" style="color: #FF548A; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" id="objetivos"><u>OBJETIVOS DO PROJETO</u></h1>
  </figure>
  </div>
</div>

<br>
<p>


<!-- -->



<div class="container-fluid d-flex justify-content-around" style="">

<div class="card" style="">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="card-inner">
    <img src="imgs/dinheiro.png" width="85%" style="padding: 2%; margin-left: 7%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
    <br>
    <figure class="fs-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #FF548A;text-transform: uppercase;"><b><u>Acessibilidade financeira</u></b></figure>
    
    <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Projetar o alimentador automático com um custo acessível, 
      tornando-o economicamente viável para a maior parte da população.</figure>

    </div>
</div>


<div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="card-inner">
    <img src="imgs/durabilidade.png" width="85%" style="padding: 2%;margin-left: 7%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
    <br>
    <figure class="fs-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #FF548A;text-transform: uppercase;"><b><u>Durabilidade e Qualidade</u></b></figure>
    
    <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Garantir a durabilidade do alimentador automático, utilizando materiais resistentes e de alta qualidade.</figure>

    </div>
</div>


<div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="card-inner">
    <img src="imgs/acessibilidade.png" width="85%" style="padding: 4%;margin-left: 7%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
    <br>
    <figure class="fs-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #FF548A;text-transform: uppercase;"><b><u>Acessibilidade e Usabilidade</u></b></figure>
    
    <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Projetar o alimentador automático levando em consideração a facilidade de uso para diferentes públicos, incluindo pessoas com deficiências físicas ou limitações.</figure>

    </div>
</div>


<div class="card" style="border-top-left-radius: 65px; border-bottom-right-radius: 65px;">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="card-inner">
    <img src="imgs/ideia.png" width="85%" style="padding: 4%;margin-left: 7%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
    <br>
    <figure class="fs-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: #FF548A;text-transform: uppercase;"><b><u>Conscientização e Educação</u></b></figure>
    
    <figure class="fs-5" style="padding:4%; margin-top: -4%" id="textocard">Promover a conscientização sobre a importância da alimentação adequada para os pets e os benefícios de um alimentador automático</figure>

    </div>
</div>




</div>

<!-- -->



</section>

<!-- OBJETIVOS -->



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<!-- OBJETIVOS DA EQUIPE -->


<div class="row d-flex justify-content-center">


<div class="col-md-7"> <!---->

<figure class="text-left">
    <h1 class="display-6" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><u>POR QUE DEVO TER UM ALIMENTADOR AUTOMÁTICO?</u></h1>
  </figure> 

<br>
<br>
<br>

<div class="d-flex justify-content-around" id="geral" style="margin-left: -70px">

  <div class="container-flex text-center col-md-4" id="bloco1">
  <img src="imgs/tempo.png" class="imagecard" alt="..." style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);z-index: 1;">
  <br>
  <p>
  <section class="text fs-4" style="padding-right: 0%;"><b>Economiza tempo</b></section>
  </div>

  <div class="container-flex  text-center col-md-4" id="bloco2">
  <img src="imgs/calendario.png" class="imagecard" alt="..." style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
  <br>
  <p>
  <section class="text fs-4" style="padding-right: 3%"><b>Mantém os horários de alimentação regulados</b></section>
  </div>

  <div class="container-flex  text-center col-md-4" id="bloco3">
  <img src="imgs/distancia.png" class="imagecard" alt="..." style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
  <br>
  <p>
  <section class="text fs-4" style="padding-right: 3%"><b>Permite alimentar o pet a distância</b></section>
  </div>

  <div class="container-flex  text-center col-md-4" id="bloco4">
  <img src="imgs/petshop.png" class="imagecard" alt="..." style="width:60%;filter: drop-shadow(8px 8px 6px #FFA3C0);">
  <br>
  <p>
  <section class="text fs-4" style="padding-right: 3%"><b>Facilita a alimentação em hotéis para pets</b></section>
  </div>

</div>


</div> <!---->


</div>




<!-- OBJETIVOS DA EQUIPE -->



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>                                                                        




<!-- EQUIPE -->


<figure class="text-center" style="margin-left: -6%">
    <h1 class="display-5" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" id="equipe"><u>EQUIPE</u></h1>
  </figure> 

<div class="row d-flex justify-content-center">
  

<div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="jp">
  <div class="row g-0" style="">
    <div class="col-md-4 d-flex align-items-center" style="box-shadow: 2px 5px 4px #FF548A; border-radius:90px;">
      <img id="foto" src="imgs/temporario.jpg" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%;" alt="...">
    </div>
    <div class="col-md-8" style="">
      <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
        <h5 class="card-title fs-2" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b><u>João Paulo</u></b></h5>
        <p class="card-text fs-4"><b>Design Criativo</b></p>
        <p class="card-text" style="margin-left: -1%; word-spacing: 10px;">
        <br>
        <a  href="https://www.instagram.com/joo_paulou/" target="a/blank"><img id="social" src="imgs/instagram.png" class="img-fluid rounded-start" style="width:18%" alt="..."></a>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/github.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        </small></p>
      </div>
    </div>
  </div>
</div>

<!---->
<div class="col-md-1" style="margin-right: -4%">
</div>
<!---->


<div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="gi">
  <div class="row g-0" style="">
    <div class="col-md-4 d-flex align-items-center"  style="box-shadow: 2px 5px 4px #FF548A; border-radius:90px;">
      <img id="foto" src="imgs/temporario.jpg" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%" alt="...">
    </div>
    <div class="col-md-8" style="">
      <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
        <h5 class="card-title fs-2" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b><u>Giovana albanês</u></b></h5>
        <p class="card-text fs-4"><b>Líder da equipe</b></p>
        <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
        <br>
        <a  href="https://www.instagram.com/gialbanes/" target="a/blank"><img id="social" src="imgs/instagram.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/gialbanes" target="a/blank"><img id="social" src="imgs/github.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        </small></p>
      </div>
    </div>
  </div>
</div>

</div>

<br>
<p>
<br>



<div class="row d-flex justify-content-center">
  


<div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="anna">
  <div class="row g-0" style="">
    <div class="col-md-4 d-flex align-items-center" style="box-shadow: 2px 5px 4px #FF548A; border-radius:90px;">
      <img id="foto" src="imgs/temporario.jpg" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%" alt="...">
    </div>
    <div class="col-md-8" style="">
      <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%">
        <h5 class="card-title fs-2" style="color: #FF548A;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b><u>Anna Luiza</u></b></h5>
        <p class="card-text fs-4"><b>Programação Mobile</b></p>
        <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
        <br>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/instagram.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://www.instagram.com/mariano__anna/" target="a/blank"><img id="social" src="imgs/github.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img id="social" src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        </small></p>
      </div>
    </div>
  </div>
</div>

<!---->
<div class="col-md-1" style="margin-right: -4%">
</div>
<!---->


<div class="mb-3" style="max-width: 25%;" style="border: 3px solid #000000;" id="donovan">
  <div class="row g-0 " style="">
    <div class="col-md-4 d-flex align-items-center" style="box-shadow: 2px 5px 4px #FF548A; border-radius:90px;">
      <img id="foto" src="imgs/temporario.jpg" class="img-fluid" style="width: 100%; border-radius: 90px;margin-left: 0%" alt="...">
    </div>
    <div class="col-md-8" style="">
      <div class="card-body" style="padding-left: 10%; padding-top: 20%;margin-left: -3%;">
        <h5 class="card-title fs-2" style="color: #FF548A; width:400px;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b><u>Dônovan Domingues</u></b></h5>
        <p class="card-text fs-4" style=" width:400px"><b>Modelo Físico do produto</b></p>
        <p class="card-text" style="margin-left: -1%;word-spacing: 10px;">
        <br>
        <a  href="https://www.instagram.com/donovan_d.d.2.8/" target="a/blank"><img id="social" src="imgs/instagram.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/Donovandd28" target="a/blank"><img id="social" src="imgs/github.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        <a  href="https://github.com/Joao1paulo" target="a/blank"><img  id="social" src="imgs/linkedin.png" class="img-fluid rounded-start" style="width: 18%" alt="..."></a>
        </small></p>
      </div>
    </div>
  </div>
</div>

</div>




<!-- EQUIPE -->




</div> <!-- fechamento wrapper -->

<br>
<br>
<br>
<br>
<br>


<footer class="footer text-center pd-0" style="padding:1%" id="footer">
<a href="https://github.com/Joao1paulo" target="a/blank"><img src="imgs/github.png" id="gitfooter" class="pd-0" style="width:4%;" alt="..."></a>
<br>
<a class="fs-2" id="link" href="" style="color: #000000; font-family: 'Trebuchet MS', 'Helvetica', 'sans-serif';text-shadow: 0px 2px 4px #FF548A;"><b class="email">pitayatech01@gmail.com</b></a>
</footer>


</body>

<script src="script.js"></script>
</html>