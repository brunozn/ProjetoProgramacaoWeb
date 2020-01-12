<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if($conn->connect_error){
    die("Conexao falhouuu");
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $bairro = $_POST['bairro'];
  $nomeEsobre = $_POST['nomeEsobre'];
  

  $data = $pdo->query("SELECT * FROM anuncio_quarto")->fetchAll();
  // and somewhere later:
  foreach ($data as $row){
      echo $row['nomeEsobre']."<br />\n";
  }
        ?>
        <script>
            alert('Falha no Login');
        </script>
        <?php
    






      
  }



?>
