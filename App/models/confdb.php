$servername ="localhost";
$username = "root";
$password = "";
$dbname = "db-housemate";

        // conexão para o banco mysql
        try {
            $dsn = "mysql:host=" . $servername . ";dbname=" . $dbname;
            $pdoConnect = new PDO($dsn, $username, $password);
          } catch(PDOException $e) {
            echo "Falha na conexão " . $e->getMessage();
    }