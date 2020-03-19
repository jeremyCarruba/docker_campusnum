<?php

class Panier extends Database {

    private $panier = array();

    public function __construct() {
        
    }

    public function add($id) {
        if(empty($this->panier)){
        $this->panier[$id] = array(
            'quantity' => 1
            );
        } else {
            if(isset($this->panier[$id])) {
                $this->panier[$id]['quantity'] += 1;
            } else {
                $this->panier[$id] = array(
                    'quantity' => 1
                    );
            }
        }
    }

    public function update($id, $quantity) {
            $this->panier[$id]['quantity'] = $quantity;
        }

    public function delete($id) {
            unset($this->panier[$id]);
    }

    public function getPanier()
    {
        return $this->panier;
    }

    public function getPrice($id) {
        $sql = "SELECT price FROM products WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($id));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return (int)$result['price'];
    }

    public function setPanier($panier)
    {
        $this->panier = $panier;
    }
}

