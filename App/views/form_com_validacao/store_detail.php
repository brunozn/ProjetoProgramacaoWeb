<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate"; // aq vc coloca o nome do seu banco
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if($conn->connect_error){
    die("Conexao falhouuu");
}

if(isset($_POST['submit_row'])){
 
 
 $nome=$_POST['nome'];
 $idade=$_POST['idade'];
 $profissao=$_POST['profissao'];


 
  if($nome!="" && $idade!="" && $profissao!=""){
    mysqli_query($conn, "insert into procurando values('$nome','$idade','$profissao')");
  }
  else{
      echo "errrooooo";
  }
 
}
?>