<DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>HouseMate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compile/bootstrap.css">

  <!--Adicionei para o carosel funcionar-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


  <link rel="stylesheet" type="text/css" href="public/css/style2.css">
  <link rel="stylesheet" type="text/css" href="public/css/footer.css">
  <link rel="stylesheet" type="text/css" href="public/css/NavNew.css">
  
</head>
<body>

<!----------------------------->
<!-- Barra de navegação-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a href="#" class="navbar-brand ml-3"> 
            <img class="img-navbar" src="../HouseMate/public/imgs/logos/logo01.png" style="width: 80px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#container-recentess">Vagas recentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#atalho-pessoas">Pessoas procurando</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contato1">Sobre</a>
              </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
              
              <button class="btn menu-right-btn-anuncie border" type="submit" value ="anuncio" formaction="./App/models/cadastrar/signlog.html">Anuncie um lugar</button>
              <button class="btn menu-right-btn border" type="submit" value ="login" formaction="./App/models/cadastrar/signlog.html">Login</button>
            </form>
          </div>
    </nav>
</header>
<!-- FIM da Barra de navegação-->
<!----------------------------->




<!-- Banner inicial-->
<div id="main-banner"> <!-- Banner maior de todos-->
  <div class="container-banner"> 
    <!--
    <div class="col-md-6 col-sm-12">
        <img src="public/imgs/logos/logo01.png" class="img-fluid" alt="logo-HouseMate"> 
      </div>
-->
      
      <div id="banner-search"> <!--banner de busca-->
        <h3 class="text-inic" style="color: white;
    font-size: 1.4rem;">À procura de um lugar pra dividir em Pau dos Ferros?</h3>
        
        <div class="div_formulario"> <!--Div formulario-->
          <form class="form-inline" action="App/models/buscar/busca.php" method="post">
            <select class="form-control mb-2 mr-sm-2" name="seletorform">
              <option name=" " >O que deseja buscar?</option>
              <option name="quarto"> Quarto</option>
              <option name="ape"> Apê</option>
              <option name="casa"> Casa</option>
          </select>

            <input type="text" class="form-control mb-2 mr-sm-2" name="bairro" placeholder="Digite o bairro">
            <input  id="button-addon2" class="btn btn-light mb-2" type="submit" name="Find" value="Procurar">
          </form>
        </div> <!--Div formulario-->
    
          <h4 style=" color: #ffffff;" id="text-idd">Não encontrou o que procurava?</h4>
    
          <div class="div_f" style="left: 50%; position: absolute; transform: translateX(-50%);"> <!--Div formulario-->
            <form class="form-inline" action="App/views/form_procurando.html" form_procurando" method="post">
            <p style="color: white;" class="mb-2 mr-sm-1">Anuncie a sua busca</p>
            <input  id="button-addon2" class="btn btn-primary" type="submit" name="procura" value="aqui">
            </form>
          
        </div> <!--Div -->
   
     
    </div>


  </div>
  </div>





<!---->

<div class="container-two">
    <div class="col-md-12">
      <div class="centered-icon">
        <div class="icon-wrapp icon-circle icon-primary"><i class="fa fa-rocket"></i></div>
        <h5>Estamos aqui para ajudar
        </h5>
        <p>
          Ferramenta inteligente para ajudar você a encontrar o lugar perfeito.
        </p>
        <p><a href="#about" class="btn btn-warning btn-sm">Entenda como funciona</a></p>
      </div>
    </div>
</div>





















<!--CARROUSEL -->
<div id="container-recentess" class="container-recentes">
  <h3 class="col-md-6 col-sm-12" id="title-card"> Vagas recentes</h2>
    <br>

<div id="demo-carosel" class="carousel slide" data-ride="carousel">

  <!-- Indicators 
  <ul class="carousel-indicators">
    <li data-target="#demo-carosel" data-slide-to="0" class="active"></li>
    <li data-target="#demo-carosel" data-slide-to="1"></li>
    <li data-target="#demo-carosel" data-slide-to="2"></li>
  </ul>
-->
  
  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      
      <div class="row">
        <div class="col-md-6">
     <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-primary">Casa</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Casa para alugar no centro</a>
           </h6>
           <div class="mb-1 text-muted small">Nov 12</div>
           <p class="card-text mb-auto">Casa a 5 minutos da Facep, </p>
           <a class="btn btn-outline-primary btn-sm" role="button" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/casa.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
  <div class="col-md-6">
     <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-success">Quarto</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Quarto pra alugar em apartamento</a>
           </h6>
           <div class="mb-1 text-muted small">10 de Novembro</div>
           <p class="card-text mb-auto">Quarto não mobilado, vaga em apartamento, contas por volta de 200,00 RS, Aluguel de 100,00</p>
           <a class="btn btn-outline-success btn-sm" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/quarto3.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
      </div>
    </div> <!--carousel-item1-->


    <div class="carousel-item">
      
      <div class="row">
        <div class="col-md-6">
     <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-primary">Casa</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Casa para alugar no centro</a>
           </h6>
           <div class="mb-1 text-muted small">Nov 12</div>
           <p class="card-text mb-auto">Casa a 5 minutos da Facep, </p>
           <a class="btn btn-outline-primary btn-sm" role="button" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/casa.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
  <div class="col-md-6">
     <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-success">Quarto</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Quarto pra alugar em apartamento</a>
           </h6>
           <div class="mb-1 text-muted small">10 de Novembro</div>
           <p class="card-text mb-auto">Quarto não mobilado, vaga em apartamento, contas por volta de 200,00 RS, Aluguel de 100,00</p>
           <a class="btn btn-outline-success btn-sm" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/quarto3.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
      </div>
    </div> <!--carousel-item2-->


    <div class="carousel-item">
      
      <div class="row">
        <div class="col-md-6">
     <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-primary">Casa</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Casa para alugar no centro</a>
           </h6>
           <div class="mb-1 text-muted small">Nov 12</div>
           <p class="card-text mb-auto">Casa a 5 minutos da Facep, </p>
           <a class="btn btn-outline-primary btn-sm" role="button" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/casa.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
  <div class="col-md-6">
     <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-success">Quarto</strong>
           <h6 class="mb-0">
              <a class="text-dark" href="#">Quarto pra alugar em apartamento</a>
           </h6>
           <div class="mb-1 text-muted small">10 de Novembro</div>
           <p class="card-text mb-auto">Quarto não mobilado, vaga em apartamento, contas por volta de 200,00 RS, Aluguel de 100,00</p>
           <a class="btn btn-outline-success btn-sm" href="index.html">Ver Detalhes</a>
        </div>
        <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="Imgs/quarto3.jpg" style="width: 200px; height: 250px;">
     </div>
  </div>
      </div>

    </div> <!--carousel-item3-->


  </div> <!--carousel-inner-->
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo-carosel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo-carosel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> <!--demo-->

<br>
      <div class="col-md-6 col-sm-12" id="anchor-details">
      <form action="App/models/buscar/busca.php" method="post">
      <input  id="button-addon2" class="btn btn-light" type="submit" name="Finde" value="Mais Vagas">
      </form>
      </div> <!--fim col-->
      <br>


</div> <!--container-->














<div class="container-two" id="about">
  <div class="row">
    <div class="col-md-6">
      <div class="centered-icon">
        <div class="icon-wrapp icon-circle icon-primary" style="width: 100px;"><i class="fa fa-home"></i></div>
        <h5>Encontre inquilinos</h5>
        <p>
          Encontre pessoas buscando casa ou quarto para alugar na sua área.
        </p>
        <p><a href="App/models/cadastrar/signlog.html" class="btn btn-primary btn-sm">Anuncie seu lugar</a></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="centered-icon">
        <div class="icon-wrapp icon-circle icon-primary"><i class="fa fa-laptop"></i></div>
        <h5>Encontre um quarto</h5>
        <p>
          Encontre o quarto perfeito para você, contate o dono e marque uma visita hoje mesmo!
        </p>
        <p><a href="App/models/cadastrar/signlog.html" class="btn btn-success btn-sm">Encontre um lugar</a></p>
      </div>
    </div>
  </div>
</div>














<section class="details-card" id="atalho-pessoas">
  <div class="container">
      <h3 class="col-md-6 col-sm-12" id="title-card"> PESSOAS PROCURANDO UM LUGAR...</h2>
      <br>
      <div class="row">
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img id="img-perfil-pesson" src="Imgs/rostos/etie.jpg" alt="">
                      <span><h4>Ap ou Casa</h4></span>
                  </div>
                  <div class="card-desc">
                      <h3>André André</h3>
                      <p> Procuro casa ou apartamento para alugar no bairro Princesinha do Oeste, em bom estado.</p>
                          <a href="#" class="btn-card">Mais informações</a>   
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img id="img-perfil-pesson" src="Imgs/pessoas/009909.jpg" alt="">
                      <span><h4>Ap</h4></span>
                  </div>
                  <div class="card-desc">
                      <h3>Maria Maria</h3>
                      <p>PROCURO vaga individual em apartamento na região central, próx. Av. Higienópolis</p>
                          <a href="#" class="btn-card">Mais Informações</a>   
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img id="img-perfil-pesson" src="Imgs/rostos/diog.jpg" alt="">
                      <span><h4>CASA</h4></span>
                  </div>
                  <div class="card-desc">
                      <h3>Doulgas</h3>
                      <p>Procuro casa pra alugar no centro da cidade, que seja grande, muito grande, com muitos quartos</p>
                          <a href="#" class="btn-card">Mais Informações</a>   
                  </div>
              </div>
          </div>
      </div>
      <br>
      <div class="col-md-6 col-sm-12" id="anchor-details">
        <a href="App/models/buscar/busca2.php" class="btn btn-light"><strong>Encontre mais pessoas </strong> </a> 
      </div> <!--fim col-->
  </div>
</section>
















<!---formulario-->

    <!-- Formulário -->
    <div class="container">

      <div class="row">
          <div class="col-12 text-center my-5">
              <h2 class="section-help section-help--center">Entre em 
                <span class="section-help_colorido">Contato</span>
              </h2>

          </div>
      </div>

      <div class="row justify-content-center mb-5">
          <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="App/models/cadastrar/contatoinfo.php" method="post">

                  <div class="form-row">

                      <!-- <label for="inputNome"> Digite seu nome </label> -->
                      <div class="form-group col-sm-5">
                          <input name="name" type="text" class="form-control" id="inputNome" placeholder="Nome">
                      </div>
                      <div class="form-group col-sm-5">
                          <input name="sobrename" type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                      </div>
                      <div class="form-group col-sm-2">
                          <select name="sexo" id="inputSexo" class="form-control">
                              <option selected>Feminino</option>
                              <option>Masculino</option>
                              <option>Prefiro não identificar</option>
                          </select>
                      </div>

                  </div>

                  <div class="form-row">

                      <div class="form-group col-sm-12">
                          <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email">
                      </div>

                  </div>


                  <div class="form-row">

                      <div class="form-group col-sm-12">
                          <input name="message" type="text" class="form-control" id="inputDuvida" placeholder="Descreva sua dúvida">
                      </div>

                  </div>


                  <div class="form-row">
                      <button id="buton-send" type="submit" class="btn btn-primary ml-auto">Enviar</button>
                      <!-- Se quiser colocar um popover como uma ajuda pra preencher o formulário é uma ideia também, só pesquisar mais sobre -->
                  </div>

              </form>
          </div>
      </div>

  </div>

<!--fim formulario-->



















<!--RODAPE-->

<footer class="card-footer">
  <div class="container">
    <div class="row">
      <section id="endereco" class="col-sm-3">
        <div>Navegar</div> <br>
        <li>
            <a href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a href="anuncio.html">Vagas recentes</a>
        </li>

        <li class="nav-item">
          <a href="anuncioProcura2.html">Pessoas procurando</a>
      </li>

        <li class="nav-item">
          <a href="Cadastrar.html">Anuncie aqui</a>
      </li>

        <li class="nav-item">
          <a href="signlog.html">Login</a>
        </li>

        <hr class="d-block d-sm-none">
      </section>

      <section id="contato1" class="col-sm-3">
        <div>
          Redes Sociais:
        </div> <br>
        <!-- Add icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            
        <hr class="d-block d-sm-none">
        <div id="contato2">
          Contato:
          <br>
          +55 (88) 9 9635 1705
        </div> <br>

      </section>
      <section id="sobre" class="col-sm-6 justify-content-center">
        <div>Sobre</div> <br>
        Ferramenta inteligente para ajudar você a encontrar o lugar perfeito. Plataforma mais simples e completa para quem está buscando ou oferecendo quartos para alugar ou moradias compartilhadas. Em poucos passos, você encontra o lugar perfeito para morar com seu colega de quarto ideal.
        <hr class="d-block d-sm-none">
      </section>
    </div>
    <div class="text-center"> &copy; Copyright ZeND 2019

    </div>
  </div> 
</footer>

</body>
 