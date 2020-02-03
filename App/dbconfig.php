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

?>


