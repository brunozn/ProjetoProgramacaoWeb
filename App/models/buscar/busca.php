<?php
include_once('cabecalho.php');


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
$pdoQuery = "SELECT * FROM anuncio_ape WHERE bairro LIKE " . $pesquisa;
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
                    
                    echo '<div class="col-md-6" style="margin-bottom:100px;">';
                    echo '  <div class="card flex-md-row mb-6 shadow-sm h-md-250">';
                    echo '      <div class="card-body d-flex flex-column align-items-start">';
                    echo '     <strong class="d-inline-block mb-2 text-primary"> casa</strong>';
                    echo '      <h6 class="mb-0">';
                    echo '         <a class="text-dark" href="#">' . $linha["descricao"] . '</a>';
                    echo '      </h6>';
                    echo '      <a class="btn btn-outline-primary btn-sm" role="button" href="index.html">Ver Detalhes</a>';
                    echo '   </div>';
                    echo '   <img id="img-anuncio" class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="../../core/uploads/anuncio/' . $linha["file_name"] . '" style="width: 200px; height: 250px;">';
                    echo '</div>';
                    echo '</div>';
                    
                    //echo "nome: {$linha['nome']} - telefone: {$linha['telefone']}<br />";
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

