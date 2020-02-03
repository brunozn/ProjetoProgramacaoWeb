<?php 


include 'dbconfig.php';


$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $sobrename = $_POST['sobrename'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if(empty($name) || empty($email) || empty($message)) {
    $status = "Campos pendentes obrigatórios ";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Entre com um nome válido";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Por favor, entre com email valido";
    } else {
      $sql = "INSERT INTO contactinfo (name, sobrename, email, message) VALUES (:name, :sobrename, :email, :message)";
      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['name' => $name, 'sobrename' => $sobrename, 'email' => $email, 'message' => $message]);
      $status = "Sua mensagem foi enviada";
      $name = "";
      $email = "";
      $message = "";
    }
  }
}
?>