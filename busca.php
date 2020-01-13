<?php

include 'dbconfig.php';

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

    
    // Variavel de busca
    $bairro = $_POST['bairro'];
    
     // mysql de busca
    $pdoQuery = "SELECT * FROM anuncio_quarto WHERE bairro = :bairro";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);


    //defina sua vaviavel de busca para a variavel de busca do banco
    $pdoExec = $pdoResult->execute(array(":bairro"=>$bairro));


    if($pdoExec){
            // Se variavel existe  
            // mostra dados na entrada
        if($pdoResult->rowCount()>0){
            /*
///////////// Aqui mostra apenas um dado
            foreach($pdoResult as $row){
                $id = $row['id'];
                $nome = $row['nome'];
                $descricao = $row['descricao'];
                $telefone = $row['telefone'];
                $bairro = $row['bairro'];
                $quartomobilado = $row['quartomobilado'];
            }
*/
////////////// Aqui mostra todos os dados de acordo com a variavel de busca
                while ($linha = $pdoResult->fetch(PDO::FETCH_ASSOC)) {
                    // aqui eu mostro os valores de minha consulta
                    echo "nome: {$linha['nome']} - telefone: {$linha['telefone']}<br />";
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


?>

