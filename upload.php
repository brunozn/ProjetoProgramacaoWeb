<?php
// Include the database configuration file
include 'dbconfig.php';
$statusMsg = '';

// File upload path
$alvoDiretorio = "uploads/";
$NamedoArquivo = basename($_FILES["file"]["name"]);
$CaminhoAlvoDoDiretorio = $alvoDiretorio . $NamedoArquivo;
$fileType = pathinfo($CaminhoAlvoDoDiretorio,PATHINFO_EXTENSION);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $namearquiv = $_POST['namenome'];



    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf', 'JPG');
    if(in_array($fileType, $allowTypes)){

        /*
        produzirá um número aleatório com base no horário atual e anexará a extensão do arquivo enviado originalmente.
        $newfilename = round(microtime(true)) . '.' . end($temp);
        */

        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = $namearquiv. '.' . end($temp);

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $alvoDiretorio . $newfilename)){
        //if(move_uploaded_file($_FILES["file"]["tmp_name"], $CaminhoAlvoDoDiretorio)){
            // Inserir nome do arquivo de imagem no banco de dados
            
            
            $sql = "INSERT into images (file_name, uploaded_on) VALUES ('".$newfilename."', NOW())";
            //$insert = $pdo->prepare($sql);
            $stmt = $pdo->prepare($sql);
                    
            $insert = $stmt->execute(['file_name' => $NamedoArquivo]);
                  





            if($insert){
                $statusMsg = "O arquivo ".$NamedoArquivo. " foi enviado com sucesso.";
            }else{
                $statusMsg = "Falha no upload do arquivo. Tente novamente.";
            } 
        }else{
            $statusMsg = "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
        }
    }else{
        $statusMsg = 'Desculpe, apenas arquivos JPG, JPEG, PNG, GIF e PDF podem ser carregados.';
    }
}else{
    $statusMsg = 'Selecione um arquivo para enviar.';
}

// Display status message
echo $statusMsg;
?>