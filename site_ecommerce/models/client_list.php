<?php

class ListeClients extends Database {
    private $liste_clients = array();

    public function __construct() {
        $sql = "SELECT * FROM clients";
        $stmt = $this -> connect() -> prepare($sql);
        $stmt->execute();

        while($row = $stmt ->fetch()) {
            $client = new Client($row['id'], $row['pseudo'], $row['password'], $row['name'], $row['adress'], $row['postal_code'], $row['city'], $row['email']);
            $this->liste_clients[] = $client;
        }
    }

    public function getClientList() {
        return $this->liste_clients;
    }
}