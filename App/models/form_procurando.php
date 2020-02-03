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
$alvoDiretorio = "../../core/uploads/pessoas/";
$NamedoArquivo = basename($_FILES["file"]["name"]);
$CaminhoAlvoDoDiretorio = $alvoDiretorio . $NamedoArquivo;
$fileType = pathinfo($CaminhoAlvoDoDiretorio,PATHINFO_EXTENSION);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $descricao = $_POST['descricao'];
  $bairro = $_POST['bairro'];
  $valor_aluguel = $_POST['valor_aluguel'];
  $idade = $_POST['idade'];
  $tipo = $_POST['tipo'];


  $namearquiv = $_POST['nome'];



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
        $sql = "INSERT INTO anuncio_procurando (bairro, nome, telefone, idade,valor_aluguel,tipo, descricao, file_name) 
        VALUES (:bairro,:nome, :telefone, :idade, :valor_aluguel,:tipo, :descricao, :file_name)";

        $stmt = $pdo->prepare($sql);
      
        $stmt->execute(['bairro' => $bairro,'nome' => $nome, 'telefone' => $telefone, 'idade' => $idade,'valor_aluguel' => $valor_aluguel ,'tipo'=> $tipo, 'descricao' => $descricao, 'file_name' => $newfilename]);
        $statusMsg = "Anuncio cadastrado com sucesso";
        echo 'teste';
        echo $statusMsg;
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



  <link rel="stylesheet" type="text/css" href="../../public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/NavNew.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/footer.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/style2.css">
  
</head>
<body>

<!----------------------------->
<!-- Barra de navegação-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a href="#" class="navbar-brand ml-3"> 
            <img class="img-navbar" src="../../public/imgs/logos/logo01.png" style="width: 80px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="buscar/busca2.php">Procurar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mensagens</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Meus anúncios <span class="sr-only">(current)</span> </a>
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
            


<?php

    
// mysql de busca

$pdoQuery = "SELECT * FROM anuncio_procurando WHERE idade =idade";
//echo $pdoQuery;

$pdoResult = $pdo->prepare($pdoQuery);
//echo $pesquisa;

//defina sua vaviavel de busca para a variavel de busca do banco
$pdoExec = $pdoResult->execute(array(":idade"=>$idade));


if($pdoExec){
       // Se variavel existe  
       // mostra dados na entrada

   if($pdoResult->rowCount()>0){

                while ($linha = $pdoResult->fetch(PDO::FETCH_ASSOC)) {
                    // aqui eu mostro os valores de minha consulta
                    //include('busca.html');
                    
                    echo '<div class="col-md-4">';
                    echo '<div class="card-content">';
                    echo    '<div class="card-img">';
                    echo '   <img id="img-perfil-pesson" class="card-img-right flex-auto d-none d-lg-block" alt="#" src="../core/uploads/pessoas/' . $linha["file_name"] . '" style="width: 100px; height: 100px;">';

                    echo        '<span><h4>' .$linha["tipo"].'</h4></span>';
                    echo    '</div>';
                    echo    '<div class="card-desc">';
                    echo        '<h3>' .$linha["nome"]. '</h3>';
                    echo        '<a>' .$linha["telefone"]. '</a>';
                    echo '<br>';
                    echo        '<a> Posso pagar até: R$' .$linha["valor_aluguel"]. ',00 </a>';
                    echo        '<p>' . $linha["descricao"] . '.</p>';
                    echo            '<a href="#" class="btn btn-danger mr-3">Excluir</a>';  
                    echo            '<a href="#" class="btn btn-warning">Editar</a>';     
                    echo    '</div>';
                    echo '</div>';
                echo '</div>';

                }
              
          
        } // fim da condição $pdoResult->rowCount()>0
           
            // Mostra uma mensagem e limpar entradas    
        else {
            echo 'dado não cadastrado';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }

?>


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
 

