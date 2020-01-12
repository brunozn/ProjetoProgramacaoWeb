<?php 

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

/*
//$tipo = $_POST["tipo"]; //menos seguro!
$tipo = filter_input(INPUT_POST, 'tipo'); //mais seguro!
*/

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $descricao = $_POST['descricao'];
  $bairro = $_POST['bairro'];
  $valor_aluguel = $_POST['valor_aluguel'];
  

  if(empty($nome) || empty($telefone) || empty($bairro) || empty($valor_aluguel) || empty($descricao)) {
    $status = "preencha os campos obrigatórios";
  } else {
      $sql = "INSERT INTO anuncio_casa (bairro, nome, telefone, valor_aluguel, descricao) 
      VALUES (:bairro,:nome, :telefone, :valor_aluguel, :descricao)";
      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['bairro' => $bairro,'nome' => $nome, 'telefone' => $telefone, 'valor_aluguel' => $valor_aluguel , 'descricao' => $descricao]);
    }
  }



?>
