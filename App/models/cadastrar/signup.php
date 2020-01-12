<?php  
 
 $servername ="localhost";
 $username = "root";
 $password = "";
 $dbname = "db-housemate";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if($conn->connect_error){
    die("Falha na conexão");
}
 
$name = $_POST["name"];
$genero = $_POST["genero"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordRepet = $_POST["passwordRepet"];
$salt = "db-housemate";

 
 
$sql = "INSERT INTO signup (name, genero, email, password, passwordRepet) 
VALUES ('$name','$genero','$email', '$password', '$passwordRepet')";
 
if($conn->query($sql) === TRUE){
    ?>
    <script>
        alert('Valores foram inseridos');
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('Valores não foram inseridos');
    </script>
    <?php
}
 
 
?>