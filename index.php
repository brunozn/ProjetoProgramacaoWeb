<DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compile/bootstrap.css">

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


  <link rel="stylesheet" type="text/css" href="style.css">
  <script src='main-index.js'></script>

  
</head>
<body>


    <nav id="navegacao" class="navbar navbar-expand-lg navbar-light navbar-laravel">
<!--<nav id="navegacao" class="navbar navbar-expand-sm navbar-dark"> -->
  <div class="container">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index.php" style="background-color: crimson;">
      <img src="Imgs/logo.png" alt="logo" style="width:50px; height: 50px;">
    </a>
    <p id="sitename" style="background-color: darkmagenta;"></p>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links-navegacao">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Links -->
<div class="collapse navbar-collapse ml-auto" id="links-navegacao">
  <ul class="navbar-nav ml-auto"> <!--ml-auto to the right-->
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  class="colorido" class="btn btn-primary" href="Cadastrar.html">  Anuncie Aqui  </a>
    </li>
      <li class="nav-item">
          <a class="nav-link" href="#last-container">Vagas Recentes</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="anuncioProcura2.html">Pessoas procurando</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="anuncio2.html">Vagas Disponíveis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#contato1">Sobre</a>
      </li>
</ul>
</div>

  </div>
</nav>

<!---
<div id="topo">
    <div id="corpo_topo">
          <h1> AJUDAÍ </h1>                    
    </div>
  
  </div>
-->

<div id="main-banner">
  <div id="search-form">
    <h1 id="hh1">À procura de um apê pra dividir em Pau dos Ferros?</h1>
    <span>
<br>

    <h4>Encontre pessoas em comum e evite dores de cabeça</h4>		
<br>
  </span>	
    <form>
        <div class="input-group mb-6">
            <input type="text" class="form-control" placeholder="Digite o Bairro" aria-label="Digite o bairro" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Procurar</button>
            </div>
    </div>
    <p>
      <br>
        Você tem um Quarto?
    </p>
      <div class="botAnuc">
    <div class="input-group-append">
      <a class="btn btn-primary btn-lg" href="Cadastrar.html" role="button">Anuncie</a> <br> <br> 
    </div>
  </div>
    </div>
    </form>
  </div>
</div>


<!--<footer class="card-footer"> -->
>
    <div class="container-rodape">
        <div class="row">
          <section id="endereco" class="col-sm-4">
              <div class="col-lg col-md-6 col-12">

                  <!--<svg class="hp-icon"> </svg> -->
                  <img src="Imgs/home.svg" alt="hom" />
                  <h4 style="margin-top: 30px;">Encontre inquilinos</h4>
          <p>Encontre pessoas buscando casa ou quarto para alugar na sua área </p>
          <button href="anuncioProcura.html" type="button" class="btn btn-success" style="margin-top: 20px;">Anuncie seu quarto</button>
      </div>
              <br>
            <hr class="d-block d-sm-none">
          </section>
    
          <section id="contato" class="col-sm-4">
              <div class="col-lg col-md-6 col-12" >
                  <img class="iconi" src="Imgs/user-group.svg" alt="gru" />
                  <h4 style="margin-top: 30px;">Encontre um quarto</h4>
          <p>Encontre o quarto perfeito para você, contate o dono e marque uma visita hoje mesmo!</p>
          <button href="anuncio.html" type="button" class="btn btn-warning" style="margin-top: 20px;">Encontre um quarto</button>
      </div>
       <br>
            <hr class="d-block d-sm-none">
          </section>
          <section id="tele" class="col-sm-4">
              <div class="col-lg col-md-6 col-12">
                <img src="Imgs/information.svg" alt="info" />
                  <h4 style="margin-top: 30px;">Estamos aqui para ajudar</h4>
                  <p>Ferramenta inteligente para ajudar você a encontrar o lugar perfeito.</p>
                  <button href="#" class="btn btn-info" style="margin-top: 20px;">Entenda como funciona</a>
              </div> <br>
            <hr class="d-block d-sm-none">
          </section>
        </div>
      </div> 

    <!--</footer> -->
  


 <div class="main-recentes"> 
	  <div id="title-main-recentes">
      <br> <br>
        <h2> Pessoas procurando um lugar</h2>
      </div>
    <div class="container cta-100 ">
    
        <div class="container-pessoas">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-3" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Quarto</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="Imgs/rostos/ana.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>Ana Ana</h5>
                              </a>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Quarto pra morar, sou nova na cidade, estudo em alguem lugar. Estou atrAs de emprego, logo é interessante que a casa seja perto do centro</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Mais informações</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3" >
                          <div class="item-box-blog">
                            <div class="item-box-blog-image">
                              <!--Date-->
                              <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Casa</span> </div>
                              <!--Image-->
                              <figure> <img alt="" src="Imgs/rostos/karol1.jpg"> </figure>
                            </div>
                            <div class="item-box-blog-body">
                              <!--Heading-->
                              <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                  <h5>Maria Maria</h5>
                                </a>
                              </div>
                              <!--Text-->
                              <div class="item-box-blog-text">
                                <p> Procuro mansão, com no mínimo cinco quartos, família pequena mas que gosta de conforto. Que tenha garagem para três carros e um caminhão</S> .</p>
                              </div>
                              <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Mais informações</a> </div>
                              <!--Read More Button-->
                            </div>
                          </div>
                        </div>

                      <div class="col-md-3" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Casa</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="Imgs/rostos/andre.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>Joao joao</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Procuro casa que tenha teto, paredes e portas, não sou muito exigente, que tenha agua, luz...bla bla bla.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Mais Informações</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Quarto</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="Imgs/rostos/etie.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>André André</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Busco morada em casa, tenho cama apenas, ajudo nas despesas e pago aluguel.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">Mais informações</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img class="tamanho" alt="" src="Imgs/rostos/italo.png"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="Imgs/rostos/jua.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                            <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="depoi" class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                            <!--Image-->
                            <figure> <img class="tamanho" alt="" src="Imgs/rostos/karol1.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>News Title</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                            </div>
                             <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>


    </div>
    
<!-------------------------------------------------------------------------------------->


  

<!-- ------------------------------------------>
    <main id="last-container" class="wrapper" style="background-color: springgreen;">
        <h1>Vagas Recentes</h1>
        <ul>
          <li>
            <a href="anuncio.html" class="clickarea" style="background-color: violet;">
              <div class="company-box">
                <img src="Imgs/casa2.jpg">
                <div class="company-info">
                  <h3>Casa para alugar</h3>
                  <p>Imóvel próximo do centro da cidade...</p>
                </div>
              </div>
              <div class="locality" style="background-color: thistle;">
                <i class="fas fa-map-marker-alt"></i>
                <p>Rua Antonio Januario</p>
              </div>
            </a>
          </li>
          <li>
            <a href="anuncio.html" class="clickarea">
              <div class="company-box" style="background-color: tomato;">
                <img src="Imgs/quarto3.jpg">
                <div class="company-info">
                  <h3>Quarto para alugar</h3>
                  <p>Quarto de solteiro</p>
                </div>
              </div>
              <div class="locality">
                <i class="fas fa-map-marker-alt"></i>
                <p>Rua Santo Antonio, Centro</p>
              </div>
            </a>
          </li>
          <li>
            <a href="anuncio.html" class="clickarea" style="background-color: yellow;">
              <div class="company-box" style="background-color: blue">
                <img src="Imgs/casa.jpg">
                <div class="company-info">
                  <h3>Casa para Alugar</h3>
                  <p>Casa com boa localização</p>
                </div>
              </div>
              <div class="locality">
                <i class="fas fa-map-marker-alt"></i>
                <p>Rua São João</p>
              </div>
              <div class="contato">
               <!-- <span class="homeo">Contato</span>-->
              </div>
            </a>
          </li>
          <li>
            <a href="anuncio.html" class="clickarea">
              <div class="company-box">
                <img src="Imgs/quarto.jpg">
                <div class="company-info">
                  <h3>Quarto livre </h3>
                  <p>Quarto mobiliado</p>
                </div>
              </div>
              <div class="locality">
                <i class="fas fa-map-marker-alt"></i>
                <p>Próximo ao Popular</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="btn-container">
          <a href="anuncio.html" class="btn">Ver mais vagas</a>
        </div>
      </main>
            

<!-- Section: Testimonials v.3 -->
<section class="team-section text-center my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Depoimentos</h2>
    <!--Grid row-->
    <div class="row text-center" >
            <div class="row text-duo1" > 
      <!--Grid column-->
      <div class="col-md-6 mb-md-0 mb-6">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="Imgs/rostos/fati.jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Fatima da Silva</h4>
          <h6 class="font-weight-bold blue-text my-3">Estudante</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fa fa-quote-left pr-2"></i>O site me ajudou muito, agradeço por mais.</p>
          <!--Review-->
          <div class="estrelas">
              <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
              <label for="cm_star-1"><i class="fa"></i></label>
              <input type="radio" id="cm_star-1" name="fb" value="1"/>
              <label for="cm_star-2"><i class="fa"></i></label>
              <input type="radio" id="cm_star-2" name="fb" value="2"/>
              <label for="cm_star-3"><i class="fa"></i></label>
              <input type="radio" id="cm_star-3" name="fb" value="3"/>
              <label for="cm_star-4"><i class="fa"></i></label>
              <input type="radio" id="cm_star-4" name="fb" value="4"/>
              <label for="cm_star-5"><i class="fa"></i></label>
              <input type="radio" id="cm_star-5" name="fb" value="5"/>
            </div>
        </div>


      </div>

      <div class="col-md-6 mb-md-0 mb-6">
      <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="Imgs/rostos/paul.jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Maicon</h4>
          <h6 class="font-weight-bold blue-text my-3">Trabalhador</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fa fa-quote-left pr-2"></i>Achei uma galera muito legal para dividir despesas, graças a plataforma.</p>
          <!--Review-->
          <div class="estrelas">
              <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
              <label for="cm_star-1"><i class="fa"></i></label>
              <input type="radio" id="cm_star-1" name="fb" value="1"/>
              <label for="cm_star-2"><i class="fa"></i></label>
              <input type="radio" id="cm_star-2" name="fb" value="2"/>
              <label for="cm_star-3"><i class="fa"></i></label>
              <input type="radio" id="cm_star-3" name="fb" value="3"/>
              <label for="cm_star-4"><i class="fa"></i></label>
              <input type="radio" id="cm_star-4" name="fb" value="4"/>
              <label for="cm_star-5"><i class="fa"></i></label>
              <input type="radio" id="cm_star-5" name="fb" value="5"/>
            </div>
        </div>
      <!--Grid column-->
    </div>
  </div> <!--duo1-->

  <div class="row text-duo2" > 
      <!--Grid column-->
      <div class="col-md-6">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="Imgs/rostos/diog.jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Dougras</h4>
          <h6 class="font-weight-bold blue-text my-3">Estudante</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fa fa-quote-left"></i>Moro em uma linda casa, ampla e bem localizada por causa do site, que me ajudou com diversas opções.<i class="fa fa-quote-right"></i></p>
          <!--Review-->
              <div class="estrelas">
                  <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input type="radio" id="cm_star-1" name="fb" value="1"/>
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input type="radio" id="cm_star-2" name="fb" value="2"/>
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input type="radio" id="cm_star-3" name="fb" value="3"/>
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input type="radio" id="cm_star-4" name="fb" value="4"/>
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-md-6">
  
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="Imgs/rostos/karol1.jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Maria Karina</h4>
          <h6 class="font-weight-bold blue-text my-3">Mudelo</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fa fa-quote-left" ></i>Site muito bom, recomendo! O criador é um gênio.<i class="fa fa-quote-right"></i></p>
          <!--Review-->
          <div class="estrelas">
              <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
              <label for="cm_star-1"><i class="fa"></i></label>
              <input type="radio" id="cm_star-1" name="fb" value="1"/>
              <label for="cm_star-2"><i class="fa"></i></label>
              <input type="radio" id="cm_star-2" name="fb" value="2"/>
              <label for="cm_star-3"><i class="fa"></i></label>
              <input type="radio" id="cm_star-3" name="fb" value="3"/>
              <label for="cm_star-4"><i class="fa"></i></label>
              <input type="radio" id="cm_star-4" name="fb" value="4"/>
              <label for="cm_star-5"><i class="fa"></i></label>
              <input type="radio" id="cm_star-5" name="fb" value="5"/>
            </div>
        </div>
  
      </div>
      <!--Grid column-->
  

    </div> <!--duo2-->
    </div>
    <!--Grid row-->
  
  </section>
  <!-- Section: Testimonials -->






<footer class="card-footer">
  <div class="container-rodape">
    <div class="row">
        <div class="col-md-3 col-sm-6">
						<div class="single_rodape">
							<h4 class="title-secao-rodape">Navegação</h4>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="Cadastrar.html">Anuncie Aqui</a></li>
								<li><a href="anuncioProcura2.html">Pessoas procurando</a></li>
								<li><a href="anuncio2.html">Vagas disponíneis</a></li>
								<li><a href="login.html">Login</a></li>
							</ul>
						</div>
					</div> <!--  End Col -->

      <section id="contato1" class="col-sm-4">
        <div>Redes Sociais:</div> <br>
        <!-- Add icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            
        <hr class="d-block d-sm-none">
      </section>
      <section id="sobre" class="col-sm-4">
        <div>Sobre</div> <br>
        Ferramenta inteligente para ajudar você a encontrar o lugar perfeito. Plataforma mais simples e completa para quem está buscando ou oferecendo quartos para alugar ou moradias compartilhadas. Em poucos passos, você encontra o lugar perfeito para morar com seu colega de quarto ideal.
        <hr class="d-block d-sm-none">
      </section>
    </div>
    <div class="text-center"> &copy; Copyright ZeND 2018

    </div>
  </div> 
</footer>

</body>
</html>