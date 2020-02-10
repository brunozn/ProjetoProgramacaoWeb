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
$alvoDiretorio = "../core/uploads/pessoas/";
$NamedoArquivo = basename($_FILES["file"]["name"]);
$CaminhoAlvoDoDiretorio = $alvoDiretorio . $NamedoArquivo;
$fileType = pathinfo($CaminhoAlvoDoDiretorio,PATHINFO_EXTENSION);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $descricao = $_POST['descricao'];
  $bairro = $_POST['bairro'];

  $valor_aluguel = $_POST['valor_aluguel'];
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
        $sql = "INSERT INTO anuncio_procurando (bairro, nome, telefone,valor_aluguel,tipo, descricao, file_name) 
        VALUES (:bairro,:nome, :telefone, :valor_aluguel,:tipo, :descricao, :file_name)";

        $stmt = $pdo->prepare($sql);
      
        $stmt->execute(['bairro' => $bairro,'nome' => $nome, 'telefone' => $telefone,'valor_aluguel' => $valor_aluguel ,'tipo'=> $tipo, 'descricao' => $descricao, 'file_name' => $newfilename]);
        $statusMsg = "Anuncio cadastrado com sucesso";
        echo $statusMsg;
      }
  }
  }else{
    $statusMsg = "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
  }

}else{
    $statusMsg = "Erro na requisição";
}

include('mostrarAnuncioCadastrado.php')
?>
