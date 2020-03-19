<?php

require('articles.php');

class Catalogue extends Database {
    private $catalogue = array();

    public function __construct() {
        $sql = "SELECT products.*, vetement.taille, chaussure.pointure FROM products
        LEFT JOIN chaussure ON chaussure.id_article = products.id
        LEFT JOIN vetement ON vetement.id_article = products.id
        ";
        $stmt = $this-> connect() -> query($sql);

        $data = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $key => $element) {
            if($element['pointure'] !== NULL) {
                $article = new Chaussure($element['id'], $element['name'], $element['artist'], $element['description'], $element['weight'], 
                $element['price'], $element['image'], $element['in_sale'], $element['genre_id'], $element['format_id'], $element['pointure']);

            } elseif($element['taille'] !== NULL) {
                $article = new Vetement($element['id'], $element['name'], $element['artist'], $element['description'], $element['weight'], 
                $element['price'], $element['image'], $element['in_sale'], $element['genre_id'], $element['format_id'], $element['taille']);

            } else {
                $article = new Article($element['id'], $element['name'], $element['artist'], $element['description'], $element['weight'], $element['price'], $element['image'], 
                $element['in_sale'], $element['genre_id'], $element['format_id']);
            }

            $this->catalogue[] = $article;
        }
    }

    public function getArticles() {
        return $this->catalogue;
    }

}