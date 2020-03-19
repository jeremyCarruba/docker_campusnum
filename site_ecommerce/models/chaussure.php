<?php

class Chaussure extends Article {
    private $pointure;

    public function __construct($id, $name, $artist, $description, $weight, $price, $image, $in_sale, $genre_id, $format_id, $pointure) {
        parent::__construct($id, $name, $artist, $description, $weight, $price, $image, $in_sale, $genre_id, $format_id);
        $this->pointure = $pointure;
    }

    public function getPointure() {
        return $this->pointure;
    }
}
