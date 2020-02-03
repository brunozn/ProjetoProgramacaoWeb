<?php
include_once('cabecalho2.php');


$id = "";
$nome = "";
$bairro = "";
$telefone = "";
$quartomobilado = "";
$descricao = "";


$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate";

        // conexão para o banco mysql
        try {
            $dsn = "mysql:host=" . $servername . ";dbname=" . $dbname;
            $pdoConnect = new PDO($dsn, $username, $password);
          } catch(PDOException $e) {
            echo "Falha na conexão " . $e->getMessage();
    }

if(isset($_POST['Find'])){
 /*
    // Variavel de busca
    $bairro = $_POST['bairro'];

    // mysql de busca
    $pesquisa ="'%" . $bairro . "%'";


    $seletorform = $_POST['seletorform'];
    
    
switch ($seletorform) {
    case "quarto":
        $pdoQuery = "SELECT * FROM anuncio_quarto WHERE bairro LIKE " . $pesquisa;
        break;
    case "ape":
        $pdoQuery = "SELECT * FROM anuncio_ape WHERE bairro LIKE " . $pesquisa;
        break;
    case "casa":
        $pdoQuery = "SELECT * FROM anuncio_casa WHERE bairro LIKE " . $pesquisa;
        break;
}
*/
// Variavel de busca
$bairro = $_POST['bairro'];
    
// mysql de busca
$pesquisa ="'%" . $bairro . "%'";
$pdoQuery = "SELECT * FROM anuncio_procurando WHERE bairro LIKE " . $pesquisa;
//echo $pdoQuery;

$pdoResult = $pdoConnect->prepare($pdoQuery);
//echo $pesquisa;

//defina sua vaviavel de busca para a variavel de busca do banco
$pdoExec = $pdoResult->execute(array(":bairro"=>$pesquisa));


if($pdoExec){
       // Se variavel existe  
       // mostra dados na entrada

   if($pdoResult->rowCount()>0){

    while ($linha = $pdoResult->fetch(PDO::FETCH_ASSOC)) {
        // aqui eu mostro os valores de minha consulta
        //include('busca.html');
        
        echo '<div class="col-md-6 col-sm-12">';
        echo '<div class="card-content">';
        echo    '<div class="card-img">';
        echo '   <img id="img-perfil-pesson" class="card-img-right flex-auto d-none d-lg-block" alt="#" src="../../../app/core/uploads/pessoas/' . $linha["file_name"] . '" style="width: 100px; height: 100px;">';

        echo        '<span><h4>' .$linha["tipo"].'</h4></span>';
        echo    '</div>';
        echo    '<div class="card-desc">';
        echo        '<h3>' .$linha["nome"]. '</h3>';
        echo        '<a>' .$linha["telefone"]. '</a>';
        echo '<br>';
        echo        '<a> Posso pagar até: R$' .$linha["valor_aluguel"]. ',00 </a>';
        echo        '<p>' . $linha["descricao"] . '.</p>';
        echo            '<a href="#" class="btn-card">Mais informações</a>';   
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
}


include_once('rodape.php');

?>

