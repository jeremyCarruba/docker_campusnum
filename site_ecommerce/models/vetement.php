<?php

class Vetement extends Article {
    private $taille;

    public function __construct($id, $name, $artist, $description, $weight, $price, $image, $in_sale, $genre_id, $format_id, $taille) {
        parent::__construct($id, $name, $artist, $description, $weight, $price, $image, $in_sale, $genre_id, $format_id);
        $this->taille = $taille;
    }

    public function getTaille() {
        return $this->taille;
    }
}