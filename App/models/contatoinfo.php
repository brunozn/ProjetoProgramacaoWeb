<?php 


include 'dbconfig.php';


$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } else {
      $sql = "INSERT INTO contactinfo (name, email, message) VALUES (:name, :email, :message)";
      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
      $status = "Your message was sent";
      $name = "";
      $email = "";
      $message = "";
    }
  }
}
?>