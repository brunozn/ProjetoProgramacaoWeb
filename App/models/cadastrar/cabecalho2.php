<DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Anúncio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compile/bootstrap.css">


  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


 
  <link rel="stylesheet" type="text/css" href="../../../public/css/style2.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/footer.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/NavNew.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/pagination.css">
</head>
<body>

 
  <!----------------------------->
<!-- Barra de navegação-->
<!-- Navigation -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a href="#" class="navbar-brand ml-3"> 
          <img class="img-navbar" src="../../../public/imgs/logos/logo01.png" style="width: 80px;" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="busca.php">Vagas recentes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="busca2.php">Pessoas procurando</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
            <button class="btn menu-right-btn-anuncie border" type="submit">Anuncie Aqui</button>
            <button class="btn menu-right-btn border" type="submit">Login</button>
          </form>
        </div>
  </nav>
</header>

  <!-- FIM da Barra de navegação-->
  <!----------------------------->

  

      

<!-- Page Content -->
<div class="container-card">


<div id="main-content" class="container">

  <h1 class="font-weight-light text-center mt-4 mb-0" style="color:#004166;">Anúncios de Vagas</h1>

  <h3 class="font-weight-light text-center mt-4 mb-0">Encontre pessoas que estão procurando um lugar</h3>

  <hr class="mt-2 mb-5">



  <div class="div_formulario" style="align-items: center;
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: center;"> <!--Div formulario-->
          <form class="form-inline" action="busca2.php" method="post">
            <select class="form-control mb-2 mr-sm-2" name="seletorform">
              <option name=" " >O que deseja buscar?</option>
              <option name="quarto"> Quarto</option>
              <option name="ape"> Apê</option>
              <option name="casa"> Casa</option>
          </select>

            <input type="text" class="form-control mb-2 mr-sm-2" name="bairro" placeholder="Digite o bairro">
            <input  id="button-addon2" class="btn btn-primary mb-2" type="submit" name="Find" value="Procurar">
          </form>
        </div> <!--Div formulario-->

  <div class="row text-center text-lg-left">

    <div class="row">