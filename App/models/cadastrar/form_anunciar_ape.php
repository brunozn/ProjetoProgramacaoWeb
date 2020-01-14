<?php 

$statusMsg ="Minha Conta";

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate";


try {
  $dsn = "mysql:host=" . $servername . ";dbname=" . $dbname;
  $pdo = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
  echo "Falha na conexão " . $e->getMessage();
}

// File upload path
$alvoDiretorio = "uploads/";
$NamedoArquivo = basename($_FILES["file"]["name"]);
$CaminhoAlvoDoDiretorio = $alvoDiretorio . $NamedoArquivo;
$fileType = pathinfo($CaminhoAlvoDoDiretorio,PATHINFO_EXTENSION);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $descricao = $_POST['descricao'];
  $bairro = $_POST['bairro'];
  $valor_aluguel = $_POST['valor_aluguel'];


  $namearquiv = $_POST['namenome'];



  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg','gif','pdf', 'JPG');
  if(in_array($fileType, $allowTypes)){
  //echo $namearquiv;

  $temp = explode(".", $_FILES["file"]["name"]);
  $newfilename = $namearquiv. '.' . end($temp);



  if(empty($nome) || empty($telefone) || empty($bairro) || empty($valor_aluguel) || empty($descricao) ) {
    $status = "preencha os campos obrigatórios";

  } else{
      if(!move_uploaded_file($_FILES["file"]["tmp_name"], $alvoDiretorio . $newfilename) ){
            $statusMsg = "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
      }
      else{
        $sql = "INSERT INTO anuncio_ape (bairro, nome, telefone, valor_aluguel, descricao, file_name) 
        VALUES (:bairro,:nome, :telefone, :valor_aluguel, :descricao, :file_name)";

        $stmt = $pdo->prepare($sql);
      
        $stmt->execute(['bairro' => $bairro,'nome' => $nome, 'telefone' => $telefone, 'valor_aluguel' => $valor_aluguel , 'descricao' => $descricao, 'file_name' => $newfilename]);
        $statusMsg = "Anuncio cadastrado com sucesso";
      }
  }
  }else{
    $statusMsg = "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
  }

}else{
    $statusMsg = "Erro na requisição";
}

?>

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



  <link rel="stylesheet" type="text/css" href="../../../public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/NavNew.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/footer.css">
  
</head>
<body>

<!----------------------------->
<!-- Barra de navegação-->
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Procurar <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mensagens</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Meus anúncios </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Meu perfil </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contato1">Sobre</a>
              </li>
            </ul>

            <div>
                <li class="dropdown navbar-c-items open">
                    <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                        <img src="public/imgs/avatar.png" alt="user-img">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list">
                        <li class="text-center">
                            <h5>Olá, Usuario </h5>
                        </li>
                        <li>
                            <a  href="#"> Minha Conta</a></li>
                        <li><a  href="#"> Suporte</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </div>
          </div>
    </nav>
</header>
<!-- FIM da Barra de navegação-->
<!----------------------------->




<div class="container-box" style="padding-top: 150px;">

    <div class="container-box2">
        <div class="minha-conta">
            <h2  class="text-center"> 
              <?php
                 echo $statusMsg;
              ?>
            </h2>
        </div>
      



        <div class="row">
            <div class="col-xs-12 col-lg-3 col-md-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="thumb-xl member-thumb m-b-10 center-block">
                            <img src="public/imgs/avatar.png" alt="user-img">
                        </div> <div><h4 class="m-b-5">Brunozn</h4>
                        </div> <hr> 
                        <div class="text-left">
                            <p class="text-muted font-13">
                                <strong>Nome :</strong> <span class="m-l-15">Brunozn J.</span>
                            </p> 
                           
                                <p class="text-muted font-13"><strong>Celular :</strong><span class="m-l-15">

                                </span></p> 
                                <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">
                                   
                                </span></p>
                            </div> <div class="text-center">
                                <a href="#" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Editar Minha Conta</a>
                            </div> <hr> 
                            <hr> 
</div>
</div>
</div> 
<div class="col-xs-12 col-md-8 col-lg-9">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-9">
            <h4>Olá, você ainda não criou seu anúncio no House Mate!</h4> 
            <ul>
                <li>Você não receberá contatos de outras pessoas sem criar um anúncio.</li> 
                <li>Você precisa anunciar um quarto ou criar um perfil de busca de quarto para contatar pessoas pelo House Mate</li> 
                <li>Inclua uma foto em seu anúncio, para receber ainda mais contatos.</li>
            </ul> <div class="m-t-30 text-center">
                <a href="form_anunciar.html" class="btn btn-danger waves-effect waves-light">Criar Anúncio</a>
            </div>
             <hr>
            </div> 
          
                            </div>
                        </div>
                    </div>


       
       

        
    </div>
</div>
















<!--RODAPE-->

<footer class="card-footer">
  <div class="container">
    <div class="row">
      <section id="endereco" class="col-sm-3">
        <div>Navegar</div> <br>
        <li>
            <a href="index2.html">Home</a>
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
</html>
 

