<?php
 
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if($conn->connect_error){
    die("Conexao falhouuu");
}
 
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "db-housemate";

 
 
$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and
    password = '".$password."'");
 
$row = mysqli_fetch_array($sql);
 
if($row["total"] > 0){
    ?>
    <script>
        alert('Logado com sucesso');
    </script>
     
    <?php
}
else{
    ?>
    <script>
        alert('Falha no Login');
    </script>
    <?php
}
 
 
 
 
 
 
 
 
?>