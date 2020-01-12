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

// File upload path
$alvoDiretorio = "uploads/";
$NamedoArquivo = basename($_FILES["file"]["name"]);
$CaminhoAlvoDoDiretorio = $alvoDiretorio . $NamedoArquivo;
$fileType = pathinfo($CaminhoAlvoDoDiretorio,PATHINFO_EXTENSION);

                  

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nomeEsobre = $_POST['nomeEsobre'];
  $telefone = $_POST['telefone'];
  $descricao = $_POST['descricao'];
  $bairro = $_POST['bairro'];
  $quartomobilado = $_POST['quartomobilado'];
  $valor_aluguel = $_POST['valor_aluguel'];


   // Allow certain file formats
   $tiposPermitidos = array('jpg','png','jpeg','gif','pdf', 'JPG');
   if(in_array($fileType, $tiposPermitidos)){

       $temp = explode(".", $_FILES["file"]["name"]);
       $newfilename = $nomeEsobre. '.' . end($temp);

       // Upload file to server
      
  

  if(empty($nomeEsobre) || empty($telefone) || empty($bairro) || empty($valor_aluguel) || empty($descricao)) {
    $status = "preencha os campos obrigatórios";

    
  } else if(move_uploaded_file($_FILES["file"]["tmp_name"], $alvoDiretorio . $newfilename)){
      $sql = "INSERT INTO anuncio_quarto (bairro, nomeEsobre, telefone, quartomobilado, valor_aluguel, descricao, file_name, uploaded_on) 
      VALUES (:bairro,:nomeEsobre, :telefone, :quartomobilado, :valor_aluguel, :descricao, '".$newfilename."', NOW())";
      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['bairro' => $bairro,'nomeEsobre' => $nomeEsobre, 'telefone' => $telefone, 'quartomobilado' => $quartomobilado, 'valor_aluguel' => $valor_aluguel , 'descricao' => $descricao, 'file_name' => $newfilename]);
 

}else{
    $statusMsg = "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
}

}else{
  $statusMsg = 'Desculpe, apenas arquivos JPG, JPEG, PNG, GIF e PDF podem ser carregados.';
}
}else{
$statusMsg = 'Selecione um arquivo para enviar.';
}


?>