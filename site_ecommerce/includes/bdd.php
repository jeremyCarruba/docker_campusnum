<?php

class Database {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "db";
        $this->username = "jeremy";
        $this->password ="Tekila963";
        $this->dbname = "boutique_jeremy";
        $this->charset = "utf8mb4";

        try {
        // dsn === Data Source Name
        $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);

        // Catching errors //
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }

    }

}

?>